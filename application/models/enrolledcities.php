<?php

/**
* 
*/
class EnrolledCities extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getCities()
	{
		$query = $this->db->get('enrolled_cities');
		return $query->result();
	}

	function getCityInfo($city)
	{
		$query = $this->db->where('cityName',$city)
						->get('enrolled_cities');
		return $query->result();
	}
}

