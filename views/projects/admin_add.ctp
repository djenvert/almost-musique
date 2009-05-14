<div class="projects form">
<?php echo $form->create('Project');?>
	<fieldset>
 		<legend><?php __('Add Project');?></legend>
	<?php
	echo $form->input('title');
	echo $form->input('text');
	echo $tagging->input('tags');
	echo $form->input('highlight');
	echo $form->input('date_start', array('type' => 'date', 'dateFormat' => 'DMY'));
	echo $form->input('date_end', array('type' => 'date', 'dateFormat' => 'DMY'));
	echo $form->input('published');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Projects', true), array('action' => 'index'));?></li>
	</ul>
</div>
