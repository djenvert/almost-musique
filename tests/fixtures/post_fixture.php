<?php 
/* SVN FILE: $Id$ */
/* Post Fixture generated on: 2009-05-10 00:05:48 : 1241907408*/

class PostFixture extends CakeTestFixture {
	var $name = 'Post';
	var $table = 'posts';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type'=>'string', 'null' => false, 'key' => 'index'),
		'slug' => array('type'=>'string', 'null' => false, 'key' => 'index'),
		'date' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'content' => array('type'=>'text', 'null' => false),
		'post_excerpt' => array('type'=>'text', 'null' => false),
		'ping_status' => array('type'=>'string', 'null' => false, 'default' => 'open', 'length' => 20),
		'post_name' => array('type'=>'string', 'null' => false, 'length' => 200),
		'to_ping' => array('type'=>'text', 'null' => false),
		'pinged' => array('type'=>'text', 'null' => false),
		'guid' => array('type'=>'string', 'null' => false),
		'comment_count' => array('type'=>'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'published' => array('type'=>'boolean', 'null' => false, 'default' => '0'),
		'user_id' => array('type'=>'integer', 'null' => false, 'default' => '0'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 0), 'slug' => array('column' => 'slug', 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'slug'  => 'Lorem ipsum dolor sit amet',
		'date'  => '2009-05-10 00:16:48',
		'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'post_excerpt'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'ping_status'  => 'Lorem ipsum dolor ',
		'post_name'  => 'Lorem ipsum dolor sit amet',
		'to_ping'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'pinged'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'guid'  => 'Lorem ipsum dolor sit amet',
		'comment_count'  => 1,
		'published'  => 1,
		'user_id'  => 1,
		'created'  => '2009-05-10 00:16:48',
		'modified'  => '2009-05-10 00:16:48'
	));
}
?>