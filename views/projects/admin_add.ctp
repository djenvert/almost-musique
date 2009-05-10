<div class="projects form">
<?php echo $form->create('Project');?>
	<fieldset>
 		<legend><?php __('Add Project');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('slug');
		echo $form->input('text');
		echo $form->input('date_start');
		echo $form->input('date_end');
		echo $form->input('published');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Projects', true), array('action' => 'index'));?></li>
	</ul>
</div>
