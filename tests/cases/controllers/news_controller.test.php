<?php 
/* SVN FILE: $Id$ */
/* NewsController Test cases generated on: 2009-05-10 00:05:33 : 1241907513*/
App::import('Controller', 'News');

class TestNews extends NewsController {
	var $autoRender = false;
}

class NewsControllerTest extends CakeTestCase {
	var $News = null;

	function startTest() {
		$this->News = new TestNews();
		$this->News->constructClasses();
	}

	function testNewsControllerInstance() {
		$this->assertTrue(is_a($this->News, 'NewsController'));
	}

	function endTest() {
		unset($this->News);
	}
}
?>