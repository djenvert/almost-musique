<?php 
/* SVN FILE: $Id$ */
/* News Fixture generated on: 2009-05-10 00:05:11 : 1241907371*/

class NewsFixture extends CakeTestFixture {
	var $name = 'News';
	var $table = 'news';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => false),
		'slug' => array('type'=>'string', 'null' => false, 'key' => 'index'),
		'text' => array('type'=>'text', 'null' => false),
		'published' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'date_start' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'date_end' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'comment_count' => array('type'=>'integer', 'null' => false, 'default' => '0'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => '0'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'IDX_SLUG' => array('column' => 'slug', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'slug'  => 'Lorem ipsum dolor sit amet',
		'text'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'published'  => 1,
		'date_start'  => '2009-05-10 00:16:11',
		'date_end'  => '2009-05-10 00:16:11',
		'comment_count'  => 1,
		'user_id'  => 1,
		'created'  => '2009-05-10 00:16:11',
		'modified'  => '2009-05-10 00:16:11'
	));
}
?>