
<div class="projects form">
<?php echo $form->create('Project', array('action' => 'image_add', 'type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Edit Project');?></legend>
	<?php
	echo $form->input('id');
	echo $form->input('title');
	echo $this->element('attachments', array('plugin' => 'media', 'assocAlias' => 'Poster', 'model' => 'Project'));
	echo $this->element('attachments', array('plugin' => 'media', 'assocAlias' => 'Photo', 'model' => 'Project'));	
	echo $this->element('attachments', array('plugin' => 'media', 'assocAlias' => 'Attachment', 'model' => 'Project'));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Project.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Project.id'))); ?></li>
		<li><?php echo $html->link(__('List Projects', true), array('action' => 'index'));?></li>
	</ul>
</div>
