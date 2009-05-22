<?php
class Project extends AppModel {

	var $name = 'Project';
	var $actsAs = array('Tagging.Taggable', 'WhoDunnit', 'Sluggable' => array('translation' => 'utf-8'));

	var $validate = array(
		'title' => array('notempty'),
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
	
	var $hasMany = array(
		'Poster' => array(
		                    'className' => 'Media.Attachment',
		                    'foreignKey' => 'foreign_key',
		                    'conditions' => array('model' => 'Project', 'group' => 'poster'),
		                    'dependent' => true,
		                    ),
		'Attachment' => array(
						'className' => 'Media.Attachment',
						'foreignKey' => 'foreign_key',
						'conditions' => array('model' => 'Project', 'group' => 'attachment'),
						'dependent' => true,
				             ),
		'Photo' => array(
			            'className' => 'Media.Attachment',
				                    'foreignKey' => 'foreign_key',
				                    'conditions' => array('model' => 'Project', 'group' => 'photo'),
				                    'dependent' => true,
			                  ),
	);	

}
?>