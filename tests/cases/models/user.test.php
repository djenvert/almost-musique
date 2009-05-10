<?php 
/* SVN FILE: $Id$ */
/* User Test cases generated on: 2009-05-10 00:05:08 : 1241907488*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $User = null;
	var $fixtures = array('app.user', 'app.news', 'app.post', 'app.project');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function testUserInstance() {
		$this->assertTrue(is_a($this->User, 'User'));
	}

	function testUserFind() {
		$this->User->recursive = -1;
		$results = $this->User->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('User' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>