<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index($slug = NULL) {
		
		$data['title'] = 'Latest Products';
		$data['posts'] = $this->Product_model->get_posts($slug);
		//print_r($data['posts']);
		
		$this->load->view('member_area/templates/header');
		$this->load->view('products/index', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function view($slug = NULL) {

		$data['post'] = $this->Product_model->get_posts($slug);
		//print_r($data['posts']);

		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('member_area/templates/header');
		$this->load->view('products/view', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function create() {

		$data['title'] = 'New Product';
		$data['error'] = '';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');
		$this->form_validation->set_rules('section', 'Section', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('member_area/templates/header');
			$this->load->view('products/create', $data);
			$this->load->view('member_area/templates/footer');

		} else {

			$config['upload_path']          = './assets/products/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 1024;
            $config['file_ext_tolower']		= TRUE;
            $config['remove_spaces']		= TRUE;
            $config['detect_mime']			= TRUE;
            $config['encrypt_name']			= TRUE;
           
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                
                $errors = array('error' => $this->upload->display_errors());
                $post_image = null;

            }else{
               
            	$data = array('upload_data' => $this->upload->data());
              	$post_image = $this->upload->data('file_name');

            }

            $this->Product_model->create_post($post_image);
            $this->session->set_flashdata('success', 'Successfully created new product');
            redirect('products');
			
		}

	}

	public function delete($id) {

		$this->Product_model->delete_post($id);
		$this->session->set_flashdata('success', 'Successfully deleted product');
		redirect('products');
			
	}


	public function edit($slug) {
		$data['post'] = $this->Product_model->get_posts($slug);
		//print_r($data['posts']);

		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = 'Edit Product';

		$this->load->view('member_area/templates/header');
		$this->load->view('products/edit', $data);
		$this->load->view('member_area/templates/footer');

	}

	public function update() {

		$config['upload_path']          = './assets/products/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['file_ext_tolower']		= TRUE;
        $config['remove_spaces']		= TRUE;
        $config['detect_mime']			= TRUE;
        $config['encrypt_name']			= TRUE;	

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
                
            $errors = array('error' => $this->upload->display_errors());
            $post_image = $this->input->post('image');

        }else{
               
          	$data = array('upload_data' => $this->upload->data());
           	$post_image = $this->upload->data('file_name');

        }

		$this->Product_model->update_post($post_image);
		$this->session->set_flashdata('success', 'Successfully updated product');
		redirect('products');

	}

}
