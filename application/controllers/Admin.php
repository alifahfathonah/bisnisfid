<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {

		$data['title'] = 'User Verification';

		$data['users'] = $this->Admin_model->get_users();

		$this->load->view('member_area/templates/header');
		$this->load->view('member_area/valid', $data);
		$this->load->view('member_area/templates/footer');
	
	}

	public function view($slug = NULL) {

		$data['agent'] = $this->Admin_model->get_profile($slug);
		//print_r($data['posts']);

		if(empty($data['agent'])) {
			show_404();
		}

		$data['title'] = $data['agent']['name'];

		$this->load->view('member_area/templates/header');
		$this->load->view('member_area/user', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function accept($username) {

		$this->Admin_model->accept_users($username);
		$agent =  $this->Admin_model->get_user_verify($username);
		$this->load->library('email');
		$this->email->from('Team Development','<no-reply@team.development');
		$this->email->to($agent['email']);
		$this->email->subject('Forgot password');
		$this->email->message('Hi '. $agent['username'] .'

Your Login: 
Username :'. $agent['username'].'
Password :'. $agent['real_password'].'

Development Team
'
		);

		$this->email->send();

		$this->session->set_flashdata('success', 'Successfully accept user');

		redirect('users');
			
	}

	public function reject($id) {

		$this->Admin_model->reject_users($id);
		$this->session->set_flashdata('success', 'Successfully reject user');
		redirect('users');
			
	}
	
	public function deactive($username){

	    $this->Admin_model->deactive_users($username);

	    $this->session->set_flashdata('success', 'Successfully deactive user.');
		redirect('users');

	}
}