<div class="posts index">
<h2><?php __('Posts');?></h2>
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
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('content');?></th>
	<th><?php echo $paginator->sort('post_excerpt');?></th>
	<th><?php echo $paginator->sort('ping_status');?></th>
	<th><?php echo $paginator->sort('post_name');?></th>
	<th><?php echo $paginator->sort('to_ping');?></th>
	<th><?php echo $paginator->sort('pinged');?></th>
	<th><?php echo $paginator->sort('guid');?></th>
	<th><?php echo $paginator->sort('comment_count');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($posts as $post):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $post['Post']['id']; ?>
		</td>
		<td>
			<?php echo $post['Post']['title']; ?>
		</td>
		<td>
			<?php echo $post['Post']['slug']; ?>
		</td>
		<td>
			<?php echo $post['Post']['date']; ?>
		</td>
		<td>
			<?php echo $post['Post']['content']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_excerpt']; ?>
		</td>
		<td>
			<?php echo $post['Post']['ping_status']; ?>
		</td>
		<td>
			<?php echo $post['Post']['post_name']; ?>
		</td>
		<td>
			<?php echo $post['Post']['to_ping']; ?>
		</td>
		<td>
			<?php echo $post['Post']['pinged']; ?>
		</td>
		<td>
			<?php echo $post['Post']['guid']; ?>
		</td>
		<td>
			<?php echo $post['Post']['comment_count']; ?>
		</td>
		<td>
			<?php echo $post['Post']['published']; ?>
		</td>
		<td>
			<?php echo $post['Post']['user_id']; ?>
		</td>
		<td>
			<?php echo $post['Post']['created']; ?>
		</td>
		<td>
			<?php echo $post['Post']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $post['Post']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $post['Post']['id'])); ?>
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
		<li><?php echo $html->link(__('New Post', true), array('action' => 'add')); ?></li>
	</ul>
</div>
