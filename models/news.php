<?php
class News extends AppModel {

	var $name = 'News';
	var $validate = array(
		'title' => array('notempty'),
		'published' => array('numeric'),
		'user_id' => array('numeric')
	);
	
	var $actsAs = array('WhoDunnit','Sluggable' => array('translation' => 'utf-8'));

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>