<div class="news index">
<h2><?php __('News');?></h2>
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
	<th><?php echo $paginator->sort('slug');?></th>
	<th><?php echo $paginator->sort('text');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('date_start');?></th>
	<th><?php echo $paginator->sort('date_end');?></th>
	<th><?php echo $paginator->sort('comment_count');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($news as $news):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $news['News']['id']; ?>
		</td>
		<td>
			<?php echo $news['News']['title']; ?>
		</td>
		<td>
			<?php echo $news['News']['slug']; ?>
		</td>
		<td>
			<?php echo $news['News']['text']; ?>
		</td>
		<td>
			<?php echo $news['News']['published']; ?>
		</td>
		<td>
			<?php echo $news['News']['date_start']; ?>
		</td>
		<td>
			<?php echo $news['News']['date_end']; ?>
		</td>
		<td>
			<?php echo $news['News']['comment_count']; ?>
		</td>
		<td>
			<?php echo $news['News']['user_id']; ?>
		</td>
		<td>
			<?php echo $news['News']['created']; ?>
		</td>
		<td>
			<?php echo $news['News']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $news['News']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $news['News']['id'])); ?>
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
		<li><?php echo $html->link(__('New News', true), array('action' => 'add')); ?></li>
	</ul>
</div>
