<?php 
/* SVN FILE: $Id$ */
/* AlmostMusique schema generated on: 2009-05-16 18:05:33 : 1242491073*/
class AlmostMusiqueSchema extends CakeSchema {
	var $name = 'AlmostMusique';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $aros = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'model' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $aros_acos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'aro_id' => array('type' => 'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
		'aco_id' => array('type' => 'integer', 'null' => false, 'length' => 10),
		'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1))
	);
	var $groups = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 100),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $news = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false),
		'slug' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		'text' => array('type' => 'text', 'null' => false),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_start' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'date_end' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'comment_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_SLUG' => array('column' => 'slug', 'unique' => 0))
	);
	var $posts = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		'slug' => array('type' => 'string', 'null' => false, 'key' => 'index'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'content' => array('type' => 'text', 'null' => false),
		'post_excerpt' => array('type' => 'text', 'null' => false),
		'ping_status' => array('type' => 'string', 'null' => false, 'default' => 'open', 'length' => 20),
		'post_name' => array('type' => 'string', 'null' => false, 'length' => 200),
		'to_ping' => array('type' => 'text', 'null' => false),
		'pinged' => array('type' => 'text', 'null' => false),
		'guid' => array('type' => 'string', 'null' => false),
		'comment_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 0), 'slug' => array('column' => 'slug', 'unique' => 0))
	);
	var $projects = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false),
		'slug' => array('type' => 'string', 'null' => false),
		'text' => array('type' => 'text', 'null' => false),
		'highlight' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_start' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'date_end' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'published' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'length' => 40),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'slug' => array('type' => 'string', 'null' => false),
		'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'key' => 'unique'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'short_desc' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40),
		'long_desc' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'activity' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'signature' => array('type' => 'string', 'null' => false, 'length' => 50),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'last_login' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'mobile_phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'username', 'unique' => 1), 'group_id' => array('column' => 'group_id', 'unique' => 0))
	);
}
?>