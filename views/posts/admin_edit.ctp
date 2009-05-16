<div class="posts form">
<?php echo $form->create('Post');?>
	<fieldset>
 		<legend><?php echo sprintf(__('%s %s', true), 
		             __(ucwords($this->action), true), 
		             __('Post', true));?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('date', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $tinymce->input('content');
		echo $tagging->input('tags');
		echo $form->input('published');
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
