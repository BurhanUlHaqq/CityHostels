<?php

/**
*  control all functionality about tenants, e.g add, deactive tenants and their relatives...
*/
class Tenants extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_id')) {
			return redirect('login');
		}
		$this->load->model('tenantsmodel');
		$this->load->model('profilemodel','profile');
		//$this->profile = array('hostelInfo' =>$this->profile->getProfile($this->session->userdata['user_id']) , ) ;
	}

	function getTenant(){
		$config['upload_path']   = './assets/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']	 = $this->input->post('hname').'_'.$this->input->post('tName').'_'.$this->input->post('cnic').'_'.date("Y-m-d");
	    $this->load->library('upload', $config);


		$tenant['Name'] 		  = $this->input->post('tName');
		$tenant['F_Name'] 		  = $this->input->post('tFatherName');
		$tenant['image']		  = $this->image_upload('tImage');
		$tenant['CNIC'] 		  = $this->input->post('cnic');
		$tenant['Cell_No'] 		  = $this->input->post('cell');
		$tenant['job'] 			  = $this->input->post('job');
		$tenant['organization']   = $this->input->post('company');
		$tenant['Admission_date'] = date("Y/m/d");
		$tenant['H_id']   		  = $this->input->post('hid');

		if($this->tenantsmodel->insertTenant($tenant)){
			$this->session->set_flashdata("feedback","Admission Process completed successfully...!");
			$this->session->set_flashdata("feedback_class","alert-success");
		} else {
			$this->session->set_flashdata("feedback","Any thing wrong. Try again...!");
			$this->session->set_flashdata("feedback_class","alert-danger");
		}
		return redirect('dashboard/addTenant');
	}

// upload image function 
	function image_upload($field)
	{
		if ($this->upload->do_upload($field)) {
			return $this->upload->data('file_name');
		} else {
			print_r($this->upload->display_errors());
			exit();
		}
	}

// function for showing tenants
	function tenants()
	{
		$profile['tenantsRecord'] = $this->tenantsmodel->getTenants($this->session->userdata('hostel_id'));
		//echo "<pre>"; print_r($profile);exit();
		$this->load->view('hostel/tenantsRecord',$profile);
	}

// function for showing tenants relatives
	function tenantsRel()
	{
		# code...
	}

// function for add tenants
	function addTenant()
	{
		$this->load->view("hostel/addTenant_view");
	}

// function for add tenants relatives
	function addTenantRel()
	{
		# code...
	}

}

