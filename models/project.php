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
	/**
	 * renvoie les derniers projets nantis d'un poster
	 *
	 * @param string $options 
	 * @return void
	 * @author Guillaume Sautereau
	 */
	function __findPoster($options) { 
	$options = am(array('conditions' => array('highlight' => true, 'published' => true, 'date_start <= NOW()', 'date_end >= NOW()'), 
	                      'order' => array('date_start' => 'desc'), 
	                      'limit' => 4,
	 					 'contain' => 'Poster'
	                     ), $options 
	               ); 
	  $posters = $this->find('all', $options);	
		return $posters;
	}

}
?>