<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	var $paginate = array('limit' => 3,
						 'page' => 1,
						 'recursive' => 1,
						 'conditions' => array('Projects.published_date <= NOW()'/*, 'Article.published = 1'*/),
	// 'fields'=>array('Artist.id', 'Artist.first_name', 'Artist.last_name', 'Artist.modified', 'Artist.created', 'User.signature', 'User.id'),
						 
	);
	function index() {
		$this->Project->recursive = 0;
		$this->paginate = array('limit' => 3,
								'conditions' => array('Project.date_start <= NOW()', 'Project.published' => 1),
								'order' => array ('Project.date_start' => 'desc', 'Project.id' => 'DESC')
								);
								
		$this->set('projects', $this->paginate(null, array('published' => 1)));
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
		$this->set('tags', $this->Project->findTags());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->flash(__('Project saved.', true), array('action'=>'index'));
			} else {
			}
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->flash(__('The Project has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		if ($this->Project->del($id)) {
			$this->flash(__('Project deleted', true), array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->flash(__('Project saved.', true), array('action'=>'index'));
			} else {
			}
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->flash(__('The Project has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$users = $this->Project->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		if ($this->Project->del($id)) {
			$this->flash(__('Project deleted', true), array('action'=>'index'));
		}
	}

}
?>