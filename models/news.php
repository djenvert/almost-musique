<?php
class News extends AppModel {

	var $name = 'News';
	var $validate = array(
		'title' => array('notempty'),
		'slug' => array('notempty'),
		'published' => array('numeric'),
		'comment_count' => array('numeric'),
		'user_id' => array('numeric')
	);
	
	var $actsAs = array('sluggable');

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