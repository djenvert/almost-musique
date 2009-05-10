<?php 
    echo $form->create('Users', array('action' => 'login'));
    echo $form->input('username');
	echo $form->input('password');
    echo $form->end('Se connecter');
?>