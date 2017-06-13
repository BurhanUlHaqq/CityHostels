<?php

/**
* 
*/
class SearchHostels extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('searchmodel');
		$this->load->model('enrolledcities');
	}

	function searchByState()
	{
		$this->load->view('public/state_view');
	}

	function searchByCity($city)
	{
		$result['hostelinfo'] = $this->searchmodel->getACityHostels($city);
		$result['cityinfo']   = $this->enrolledcities->getCityInfo($city);
		$this->load->view('public/city_view',$result);
	}

	function showHostel($hostelId)
	{
		$result['hostelinfo'] = $this->searchmodel->getShowHostelInfo($hostelId);
		$result['himages']	  = $this->searchmodel->getShowHostelImages($hostelId);
		$result['hfeatures']  = $this->searchmodel->getShowHostelFeatures($hostelId);
		//echo "<pre>"; print_r($result['hfeatures']); exit();
		$this->load->view('public/hostel_view',$result);
	}
}
?>