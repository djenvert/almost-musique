<div class="posts form">
<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php __('Edit Post');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('slug');
		echo $form->input('date');
		echo $form->input('content');
		echo $form->input('post_excerpt');
		echo $form->input('ping_status');
		echo $form->input('post_name');
		echo $form->input('to_ping');
		echo $form->input('pinged');
		echo $form->input('guid');
		echo $form->input('comment_count');
		echo $form->input('published');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Post.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Post.id'))); ?></li>
		<li><?php echo $html->link(__('List Posts', true), array('action' => 'index'));?></li>
	</ul>
</div>
