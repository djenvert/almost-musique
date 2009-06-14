<div class="projects index">
<h2><?php __('Projects');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('date_start');?></th>
	<th><?php echo $paginator->sort('date_end');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($projects as $project):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $project['Project']['id']; ?>
		</td>
		<td>
			<?php echo $project['Project']['title']; ?>
		</td>
		<td>
			<?php echo $time->format('d/m/Y', $project['Project']['date_start']); ?>
		</td>
		<td>
			<?php echo $time->format('d/m/Y', $project['Project']['date_end']); ?>
		</td>
		<td>
			<?php echo $project['Project']['published']; ?>
		</td>
		<td>
			<?php echo $project['Project']['user_id']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $html->link(__('Add images', true), array('action' => 'image_add', $project['Project']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Project', true), array('action' => 'add')); ?></li>
	</ul>
</div>
