<?php

/**
* this class is for control all functionalities of hostel profile insert, edit etc..
*/
class ProfileModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

// function for checking if record found?? 
	function getProfile($userId)
	{
		$query = $this->db->where(['login_id'=>$userId])
							->get('hostel');
		if (!count($query->result())) {
			return false;
		}else{
			return $query->result();
		}
	}

// uploading profile
	function uploadProfile($data)
	{
		$this->db->insert('hostel',$data);
		$hostel_id = $this->getProfile($this->session->userdata('user_id'));
		return $hostel_id[0]['H_id'];
	}

// uploading features
	function uploadFeatures($data)
	{
		$this->db->insert('features',$data);
	}

// uploading features
	function uploadImages($data)
	{
		$this->db->insert('images',$data);
	}

}

