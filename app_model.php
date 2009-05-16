<?php
/* SVN FILE: $Id: app_model.php 7847 2008-11-08 02:54:07Z renan.saddam $ */

/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @version       $Revision: 7847 $
 * @modifiedby    $LastChangedBy: renan.saddam $
 * @lastmodified  $Date: 2008-11-08 03:54:07 +0100 (Sat, 08 Nov 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppModel extends Model { 
  var $actsAs = array('Containable'); 
  var $recursive = -1; 

  function find($type, $options = array()) { 
    
	$method = null; 
    if(is_string($type)) { 
      $method = sprintf('__find%s', Inflector::camelize($type)); 
    } 
	
    if($method && method_exists($this, $method)) { 
	      return $this->{$method}($options); 
    } else { 
      $args = func_get_args(); 
      return call_user_func_array(array('parent', 'find'), $args); 
    } 
  } 
} 

?>