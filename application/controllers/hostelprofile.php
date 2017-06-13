<?php

/**
* 
*/
class HostelProfile extends CI_Controller
{
	
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
		$this->load->view('hostel/profile_view');
	}

//insert data to database
	function profileData()
	{
		$config['upload_path'] = './assets/images/';
		$config['max_size'] = '5000';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);

    	// data storing in profile array from profile table
		$profile['admin_name'] 		= $this->input->post('admin_name');
		$profile['cnic'] 			= $this->input->post('cnic');
		$profile['H_name'] 			= $this->input->post('H_name');
		$profile['frontImage'] 		= $this->image_upload('front');
		$profile['street_address'] 	= $this->input->post('street_address');
		$profile['city'] 			= $this->input->post('city');
		$profile['state'] 			= $this->input->post('state');
		$profile['Discription'] 	= $this->input->post('Discription');
		$profile['latitude'] 		= $this->input->post('latitude');
		$profile['longitude'] 		= $this->input->post('longitude');
		$profile['contact'] 		= $this->input->post('contact');
		$profile['login_id']		= $this->session->userdata('user_id');

		// calling profilemodel's uploadProfile function to upload profile data
		$hostel_id = $this->profile->uploadProfile($profile);
		$this->session->set_userdata('hostel_id',$hostel_id);

		// data storing in features array from features table 
		$feature['recommend']		= $this->input->post('recommend');
		$feature['free_facilities']	= $this->input->post('free_facilities');
		$feature['paid_facilities']	= $this->input->post('paid_facilities');
		$feature['others']			= $this->input->post('others');
		$feature['offered']			= $this->input->post('offered');
		$feature['not_allowed']		= $this->input->post('not_allowed');
		$feature['H_id']			= $hostel_id;

		// calling profilemodel's uploadFeatures function to upload features data
		$this->profile->uploadFeatures($feature);
		
		// uploading images to directory
		$image['room1'] = $this->image_upload('room1');
		$image['room2'] = $this->image_upload('room2');
		$image['pic1']  = $this->image_upload('pic1');
		$image['pic2']  = $this->image_upload('pic2');
		$image['H_id']	= $hostel_id;
		
		// calling profilemodel's uploadImages function to upload images to database
		$this->profile->uploadImages($image);

		$this->session->set_flashdata('feedback','your profile created successfully..!');
		$this->session->set_flashdata('feedback_class','alert-success');
		return redirect('dashboard');
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
}

