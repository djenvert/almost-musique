<?php
class ProjectsController extends AppController {

	var $name = 'Projects';

	var $helpers = array('Tagging.Tagging', 'tinymce');
	
	function index() {
		$this->Project->recursive = 0;
		$this->paginate = array('limit' => 3,
								'conditions' => array('Project.date_start <= NOW()', 'Project.published' => 1),
								'order' => array ('Project.date_start' => 'desc', 'Project.id' => 'DESC')
								);
								
		$this->set('projects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Project', true), array('action'=>'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
		$this->set('tags', $this->Project->findTags());
		$this->set('relatedRessources', $this->Project->findRelated(false, 5));
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

	function admin_edit($id = null) {
		if (!empty($this->data)) { 
			if ($this->Project->save($this->data)) { 
		            $this->flash(__('The Project has been saved.', true), 
		                         array('action'=>'index')); 
		        } else { 
		        } 
		    } 
		    if ($id && empty($this->data)) { 
		        $this->data = $this->Project->read(null, $id); 
		    }
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