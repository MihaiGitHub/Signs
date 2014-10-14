<?php
App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');

class SignsController extends AppController {

	public $uses = array('Sign', 'Staff');
	public $helpers = array('Html', 'Form', 'Session');

	public function beforeFilter() { 
        parent::beforeFilter();
				
    }
	
	public function index() {
		
	}
	
	public function datereport(){
		if ($this->request->is('post')) {
			$this->Session->write('startDate', CakeTime::format($this->request->data['Sign']['startDate'], '%Y-%m-%d'));
			$this->Session->write('endDate', CakeTime::format($this->request->data['Sign']['endDate'], '%Y-%m-%d'));	
		}
		$this->paginate = array(
					'conditions' => array('AND' => array( array('Sign.mySQLDate >=' => $this->Session->read('startDate'), 
											  'Sign.mySQLDate <=' => $this->Session->read('endDate')))),
					'paramType' => 'querystring',
					'order' => 'Sign.RDate ASC',
					'limit' => 18
				);
				
		$signs = $this->paginate('Sign');
		$this->set(compact('signs'));
		
	}
	
	public function impoundreport(){
		$this->paginate = array(
						'conditions' => array('Sign.numberImpounded !=' => 0),
						'paramType' => 'querystring',
						'order' => 'Sign.RDate ASC',
						'limit' => 18
					);
					
		$signs = $this->paginate('Sign');
		$this->set(compact('signs'));
	}
	
	public function addressreport(){
		if ($this->request->is('post')) {
			$this->Session->write('streetName', $this->data['Sign']['stName']);
		}
		$streetName = $this->Session->read('streetName');
		$this->paginate = array(
			'conditions' => array('Sign.stName LIKE' => "%$streetName%"),
			'paramType' => 'querystring',
			'order' => 'Sign.RDate ASC',
			'limit' => 18
		);
					
		$signs = $this->paginate('Sign');
		$this->set(compact('signs'));

	}
	
	public function individual(){
		if ($this->request->is('post')) {
			$this->Session->write('contact', $this->data['Sign']['contact']);
		}
		$this->paginate = array(
				'conditions' => array('Sign.byInsp' => $this->Session->read('contact')),
				'paramType' => 'querystring',
				'order' => 'Sign.mySQLDate DESC',
				'limit' => 18
			);
			
		$signs = $this->paginate('Sign');
		$this->set(compact('signs'));
	}
	
	public function sdate(){
		if ($this->request->is('post')) {
			$this->Session->write('RDate', $this->data['Sign']['RDate']);
		}
		$this->paginate = array(
				'conditions' => array('Sign.RDate' => $this->Session->read('RDate')),
				'paramType' => 'querystring',
				'order' => 'Sign.mySQLDate DESC',
				'limit' => 18
			);
			
		$signs = $this->paginate('Sign');
		$this->set(compact('signs'));
	}
	
	public function save(){ 
	
		if ($this->request->is('post')) {
			$this->request->data['Sign']['mySQLDate'] = CakeTime::format($this->request->data['Sign']['RDate'], '%Y-%m-%d');
			
			if($this->Sign->save($this->request->data))
				return $this->redirect(array('action' => 'index'));
		} else {
			$names = $this->Staff->find('all', array('conditions' => array('doNOTusename' => 'False'),
													'order' => 'staffName ASC'));
			$this->set('names', $names);
		}
		
	}
		
	public function edit(){
		
	}
	
	public function signedit($id = null){
		if ($this->request->is('post')) {
			$this->request->data['Sign']['mySQLDate'] = CakeTime::format($this->request->data['Sign']['RDate'], '%Y-%m-%d');
			if($this->Sign->save($this->request->data))
				return $this->redirect(array('action' => 'index'));
				
		} else {
			$names = $this->Staff->find('all', array('conditions' => array('doNOTusename' => 'False'),
														'order' => 'staffName ASC'));

			$sign = $this->Sign->find('first', array('conditions' => array('signID' => $id)));
			$this->set('sign', $sign);
			$this->set('names', $names);
		}
	}
	
	public function delete($id = null){
		if($this->Sign->delete($id))
			return $this->redirect(array('action' => 'index'));
	}
}