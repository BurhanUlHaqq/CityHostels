<?php

/**
* 
*/
class Dashboard extends CI_Controller
{
	public $profile;
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user_id')) {
			return redirect('login');
		}

		$this->load->model('profilemodel','profile');
	}

	function index()
	{
		$profile['hostelInfo'] = $this->profile->getProfile($this->session->userdata['user_id']) ;
		$this->session->set_userdata(array('hostel_id'=>$profile['hostelInfo'][0]->H_id, 'hostel_name'=>$profile['hostelInfo'][0]->H_Name));
		$this->load->view('hostel/dashboard_view');
	}

// instruction for hostel admin
	function help()
	{
		# code...
	}

// manage notificatoin board
	function notification(){

	}

// manage Room Rent record
	function roomRent(){
		
	}
}


