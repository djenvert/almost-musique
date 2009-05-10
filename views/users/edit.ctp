<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('slug');
		echo $form->input('username');
		echo $form->input('email');
		echo $form->input('short_desc');
		echo $form->input('long_desc');
		echo $form->input('activity');
		echo $form->input('password');
		echo $form->input('group_id');
		echo $form->input('signature');
		echo $form->input('last_login');
		echo $form->input('mobile_phone');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
	</ul>
</div>
