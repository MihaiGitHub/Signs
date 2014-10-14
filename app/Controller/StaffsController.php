<?php
App::uses('AppController', 'Controller');

class StaffsController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');

	public function beforeFilter() { 
        parent::beforeFilter();
				
    }
	
	public function index() {
		$this->paginate = array(
					'paramType' => 'querystring',
					'order' => 'Staff.staffName ASC',
					'limit' => 18
				);
				
		$staffs = $this->paginate('Staff');
		$this->set(compact('staffs'));		
	}
	
	public function add(){
		if ($this->request->is('post')) {
			if($this->Staff->save($this->request->data))
				return $this->redirect(array('action' => 'index'));
		}
	}
	
	public function edit($id = null){
		if ($this->request->is('post')) {
						
			if($this->Staff->save($this->request->data))
				return $this->redirect(array('action' => 'index'));
				
		} else {
			$staff = $this->Staff->find('first', array('conditions' => array('staffID' => $id)));
			$this->set('staff', $staff);
		}
	}
	
	public function delete($id = null){
		if($this->Staff->delete($id))
			return $this->redirect(array('action' => 'index'));
	}
}