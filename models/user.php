<?php
class User extends AppModel {

	var $name = 'User';
	var $actsAs = array('Sluggable' => array('translation' => 'utf-8'), 'Acl' => array('requester'));
	
	var $validate = array(
		'first_name' => array('notempty'),
		'slug' => array('notempty'),
		'activity' => array('numeric'),
		'password' => array('notempty'),
		'signature' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	function parentNode() {
	    if (!$this->id && empty($this->data)) {
	        return null;
	    }
	    $data = $this->data;
	    if (empty($this->data)) {
	        $data = $this->read();
	    }
	    if (!$data['User']['group_id']) {
	        return null;
	    } else {
	        return array('Group' => array('id' => $data['User']['group_id']));
	    }
	}
	
	function afterSave($created) {
	        if (!$created) {
	            $parent = $this->parentNode();
	            $parent = $this->node($parent);
	            $node = $this->node();
	            $aro = $node[0];
	            $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
	            $this->Aro->save($aro);
	        }
	}
}
?>