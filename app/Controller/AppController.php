<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/*
	 * Overwrite CakePHP's default FormHelper for jQuery date/time picker fields
	 */
	public $helpers = array(
		'Form' => array(
			'className' => 'CheeseForm',
		),
	);

	/*
	 * Include DebugKit component
	 */
	public $components = array('Session', 'DebugKit.Toolbar');
	
	/*
	 * Switch to Cakestrap theme which integrates Twitter Bootstrap CSS framework
	 */
	public $theme = 'Cakestrap';
	
	/**
	 * Support for multiple flash messages
	 * 
	 * Almost verbatim from here:
	 * http://mrphp.com.au/code/multiple-flash-messages-style-cakephp
	 * 
	 * @param string $message Flash message
	 * @param string $layout Layout
	 * @param array $options Options
	 * @return void
	 */
	protected function _flash($message, $layout = 'default', $options = array()) {
		$messages = (array) $this->Session->read('Message.multiFlash');
		$messages[] = array(
			'message' => $message,
			'layout' => $layout,
			'element' => 'default',
			'params' => $options,
		);
		$this->Session->write('Message.multiFlash', $messages);
	}

	/**
	 * Show success message
	 *
	 * @param string $message Message to show
	 * @return void
	 */
	public function showSuccess($message) {
		$this->_flash($message, 'default', array('class' => 'alert alert-success'));
	}

	/**
	 * Show error message
	 *
	 * @param string $message Message to show
	 * @return void
	 */
	public function showError($message) {
		$message = sprintf("<strong>%s</strong> %s", __('Error!'), $message);
		$this->_flash($message, 'default', array('class' => 'alert alert-error'));
	}

	/**
	 * Show notice message
	 *
	 * @param string $message Message to show
	 * @return void
	 */
	public function showNotice($message) {
		$message = sprintf("<strong>%s</strong> %s", __('Notice:'), $message);
		$this->_flash($message, 'default', array('class' => 'alert alert-info'));
	}

	/**
	 * Show warning message
	 *
	 * @param string $message Message to show
	 * @return void
	 */
	public function showWarning($message) {
		$message = sprintf("<strong>%s</strong> %s", __('Warning:'), $message);
		$this->_flash($message, 'default', array('class' => 'alert alert-block'));
	}

}
