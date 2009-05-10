<?php 
/* SVN FILE: $Id$ */
/* Project Fixture generated on: 2009-05-10 00:05:16 : 1241907436*/

class ProjectFixture extends CakeTestFixture {
	var $name = 'Project';
	var $table = 'projects';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => false),
		'slug' => array('type'=>'string', 'null' => false),
		'text' => array('type'=>'text', 'null' => false),
		'date_start' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'date_end' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'published' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => '0'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'slug'  => 'Lorem ipsum dolor sit amet',
		'text'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'date_start'  => '2009-05-10 00:17:16',
		'date_end'  => '2009-05-10 00:17:16',
		'published'  => 1,
		'user_id'  => 1,
		'created'  => '2009-05-10 00:17:16',
		'modified'  => '2009-05-10 00:17:16'
	));
}
?>