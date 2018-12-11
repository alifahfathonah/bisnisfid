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

		}elseif(($this->input->post('section') === "meeting") && ($this->input->post('type') === "photo") || ($this->input->post('section') === "asn") && ($this->input->post('type') === "photo") || ($this->input->post('section') === "mobile") && ($this->input->post('type') === "photo") ){

			$data = array();
	       
	        if(!empty($_FILES['userfile']['name'])){

	            $filesCount = count($_FILES['userfile']['name']);

	            for($i = 0; $i < $filesCount; $i++){
	                $_FILES['file']['name']     = $_FILES['userfile']['name'][$i];
	                $_FILES['file']['type']     = $_FILES['userfile']['type'][$i];
	                $_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
	                $_FILES['file']['error']    = $_FILES['userfile']['error'][$i];
	                $_FILES['file']['size']     = $_FILES['userfile']['size'][$i];
	                
	                $config['upload_path']          = './assets/'.$this->input->post('section').'/';
	                $config['allowed_types'] = 'bmp|jpg|jpeg|png|gif';
	                $config['max_size']             = 2048;
		            $config['max_width']            = 1024;
		            $config['max_height']           = 1024;
		            $config['file_ext_tolower']		= TRUE;
		            $config['remove_spaces']		= TRUE;
		            $config['detect_mime']			= TRUE;
		            $config['encrypt_name']			= TRUE;
	               
	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('file')){
	                 
	                    $fileData = $this->upload->data();
	                    $uploadData[$i]['file_name'] = $fileData['file_name'];
	                    $uploadData[$i]['created_at'] = date("Y-m-d H:i:s");
	                    
	                }
	            }
	            
	            if(!empty($uploadData)){
	                
	                $this->Toolaids_model->store($uploadData,'photo',$this->input->post('section'), $filesCount);

	                $this->session->set_flashdata('success', 'Successfully create post.');

					redirect('toolaids/index');
	                
	            }else{

	            	 $this->session->set_flashdata('failed', 'ERROR: Something wrong please refresh your page and try again.');
					 redirect('toolaids/create/'.$this->input->post('section').'/photo');

	            }
	        }

			

		}else{

			 $this->session->set_flashdata('failed', 'ERROR: Something wrong please refresh your page and try again.');
			 redirect('toolaids/create/'.$this->input->post('section').'/video');

		}
	}

	public function edit($section, $id) {

		$data['title'] = 'Edit Post';
		
		if($this->uri->segment(5) === "photo") {
			
			$data['post'] = $this->Toolaids_model->get_all_posts($id, $section);
			$data['posts'] = $this->Toolaids_model->get_all_images($id, $section);
			
			if(empty($data['posts'])) {
			show_404();
			}

		} else {
			
			$data['post'] = $this->Toolaids_model->get_all_posts($id, $section);

			if(empty($data['post'])) {
			show_404();
			}

		}
		//print_r($data['post']);
		
		

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

	            $this->Toolaids_model->update($post_file,$this->input->post('section'),'doc');

	            $this->session->set_flashdata('success', 'Successfully update data.');

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

				$this->Toolaids_model->update($post_file,$this->input->post('section'),'url');

	            $this->session->set_flashdata('success', 'Successfully update data.');

				redirect('toolaids/index');
			}

		} elseif (($this->input->post('section') === "meeting") && ($this->input->post('type') === "photo") || ($this->input->post('section') === "asn") && ($this->input->post('type') === "photo") || ($this->input->post('section') === "mobile") && ($this->input->post('type') === "photo") ){

			$post_file = count($this->input->post('id'));

			$this->Toolaids_model->update($post_file,$this->input->post('section'),'photo');

			$this->session->set_flashdata('success', 'Successfully update data.');

				redirect('toolaids/index');

		}else {

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

