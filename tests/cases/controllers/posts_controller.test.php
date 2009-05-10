<?php 
/* SVN FILE: $Id$ */
/* PostsController Test cases generated on: 2009-05-10 00:05:50 : 1241907530*/
App::import('Controller', 'Posts');

class TestPosts extends PostsController {
	var $autoRender = false;
}

class PostsControllerTest extends CakeTestCase {
	var $Posts = null;

	function startTest() {
		$this->Posts = new TestPosts();
		$this->Posts->constructClasses();
	}

	function testPostsControllerInstance() {
		$this->assertTrue(is_a($this->Posts, 'PostsController'));
	}

	function endTest() {
		unset($this->Posts);
	}
}
?>