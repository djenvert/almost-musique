<?php 
/* SVN FILE: $Id$ */
/* User Fixture generated on: 2009-05-10 00:05:08 : 1241907488*/

class UserFixture extends CakeTestFixture {
	var $name = 'User';
	var $table = 'users';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first_name' => array('type'=>'string', 'null' => false, 'length' => 40),
		'last_name' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'slug' => array('type'=>'string', 'null' => false),
		'username' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'unique'),
		'email' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'short_desc' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'long_desc' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'activity' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'password' => array('type'=>'string', 'null' => false, 'length' => 40),
		'group_id' => array('type'=>'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'signature' => array('type'=>'string', 'null' => false, 'length' => 50),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'last_login' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'mobile_phone' => array('type'=>'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 1), 'group_id' => array('column' => 'group_id', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'first_name'  => 'Lorem ipsum dolor sit amet',
		'last_name'  => 'Lorem ipsum dolor sit amet',
		'slug'  => 'Lorem ipsum dolor sit amet',
		'username'  => 'Lorem ipsum dolor sit amet',
		'email'  => 'Lorem ipsum dolor sit amet',
		'short_desc'  => 'Lorem ipsum dolor sit amet',
		'long_desc'  => 'Lorem ipsum dolor sit amet',
		'activity'  => 1,
		'password'  => 'Lorem ipsum dolor sit amet',
		'group_id'  => 1,
		'signature'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-05-10 00:18:08',
		'modified'  => '2009-05-10 00:18:08',
		'last_login'  => '2009-05-10 00:18:08',
		'mobile_phone'  => 'Lorem ipsum dolor '
	));
}
?>