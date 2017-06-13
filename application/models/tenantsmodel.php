<?php

/**
* 
*/
class TenantsModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

// add tenants record
	function insertTenant($tenant){
		return $this->db->insert('tenants',$tenant);
	}

// getting tenants record according to hostel
	function getTenants($hostelid){
		$query = $this->db->where('H_id',$hostelid)->get('tenants');
		if ($query->num_rows()) {
			return $query->result();
		} else {
			return 0;
		}
	}
}

