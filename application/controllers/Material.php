<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Material extends CI_Controller {
	
	public function index() {
	
		$slug='A';
                $data['title'] = "Learning Hub";
		$data['videos'] = $this->Learning_model->get_all_videos_section($slug);
		$data['files'] = $this->Learning_model->get_all_files_section($slug);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('material/index', $data);
		$this->load->view('member_area/templates/footer');
	}

	public function section_b() {
	
		$slug='B';
                $data['title'] = "Learning Hub";
		$data['videos'] = $this->Learning_model->get_all_videos_section($slug);
		$data['files'] = $this->Learning_model->get_all_files_section($slug);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('material/section_b', $data);
		$this->load->view('member_area/templates/footer');
	}

	
	public function seemorefiles($slug) {
	
		$data['title'] = "Learning Hub - Files";
		$data['files'] = $this->Learning_model->get_all_files_section($slug);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('material/more_files', $data);
		$this->load->view('member_area/templates/footer');
	}
	
	public function seemorevideos($slug) {
	
		$data['title'] = "Learning Hub - Videos";
		$data['videos'] = $this->Learning_model->get_all_videos_section($slug);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('material/more_videos', $data);
		$this->load->view('member_area/templates/footer');
	}
	
}