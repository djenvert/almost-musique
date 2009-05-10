<?php 
/* SVN FILE: $Id$ */
/* News Test cases generated on: 2009-05-10 00:05:11 : 1241907371*/
App::import('Model', 'News');

class NewsTestCase extends CakeTestCase {
	var $News = null;
	var $fixtures = array('app.news', 'app.user');

	function startTest() {
		$this->News =& ClassRegistry::init('News');
	}

	function testNewsInstance() {
		$this->assertTrue(is_a($this->News, 'News'));
	}

	function testNewsFind() {
		$this->News->recursive = -1;
		$results = $this->News->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('News' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>