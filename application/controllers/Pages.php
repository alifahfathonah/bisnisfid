<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home') {
		
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			redirect('members');
		}
		
		$data['title'] = ucfirst($page);

		#Posts Section
		$slug = FALSE;
		$section = 'p';
		$data['title_post'] = 'Latest Posts';
		$data['posts'] = $this->Post_model->get_posts($slug,$section);
		$data['schedules'] = $this->Schedule_model->get_public_posts();
		//print_r($data['posts']);
		$data['title_video'] = 'Latest Video';
		$data['video'] = $this->Video_model->get_video();
		//print_r($data['video']);

                $data['addon'] = "<h4>Surabaya</h4>
                  <p>Gedung Graha Pacific Lt. 3A<br>
				  Jl Basuki Rahmat 87-91 |
				  Embong Kaliasin, Kota Surabaya<br>
				  Jawa Timur - 60271
                  <br><br><h4>Jakarta</h4>
                  <p>APL Tower | Lt. 11 - Suite 01<br>Jl. Letjen S. Parman kav. 28<br>
				  
				  Kota Jakarta Barat<br>
				  Daerah Khusus Ibukota Jakarta 11470
                      ";
		$data['url'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7533965528414!2d112.73961441477486!3d-7.268879394753244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdfa81b3385%3A0x1bb32063f92608d!2sGraha+Pacific%2C+Embong+Kaliasin%2C+Genteng%2C+Kota+SBY%2C+Jawa+Timur!5e0!3m2!1sen!2sid!4v1538140594356";
		$data['mailnya'] = "sonnyarief@gmail.com";
		$data['phone'] = "6281513967907";
		$data['namanya'] = "Sonny Arief";
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');

	}

	public function view_post($slug = NULL) {
		
		$section = 'p';
		
		if($this->uri->segment(3) != NULL){
			$slug = $this->uri->segment(3);
		}

		$data['post'] = $this->Post_model->get_posts($slug,$section);
		//print_r($data['posts']);
		
		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');
	
	}

	public function add_count($url,$slug) {
	
	    $this->load->helper('cookie');
		$check_visitor = $this->input->cookie(urldecode($url), FALSE);
	    $ip = $this->input->ip_address();
		
	    if ($check_visitor == false) {
	    
	        $this->input->set_cookie('name', urldecode($url), 'value', $ip, 'expire', time()+7200,'secure',FALSE);
	        $this->Post_model->update_counter_product($slug,$ip,urldecode($url));
	        
	    }

	}
	

	public function view_agent() {

		$slug  = $this->uri->segment(1);
		$url = current_url();
		$this->add_count($url,$slug);
		$data['title_agent'] = "Profile";
		$data['agent'] = $this->Agent_model->get_agent($slug);
		$data['schedules'] = $this->Schedule_model->get_public_posts();
		
		if(empty($data['agent'])) {
			redirect('');
		}

		$data['title'] = "Home";
		$data['username'] = $slug;
		#Posts Section
		$slug = FALSE;
		$section = 'p';
		$data['title_post'] = 'Latest Posts';
		$data['posts'] = $this->Post_model->get_posts($slug,$section);
		//print_r($data['posts']);
		
		$data['title_video'] = 'Latest Video';
		$data['video'] = $this->Video_model->get_video();
		//print_r($data['video']);

		#Posts Section
		$data['title_post'] = 'Personal Articles';
		$slug = $this->session->userdata('username');
		$data['personal'] = $this->Agent_model->get_personal($slug);
		//print_r($data['posts']);
		$data['addon'] = "<h4>Surabaya</h4>
                  <p>Gedung Graha Pacific Lt. 3A<br>
				  Jl Basuki Rahmat 87-91 |
				  Embong Kaliasin, Kota Surabaya<br>
				  Jawa Timur - 60271
                  <br><br><h4>Jakarta</h4>
                  <p>APL Tower | Lt. 11 - Suite 01<br>Jl. Letjen S. Parman kav. 28<br>
				  
				  Kota Jakarta Barat<br>
				  Daerah Khusus Ibukota Jakarta 11470
                      ";
		$data['url'] = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7533965528414!2d112.73961441477486!3d-7.268879394753244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdfa81b3385%3A0x1bb32063f92608d!2sGraha+Pacific%2C+Embong+Kaliasin%2C+Genteng%2C+Kota+SBY%2C+Jawa+Timur!5e0!3m2!1sen!2sid!4v1538140594356";
		

		$this->load->view('templates/header', $data);
		$this->load->view('pages/view_agent', $data);
		$this->load->view('templates/footer');
		
	}
}
