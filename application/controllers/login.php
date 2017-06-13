<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('accountinfo');
		$this->load->helper('form');
		$this->load->model('profilemodel','profile');
	}
// showing login page
	function index()
	{
		$this->load->view('public/login_view');
	}
// logging in user
	function matchAccount()
	{
		$userdata['userEmail'] = $this->input->post('email');
		$userdata['password']  = $this->input->post('password');

		$result = $this->accountinfo->matchData($userdata);
		if ( $result ) {
			$this->session->set_userdata(['user_id'=>$result]);
			if ($this->profile->getProfile($this->session->userdata('user_id'))) {
				return redirect('dashboard');
			} else {
				return redirect('hostelprofile');
			}
			
		} else {
			$this->session->set_flashdata('feedback','Login failed. Invalid password.');
			$this->session->set_flashdata('feedback_class','alert-danger');
			return redirect('login');
		}
	}

// showing signup page
	function signup()
	{
		$this->load->view('public/signup_view');
	}

// getting password
	function getPassword()
	{
		$this->load->view('public/password_view');
	}

// checking email id in database for reset password
	function check_email(){
		$email = $this->accountinfo->check_email($this->input->post('email'));
		if ($email) {
			$this->session->set_userdata('reset-password','reset');
			$this->send_mail();
		} else {
			$this->session->set_flashdata('feedback','Your email id not found in our database, please enter a valid email or create new account to register your hostel.');
			$this->session->set_flashdata('feedback_class','alert-warning');
			return redirect('login/forgot');
		}
	}
// email verification method
	public function send_mail() { 
		
		// check if email exist then show existing error message else send mail to given address
		if ($this->accountinfo->check_email($this->input->post('email'))) {
			$this->session->set_flashdata('feedback','Your email id exist if you forget your password please go to reset password page.');
			$this->session->set_flashdata('feedback_class','alert-warning');
			return redirect('login/signup');
		} else {
			$from_email = "hafizabduhanan@gmail.com"; 
			$to_email = $this->input->post('email'); 

			//Load email library 
			$this->load->library('email'); 
			$message_sent='<table><tr><td><h2>Hi,</h2></td></tr><tr><td><p style="font-size:20px;">Cityhostels.com has received a request to set the password for your account. If you did not request to reset your password, please ignore this email.</p></td></tr><tr><td>To set your password please.<input type="text" value='.$to_email.'> <a href="'.base_url('login/getPassword').'"><button style="cursor:pointer; background-color:CornflowerBlue; color:white;">click here</button></a></td></tr></table>';
			$this->email->from($from_email, 'City Hostels'); 
			$this->email->to($to_email);
			$this->email->subject('set password'); 
			$this->email->message($message_sent); 

			//Send mail 
			if($this->email->send()) 
			{
				$userdata['userEmail'] = $to_email;
				$userdata['password']  = 100;
				$this->accountinfo->insertData($userdata);
				$this->session->set_flashdata("feedback","Email sent successfully to your id, please login your email account to set password."); 
				$this->session->set_flashdata("feedback_class","alert-success");
			}
			else 
			{
				$this->session->set_flashdata("feedback",$this->email->print_debugger());
				$this->session->set_flashdata("feedback_class","alert-warning");
			} 
			$this->load->view('public/signup_view'); 
		}
	} 

// creating new account for hostel admin

	function createAccount()
	{
		$userdata['userEmail'] = $this->accountinfo->getEmail();
		$userdata['password']  = $this->input->post('pass');
		
		if ($this->accountinfo->updateData($userdata)) {
			$this->session->set_flashdata('feedback','Password created successfully. please login..');
			$this->session->set_flashdata('feedback_class','alert-success');
		} else {
			$this->session->set_flashdata('feedback','Error, please give accurat info to create password.');
			$this->session->set_flashdata('feedback_class','alert-danger');
			return redirect('login/signup');
		}
		
		return redirect('login');

	}
// logging out
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('feedback','Thanks, for staying with us. Hope you comeback soon.');
		$this->session->set_flashdata('feedback_class','alert-info');
		return redirect('login');
	}

// showing forgot password page
	function forgot()
	{
		$this->load->view('public/forgot_view');
	}
}

?>