<?php
/**
* 
*/
class index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('enrolledcities');
	}

	function index()
	{
		$result['cities'] = $this->enrolledcities->getCities();
		$this->load->view('public/index', $result);
	}
}

?>