<?php
class Post extends AppModel {

	var $name = 'Post';
	var $actsAs = array('Tagging.Taggable', 'WhoDunnit', 'Sluggable' => array('translation' => 'utf-8'));
	var $validate = array(
		'title' => array('notempty'),
		'guid' => array('notempty'),
		'published' => array('numeric'),
	);

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