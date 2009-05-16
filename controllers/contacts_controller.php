<?php
/**
 * Contacts
 * 
 * [Short Description]
 *
 * @package default
 * @author Guillaume Sautereau
 * @version $Id$
 * @copyright __MyCompanyName__
 **/

class ContactsController extends AppController {
/**
 * The name of this controller. Controller names are plural, named after the model they manipulate.
 *
 * @var string
 * @access public
 */
	var $name = 'Contacts';

/**
 * An array containing the names of helpers this controller uses. The array elements should
 * not contain the "Helper" part of the classname.
 *
 * @var mixed A single name as a string or a list of names as an array.
 * @access protected
 */
	var $helpers = array('Html', 'Form');

/**
 * Array containing the names of components this controller uses. Component names
 * should not contain the "Component" portion of the classname.
 *
 * @var array
 * @access public
 */
	var $components = array('RequestHandler', 'Email');

/**
 * Add action
 *
 * @access public
 */	
function index() {
    if ($this->RequestHandler->isPost()) {
        $this->Contact->set($this->data);
        if ($this->Contact->validates()) {
            //send email using the Email component
            $this->Email->to = 'contact@almost-musique.com';  
            $this->Email->subject = 'Contact message from ' . $this->data['Contact']['name'];  
            $this->Email->from = $this->data['Contact']['email'];  
   
            $this->Email->send($this->data['Contact']['details']);
        }
    }
}
}
?>