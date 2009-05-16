<?php
class NewsController extends AppController {

	var $name = 'News';
	var $helpers = array('Tagging.Tagging', 'tinymce');

	function index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid News', true), array('action'=>'index'));
		}
		$this->set('news', $this->News->read(null, $id));
		$this->set('tags', $this->News->findTags());
		$this->set('relatedRessources', $this->News->findRelated(false, 5));
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

	function admin_edit($id = null) {
		    if (!empty($this->data)) { 
		        if ($this->News->save($this->data)) { 
		            $this->flash(__('The News has been saved.', true), 
		                         array('action'=>'index')); 
		        } else { 
		        } 
		    } 
		    if ($id && empty($this->data)) { 
		        $this->data = $this->News->read(null, $id); 
		    }
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