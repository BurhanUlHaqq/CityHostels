<?php

/**
* 
*/
class SearchModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getACityHostels($city)
	{
		$query	 = $this->db->where('city',$city)
							->get('hostel');
		if (count($query->result())) {
			return $query->result();
		} else {
			return false;
		}
	}
// getHostelInfo method for getting all hostels data from database
	function getHostelInfo()
	{
		$query = $this->db->get('hostel');
		$res = count($query->result());
		$this->session->set_userdata('numofhostels',$res);
		return $query->result();
	}

	function getHostelImages()
	{
		$query = $this->db->get('images');
		return $query->result();
	}

	function getHostelFeatures()
	{
		$query = $this->db->get('features');
		return $query->result();
	}
// getShowHostelInfo method for getting a single hostel data
	function getShowHostelInfo($hostel_id)
	{
		$query = $this->db->where('H_id',$hostel_id)->get('hostel');
		return $query->result();
	}
// getShowHostelImages method for getting a single hostel data
	function getShowHostelImages($hostel_id)
	{
		$query = $this->db->where('H_id',$hostel_id)->get('images');
		return $query->result();
	}
// getShowHostelFeatures method for getting a single hostel data
	function getShowHostelFeatures($hostel_id)
	{
		$query = $this->db->where('H_id',$hostel_id)->get('features');
		return $query->result();
	}
}

