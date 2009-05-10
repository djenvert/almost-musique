<div class="news form">
<?php echo $form->create('News');?>
	<fieldset>
 		<legend><?php __('Edit News');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('slug');
		echo $form->input('text');
		echo $form->input('published');
		echo $form->input('date_start');
		echo $form->input('date_end');
		echo $form->input('comment_count');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('News.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('News.id'))); ?></li>
		<li><?php echo $html->link(__('List News', true), array('action' => 'index'));?></li>
	</ul>
</div>
