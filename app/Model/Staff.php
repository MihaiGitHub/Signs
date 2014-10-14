<?php
App::uses('Model', 'Model');

class Staff extends Model {

	public $primaryKey = 'staffID';
	public $name = 'Staff';
	public $useTable = 'tblstaff';
	
	public $validate = array(
		'staffName' => array(
			'rule'    => 'notEmpty',
			'message' => 'Name must not be empty'
		),
		'email' => array(
			'rule'    => 'email',
			'message' => 'This field must be an email'
		)	
	);
	
	// Used for debugging last query (better than Cakes sql dump). In controller use: echo $this->Model->getLastQuery();
	function getLastQuery()
	{
		$dbo = $this->getDatasource();
		$logs = $dbo->getLog();
		$lastLog = end($logs['log']);
		return $lastLog['query'];
	}
}