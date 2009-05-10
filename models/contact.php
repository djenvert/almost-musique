<?php
class Contact extends AppModel {
    var $useTable = false;
    var $_schema = array(
        'name'		=>array('type'=>'string', 'length'=>100), 
        'email'		=>array('type'=>'string', 'length'=>255), 
        'details'	=>array('type'=>'text')
    );

	var $validate = array(
	    'name' => array(
	        'rule'=>array('minLength', 1), 
	        'message'=>'Votre nom est obligatoire' ),
	    'email' => array(
	        'rule'=>'email', 
	        'message'=>'Vous devez saisir une adresse email valide' ),
	    'details' => array(
	        'rule'=>array('minLength', 1), 
	        'message'=>'Vous n\avez vraiment rien à dire ?' )
	);
}
?>