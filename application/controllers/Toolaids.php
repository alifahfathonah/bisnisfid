<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toolaids extends CI_Controller {


	public function index($slug = false) {

		$data['title'] = 'Tool Aids';
		$data['books'] = $this->Toolaids_model->get_all_posts($slug,'book');
		$data['epros'] = $this->Toolaids_model->get_all_posts($slug,'epro');
		$data['meetings'] = $this->Toolaids_model->get_all_posts($slug,'meeting');
		$data['asns'] = $this->Toolaids_model->get_all_posts($slug,'asn');
		$data['mobiles'] = $this->Toolaids_model->get_all_posts($slug,'mobile');
		
		//print_r($data['posts']);	

		$this->load->view('member_area/templates/header');
		$this->load->view('toolaids/index', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function create() {

		$data['title'] = 'Create New Post';
		
		$this->load->view('member_area/templates/header');
		$this->load->view('toolaids/create',$data);
		$this->load->view('member_area/templates/footer');

	}

	public function store() {

		$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]|min_length[1]|trim');
		$this->form_validation->set_rules('section', 'Section', 'required|max_length[10]|min_length[1]|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|max_length[10]|min_length[1]|trim');

		if( ($this->input->post('section') === "book") && ($this->input->post('type') === "doc") ||
			($this->input->post('section') === "epro") && ($this->input->post('type') === "doc")) {
			
			if($this->form_validation->run() === FALSE){
				
				$this->session->set_flashdata('failed', 'ERROR: Something wrong please try again.');
				redirect('toolaids/create/'.$this->input->post('section'));

			} else {

				$config['upload_path']          = './assets/'.$this->input->post('section').'/';
	            $config['allowed_types']        = '*';
	            $config['max_size']             = 2048;
	            $config['max_width']            = 1024;
	            $config['max_height']           = 1024;
	            $config['file_ext_tolower']		= TRUE;
	            $config['remove_spaces']		= TRUE;
	            $config['detect_mime']			= TRUE;
	            $config['encrypt_name']			= TRUE;
	        
	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload('userfile')) {
	            	
	            	$this->session->set_flashdata('failed', 'Failed tp upload new document.');
	                redirect('toolaids/create/'.$this->input->post('section'));

	            }else{
	              
	            	$data = array('upload_data' => $this->upload->data());
	              	$post_file = $this->upload->data('file_name');

	            }

	            $this->Toolaids_model->store($post_file,'doc',$this->input->post('section'));

	            $this->session->set_flashdata('success', 'Successfully created new post.');

				redirect('toolaids/index');

			}

		}elseif(($this->input->post('section') === "meeting") && ($this->input->post('type') === "video") || ($this->input->post('section') === "asn") && ($this->input->post('type') === "video") || ($this->input->post('section') === "mobile") && ($this->input->post('type') === "video") ){
			
			$this->form_validation->set_rules('url', 'URL', 'required|max_length[255]|min_length[1]|trim');

			if($this->form_validation->run() === FALSE){
				
				$this->session->set_flashdata('failed', 'ERROR: Something wrong please try again.');
				redirect('toolaids/create/'.$this->input->post('section').'/video');

			} else {

				$this->load->library('video_id');

				$post_file = $this->video_id->getIdFromUrl($this->input->post('url'));

				$this->Toolaids_model->store($post_file,'video',$this->input->post('section'));

	            $this->session->set_flashdata('success', 'Successfully upload new video.');

				redirect('toolaids/index');
			}

		}else{

			 $this->session->set_flashdata('failed', 'ERROR: Something wrong please refresh your page and try again.');
			 redirect('toolaids/create/'.$this->input->post('section').'/video');

		}
	}

	public function edit($section, $id) {

		$data['title'] = 'Edit Post';
		
		$data['post'] = $this->Toolaids_model->get_all_posts($id, $section);

		//print_r($data['post']);
		
		if(empty($data['post'])) {
			show_404();
		}

		$this->load->view('member_area/templates/header');
		$this->load->view('toolaids/edit',$data);
		$this->load->view('member_area/templates/footer');

	}

	public function update() {

		$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]|min_length[1]|trim');
		$this->form_validation->set_rules('section', 'Section', 'required|max_length[10]|min_length[1]|trim');
		$this->form_validation->set_rules('type', 'Type', 'required|max_length[10]|min_length[1]|trim');
		$this->form_validation->set_rules('id', 'id', 'required');

		if( ($this->input->post('section') === "book") && ($this->input->post('type') === "doc") ||
			($this->input->post('section') === "epro") && ($this->input->post('type') === "doc")){
			
			if($this->form_validation->run() === FALSE){
				
				$this->session->set_flashdata('failed', 'ERROR: Something wrong please try again.');
				redirect('toolaids/edit/'.$this->input->post('section').'/'.$this->input->post('id'));

			} else {

				$config['upload_path']          = './assets/'.$this->input->post('section').'/';
	            $config['allowed_types']        = '*';
	            $config['max_size']             = 2048;
	            $config['max_width']            = 1024;
	            $config['max_height']           = 1024;
	            $config['file_ext_tolower']		= TRUE;
	            $config['remove_spaces']		= TRUE;
	            $config['detect_mime']			= TRUE;
	            $config['encrypt_name']			= TRUE;
	        
	            $this->load->library('upload', $config);

	            if (!$this->upload->do_upload('userfile')) {
	            	
	            	$post_file = $this->input->post('filenya');

	            }else{
	              
	            	$data = array('upload_data' => $this->upload->data());
	              	$post_file = $this->upload->data('file_name');

	            }

	            $this->Toolaids_model->update($post_file,$this->input->post('section'));

	            $this->session->set_flashdata('success', 'Successfully update post.');

				redirect('toolaids/index');

			}

		} elseif (($this->input->post('section') === "meeting") && ($this->input->post('type') === "video") || ($this->input->post('section') === "asn") && ($this->input->post('type') === "video") || ($this->input->post('section') === "mobile") && ($this->input->post('type') === "video") ){

			$this->form_validation->set_rules('url', 'url', 'required');

			if($this->form_validation->run() === FALSE){
				
				$this->session->set_flashdata('failed', 'ERROR: Something wrong please try again.');
				redirect('toolaids/edit/'.$this->input->post('section').'/'.$this->input->post('id').'/video');

			} else {

				$this->load->library('video_id');
				$post_file = $this->video_id->getIdFromUrl($this->input->post('url'));

				$this->Toolaids_model->update($post_file,$this->input->post('section'));

	            $this->session->set_flashdata('success', 'Successfully update video.');

				redirect('toolaids/index');
			}

		} else {

			 $this->session->set_flashdata('failed', 'ERROR: Something wrong please refresh your page and try again.');
			 redirect('toolaids/index');

		}

	}

	public function destroy($id) {

		$this->Toolaids_model->destroy($id);

		$this->session->set_flashdata('success', 'Successfully delete post.');

		redirect('toolaids/index');
			
	}

}

