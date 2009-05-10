<?php
class NewsController extends AppController {

	var $name = 'News';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		$this->set('news', $this->News->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->News->create();
			if ($this->News->save($this->data)) {
				$this->flash(__('News saved.', true), array('action'=>'index'));
			} else {
			}
		}
		$users = $this->News->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->News->save($this->data)) {
				$this->flash(__('The News has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->News->read(null, $id);
		}
		$users = $this->News->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		if ($this->News->del($id)) {
			$this->flash(__('News deleted', true), array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		$this->set('news', $this->News->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->News->create();
			if ($this->News->save($this->data)) {
				$this->flash(__('News saved.', true), array('action'=>'index'));
			} else {
			}
		}
		$users = $this->News->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->News->save($this->data)) {
				$this->flash(__('The News has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->News->read(null, $id);
		}
		$users = $this->News->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		if ($this->News->del($id)) {
			$this->flash(__('News deleted', true), array('action'=>'index'));
		}
	}

}
?>