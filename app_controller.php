<?php
/* SVN FILE: $Id: app_controller.php 7805 2008-10-30 17:30:26Z AD7six $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7805 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-10-30 18:30:26 +0100 (Thu, 30 Oct 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	
	var $components = array( 
							'Acl',
							'Auth',
							'RequestHandler',
							'Session',
							'DebugKit.Toolbar'
							);
	var $helpers = array('Html', 'Form', 'Tagging.Tagging');
	
	var $persistModel = true;
	
	function beforeFilter() {
		
		$this->_setAuth();
		
		if (isset($this->params['admin'])) {
			$this->layout='admin_default';
		} else {
			$this->loadModel('News'); 
			$news = $this->News->find('latest');
			$this->loadModel('Tagging.Tag'); 
			$mainTagCloud = $this->Tag->tagCloud();
			$this->set(compact('mainTagCloud'));
		}
			
	
	}
	
	function _setAuth() {
		$this->Auth->authorize = 'actions';
		// $this->Auth->actionPath = 'controllers/';
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
		if((empty($this->params['prefix']) || $this->params['prefix'] != 'admin') && $this->action != 'login') {
			// $this->log('non admin : auth '.$this->name.'::'.$this->action);5
			$this->Auth->allow($this->action);
		}
		
	}
	
	/**
	 * Rebuild the Acl based on the current controllers in the application
	 *
	 * @return void
	 */
	    function buildAcl() {
	        $log = array();

	        $aco =& $this->Acl->Aco;
	        $root = $aco->node('controllers');
	        if (!$root) {
	            $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
	            $root = $aco->save();
	            $root['Aco']['id'] = $aco->id; 
	            $log[] = 'Created Aco node for controllers';
	        } else {
	            $root = $root[0];
	        }   

	        App::import('Core', 'File');
	        $Controllers = Configure::listObjects('controller');
	        $appIndex = array_search('App', $Controllers);
	        if ($appIndex !== false ) {
	            unset($Controllers[$appIndex]);
	        }
	        $baseMethods = get_class_methods('Controller');
	        $baseMethods[] = 'buildAcl';
			$Plugins = $this->_get_plugin_controller_names();

			$Controllers = array_merge($Controllers, $Plugins);
	        // look at each controller in app/controllers
	        foreach ($Controllers as $ctrlName) {
	            App::import('Controller', $ctrlName);
	            $ctrlclass = $ctrlName . 'Controller';
	            $methods = get_class_methods($ctrlclass);

	            // find / make controller node
	            $controllerNode = $aco->node('controllers/'.$ctrlName);
	            if (!$controllerNode) {
	                $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
	                $controllerNode = $aco->save();
	                $controllerNode['Aco']['id'] = $aco->id;
	                $log[] = 'Created Aco node for '.$ctrlName;
	            } else {
	                $controllerNode = $controllerNode[0];
	            }

	            //clean the methods. to remove those in Controller and private actions.
	            foreach ($methods as $k => $method) {
	                if (strpos($method, '_', 0) === 0) {
	                    unset($methods[$k]);
	                    continue;
	                }
	                if (in_array($method, $baseMethods)) {
	                    unset($methods[$k]);
	                    continue;
	                }
	                $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
	                if (!$methodNode) {
	                    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
	                    $methodNode = $aco->save();
	                    $log[] = 'Created Aco node for '. $method;
	                }
	            }
	        }
	        debug($log);
	    }
	
		/**
		     * Get the names of the plugin controllers ...
		     * 
		     * This function will get an array of the plugin controller names, and
		     * also makes sure the controllers are available for us to get the 
		     * method names by doing an App::import for each plugin controller.
		     *
		     * @return array of plugin names.
		     *
		     */
		    function _get_plugin_controller_names(){
		        App::import('Core', 'File', 'Folder');
		        $paths = Configure::getInstance();
		        $folder =& new Folder();
		        // Change directory to the plugins
		        $folder->cd(APP.'plugins');
		        // Get a list of the files that have a file name that ends
		        // with controller.php
		        $files = $folder->findRecursive('.*_controller\.php');
		        // Get the list of plugins
		        $Plugins = Configure::listObjects('plugin');

		        // Loop through the controllers we found in the plugins directory
		        foreach($files as $f => $fileName)
		        {
		            // Get the base file name
		            $file = basename($fileName);

		            // Get the controller name
		            $file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));

		            // Loop through the plugins
		            foreach($Plugins as $pluginName){
		                if (preg_match('/^'.$pluginName.'/', $file)){
		                    // First get rid of the App controller for the plugin
		                    // We do this because the app controller is never called
		                    // directly ...
		                    if (preg_match('/^'.$pluginName.'App/', $file)){
		                        unset($files[$f]);
		                    } else {
		                                    if (!App::import('Controller', $pluginName.'.'.$file))
		                                    {
		                                        debug('Error importing '.$file.' for plugin '.$pluginName);
		                                    }

		                        /// Now prepend the Plugin name ...
		                        // This is required to allow us to fetch the method names.
		                        $files[$f] = $file;
		                    }
		                    break;
		                }
		            }
		        }

		        return $files;
		    }
}
?>