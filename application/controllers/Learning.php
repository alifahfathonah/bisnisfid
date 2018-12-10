<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Learning extends CI_Controller {



	public function index($slug = NULL) {

		

		$data['title'] = 'Material';

		$data['videos'] = $this->Learning_model->get_all_videos($slug);

		$data['files'] = $this->Learning_model->get_all_files($slug);

		//print_r($data['posts']);

		

		$this->load->view('member_area/templates/header');

		$this->load->view('learning/index', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function view($slug = NULL) {



		$data['post'] = $this->Learning_model->get_all_posts($slug);

		$data['videos'] = $this->Learning_model->get_all_videos($slug);

		$data['files'] = $this->Learning_model->get_all_files($slug);

		//print_r($data['posts']);



		if(empty($data['post'])) {

			show_404();

		}



		$data['title'] = $data['post']['title'];



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/view', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function viewvideo($id_video = NULL) {



		$data['videos'] = $this->Learning_model->get_all_videos($id_video);

		//print_r($data['videos']);





		$data['title'] = $data['videos']['title'];



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/view', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function viewfile($id_file = NULL) {



		$data['files'] = $this->Learning_model->get_all_files($id_file);

		//print_r($data['videos']);





		$data['title'] = $data['files']['title'];



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/view_file', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function create() {

		$data['title'] = 'Upload New Video';

		$data['error'] = '';



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/create',$data);

		$this->load->view('member_area/templates/footer');

	}



	public function createfile() {



		$data['title'] = 'Upload New File';

		$data['error'] = '';



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/create_file',$data);

		$this->load->view('member_area/templates/footer');

	}



	public function createVideo(){



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('url', 'URL', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');


		

		

		if($this->form_validation->run() === FALSE){



			$data['title'] = 'Upload New Video';

			$data['error'] = '';



			$this->load->view('member_area/templates/header');

			$this->load->view('learning/create',$data);

			$this->load->view('member_area/templates/footer');



		} else {



			$this->Learning_model->add_video();



			$this->session->set_flashdata('upload_video', 'Successfully upload new video.');

			redirect('learning/index');

		}



	}



	public function docreate() {



		$data['title'] = 'Create New Video';

		$data['error'] = '';



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');

		
		if($this->form_validation->run() === FALSE){



			$this->load->view('member_area/templates/header');

			$this->load->view('learning/create', $data);

			$this->load->view('member_area/templates/footer');



		} else {



			$config['upload_path']          = './assets/learning/';

            $config['allowed_types']        = '*';

            $config['max_size']             = 2048;

            $config['max_width']            = 1024;

            $config['max_height']           = 768;

            $config['file_ext_tolower']		= TRUE;

            $config['remove_spaces']		= TRUE;

            $config['detect_mime']			= TRUE;

            $config['encrypt_name']			= TRUE;

           

            $this->load->library('upload', $config);



            if (!$this->upload->do_upload('userfile')) {

                

                $errors = array('error' => $this->upload->display_errors());

                $post_file = null;



            }else{

               

            	$data = array('upload_data' => $this->upload->data());

              	$post_file = $this->upload->data('file_name');



            }



            $this->Learning_model->create_post($post_file);



            redirect('learning');

			

		}

		

		



	}



	public function docreatevideo() {



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('url', 'URL', 'required');

		
		$this->form_validation->set_rules('section', 'Section', 'required');

		

		if($this->form_validation->run() === FALSE){



			redirect('learning/edit/'.$this->input->post('slug'));



		} else {



			$this->Learning_model->add_video();



			redirect('learning/edit/'.$this->input->post('slug'));

		}



	}



	public function docreatefile() {



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');


		$data['title'] = 'Upload New File';

		$data['error'] = '';

		



		if($this->form_validation->run() === FALSE){



			$this->load->view('member_area/templates/header');

			$this->load->view('learning/create_file', $data);

			$this->load->view('member_area/templates/footer');



		} else {



			$config['upload_path']          = './assets/learning/';

            $config['allowed_types']        = '*';

            $config['max_size']             = 2048;

            $config['max_width']            = 1024;

            $config['max_height']           = 768;

            $config['file_ext_tolower']		= TRUE;

            $config['remove_spaces']		= TRUE;

            $config['detect_mime']			= TRUE;

            $config['encrypt_name']			= TRUE;

           

            $this->load->library('upload', $config);



            if (!$this->upload->do_upload('userfile')) {

                $this->session->set_flashdata('failed_upload_file', 'Failed tp upload new document.');

                redirect('learning/createfile');



            }else{

               

            	$data = array('upload_data' => $this->upload->data());

              	$post_file = $this->upload->data('file_name');

              	$image_file = $this->upload->data('userfileimage');

            }

           

            if ($this->upload->do_upload('userfileimage')) {

             	$data = array('upload_data' => $this->upload->data());

              	$image_file = $this->upload->data('file_name');

              	

            }



			$this->Learning_model->add_file($post_file,$image_file);

			$this->session->set_flashdata('upload_file', 'Successfully upload new document.');



			redirect('learning/index');

		}



	}



	public function delete($id) {



		$this->Learning_model->delete_post($id);

		redirect('learning');

			

	}



	public function delete_video($id) {



		$this->Learning_model->delete_video($id);



		 $this->session->set_flashdata('delete_video', 'Successfully delete video.');

		redirect('learning/index');

			

	}



	public function delete_file($id) {



		$this->Learning_model->delete_file($id);



		 $this->session->set_flashdata('delete_file', 'Successfully delete document.');

		redirect('learning/index');

			

	}





	public function edit($slug) {

		$data['post'] = $this->Learning_model->get_all_posts($slug);

		$data['videos'] = $this->Learning_model->get_all_videos($slug);

		$data['files'] = $this->Learning_model->get_all_files($slug);

		//print_r($data['post']);
		


		if(empty($data['post'])) {

			show_404();

		}



		$data['title'] = 'Edit Material Learning Topic';



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/edit', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function editvideo($id_video) {

		$data['videos'] = $this->Learning_model->get_all_videos($id_video);

		//print_r($data['post']);



		

		$data['title'] = 'Update Video';



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/edit', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function editfile($id_file) {

		$data['files'] = $this->Learning_model->get_all_files($id_file);

		//print_r($data['post']);



		

		$data['title'] = 'Update File';



		$this->load->view('member_area/templates/header');

		$this->load->view('learning/edit_file', $data);

		$this->load->view('member_area/templates/footer');



	}



	public function update() {



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');


		if($this->form_validation->run() === FALSE){



			redirect('learning');



		} else {



		$this->Learning_model->update_post();

		

		redirect('learning');



		}



	}



	public function updatevideo() {



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('url', 'URL', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');


		

		if($this->form_validation->run() === FALSE){



			redirect('learning/editvideo/'.$this->input->post('id_video'));



		} else {



			$this->Learning_model->update_video();



			 $this->session->set_flashdata('update_video', 'Successfully update video.');

			redirect('learning/index');

		}



	}



	public function updatefile() {



		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('section', 'Section', 'required');


		if($this->form_validation->run() === FALSE){



			redirect('learning/editfile/'.$this->input->post('id_file'));



		} else {



			$config['upload_path']          = './assets/learning/';

            $config['allowed_types']        = '*';

            $config['max_size']             = 2048;

            $config['max_width']            = 1024;

            $config['max_height']           = 768;

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



            if ($this->upload->do_upload('userfileimage')) {

             	$data = array('upload_data' => $this->upload->data());

              	$image_file = $this->upload->data('file_name');

              	

            }else{

               

            	$image_file = $this->input->post('imagenya');



            }





            $this->Learning_model->update_file($post_file,$image_file);

            $this->session->set_flashdata('update_file', 'Successfully update document.');

			redirect('learning/index');

		}

		

	}

}

