<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function index($id = NULL) {
		
		$data['title'] = 'Event Schedule';
		$data['posts'] = $this->Schedule_model->get_all_posts($id);
		//print_r($data['posts']);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('schedule/index', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function view($id = NULL) {

		$data['post'] = $this->Schedule_model->get_all_posts($id);
		//print_r($data['posts']);

		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['name'];

		$this->load->view('member_area/templates/header');
		$this->load->view('schedule/view', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function create() {

		$data['title'] = 'Create Event Schedule';
		$data['error'] = '';
		$this->form_validation->set_rules('name', 'Title', 'required|min_length[5]|max_length[255]|trim');
		$this->form_validation->set_rules('date', 'Date', 'required|min_length[2]|max_length[99]|trim');
		$this->form_validation->set_rules('durasi', 'Duration', 'required|min_length[1]|max_length[255]|trim');
		$this->form_validation->set_rules('location', 'Location', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('material', 'Material', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('tujuan', 'Objectives', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('target', 'Target', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('desc', 'Description', 'required|min_length[2]|max_length[4999]|trim');

		


		if($this->form_validation->run() === FALSE){

			$this->load->view('member_area/templates/header');
			$this->load->view('schedule/create', $data);
			$this->load->view('member_area/templates/footer');

		} else {

		    $config['upload_path']          	= './assets/schedules/';
        	    $config['allowed_types']        	= 'gif|jpg|jpeg|png';
        	    $config['max_size']             	= 2048;
        	    $config['max_width']            	= 1024;
         	    $config['max_height']           	= 1024;
         	    $config['file_ext_tolower']		= TRUE;
        	    $config['remove_spaces']		= TRUE;
        	    $config['detect_mime']		= TRUE;
        	    $config['encrypt_name']		= TRUE;	
        	   
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                
                $errors = array('error' => $this->upload->display_errors());
                $post_image = null;

            }else{
               
            	$data = array('upload_data' => $this->upload->data());
              	$post_image = $this->upload->data('file_name');

            }

            $this->Schedule_model->create_post($post_image);

           $this->session->set_flashdata('success', 'Successfully create new event schedule.');
            redirect('schedule');			
					
			
		}

	}

	public function delete($id) {

		$this->Schedule_model->delete_post($id);
		$this->session->set_flashdata('success', 'Successfully delete data.');
		redirect('schedule');
			
	}


	public function edit($id) {
		$data['post'] = $this->Schedule_model->get_all_posts($id);
		//print_r($data['post']);
		if(empty($data['post'])) {
			show_404();
		}

		
		$data['title'] = 'Edit Event Schedule';

		$this->load->view('member_area/templates/header');
		$this->load->view('schedule/edit', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function update() {

		$this->form_validation->set_rules('name', 'Title', 'required|min_length[5]|max_length[255]|trim');
		$this->form_validation->set_rules('date', 'Date', 'required|min_length[2]|max_length[99]|trim');
		$this->form_validation->set_rules('durasi', 'Duration', 'required|min_length[1]|max_length[255]|trim');
		$this->form_validation->set_rules('location', 'Location', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('material', 'Material', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('tujuan', 'Objectives', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('target', 'Target', 'required|min_length[2]|max_length[4999]|trim');
		$this->form_validation->set_rules('desc', 'Description', 'required|min_length[2]|max_length[4999]|trim');

		if($this->form_validation->run() === FALSE){

			$this->load->view('member_area/templates/header');
			$this->load->view('schedule/edit', $data);
			$this->load->view('member_area/templates/footer');

		}else {
			$config['upload_path']          = './assets/schedules/';
        		$config['allowed_types']        = 'gif|jpg|jpeg|png';
        		$config['max_size']             = 2048;
        		$config['max_width']            = 1024;
       			$config['max_height']           = 1024;
        		$config['file_ext_tolower']	= TRUE;
        		$config['remove_spaces']	= TRUE;
        		$config['detect_mime']		= TRUE;
        		$config['encrypt_name']		= TRUE;	

        		$this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
                
            $errors = array('error' => $this->upload->display_errors());
            $post_image = $this->input->post('image');

        }else{
               
          	$data = array('upload_data' => $this->upload->data());
           	$post_image = $this->upload->data('file_name');

        }

		$this->Schedule_model->update_post($post_image);
		$this->session->set_flashdata('success', 'Successfully update data event schedule.');
		redirect('schedule');

		}
	}

}
