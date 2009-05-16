<?php
class PostsController extends AppController {

	var $name = 'Posts';
	var $helpers = array('Tagging.Tagging', 'tinymce');
	
	function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
		$this->set('tags', $this->Post->findTags());
		$this->set('relatedRessources', $this->Post->findRelated(false, 5));
		
	}

	function admin_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

	function admin_edit($id = null) { 
	    if (!empty($this->data)) { 
	        if ($this->Post->save($this->data)) { 
	            $this->flash(__('The Post has been saved.', true), 
	                         array('action'=>'index')); 
	        } else { 
	        } 
	    } 
	    if ($id && empty($this->data)) { 
	        $this->data = $this->Post->read(null, $id); 
	    } 
	} 
	

	function admin_delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Post', true), array('action'=>'index'));
		}
		if ($this->Post->del($id)) {
			$this->flash(__('Post deleted', true), array('action'=>'index'));
		}
	}

}
?>