<?php
App::uses('Model', 'Model');

class Sign extends Model {

	public $primaryKey = 'signID';
	public $name = 'Sign';
	
	public $validate = array(
		'byInsp' => array(
			'rule'    => 'notEmpty',
			'message' => 'Picked up by must not be empty'
		),
		'business' => array(
			'rule'    => 'notEmpty',
			'message' => 'Business must not be empty'
		),	
		'contact' => array(
			'rule'    => 'notEmpty',
			'message' => 'Contact must not be empty'
		),
		'RDate' => array(
			'rule'    => 'notEmpty',
			'message' => 'Date must not be empty'
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