<?php

/**
* 
*/
class AccountInfo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insertData($data)
	{
		return $this->db->insert('sign_up',$data);
	}

	function updateData($data)
	{
		return $this->db->where('password',100)->update('sign_up',$data);
	}

	function matchData($data)
	{
		$query = $this->db->where(['userEmail'=>$data['userEmail'],'password'=>$data['password']])
						->get('sign_up');
		if ($query->num_rows()) {
			return $query->row()->login_id;
		}

		else
			return 0;
	}

// checking email existing or not?? for reset password
	function check_email($email){
		$query = $this->db->where('userEmail',$email)->get('sign_up');
		if($query->num_rows()){
			return 1;
		} else {
			return 0;
		}
	}

// getting email
	function getEmail()
	{
		$query = $this->db->where('password',100)->get('sign_up');
		if ($query->num_rows()) {
			return $query->result_array()[0]['userEmail'];
		}
	}
}

