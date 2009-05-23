<?php
class SitemapsController extends AppController
{
    
    var $components = array('RequestHandler');
    var $helpers = array('Time', 'Xml');
    var $name = 'Sitemaps';
    var $uses = array('Project', 'Post', 'News');
    
    function sitemap ()
    {
        Configure::write ('debug', 0);
        $projects = $this->Project->find('all', array('fields' => array('id', 'slug', 'modified')), null, -1);
        $posts = $this->Post->find('all', array('fields' => array('id', 'slug', 'modified')), null, -1);
		$news = $this->News->find('all', array('fields' => array('id', 'slug', 'modified')), null, -1);
        $this->set(compact('projects','posts', 'news'));
    }
}
?>