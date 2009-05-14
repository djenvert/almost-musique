<?php
class Project extends AppModel {

	var $name = 'Project';
	var $actsAs = array('Tagging.Taggable', 'WhoDunnit', 'Sluggable' => array('translation' => 'utf-8'));
	
	var $validate = array(
		'title' => array('notempty'),
		'slug' => array('notempty'),
		'published' => array('numeric'),
		'user_id' => array('numeric')
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