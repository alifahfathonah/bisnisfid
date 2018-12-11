<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
	public function index() {
		
		
		$data['title'] = 'About';
		$slug  = $this->uri->segment(2);
		$url = current_url();
		
		$data['title_agent'] = "Profile";
		$data['agent'] = $this->Agent_model->get_agent($slug);
		$data['user'] = $this->uri->segment(2);
		if(empty($data['agent'])) {
			redirect('');
		}
		$data['title'] = "Home";
		$data['username'] = $slug;
		
        
		$data['personal'] = $this->Agent_model->get_personal($slug);
		$data['profile'] = $this->Agent_model->get_profile($slug);
		$data['t'] = $this->Post_model->get_posts(false,'t');
		
		$data['slug'] = "sonnyarief@gmail.com";
		$data['phone'] = "0815-1396-7907";
		$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
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
		
		$this->load->view('templates/header', $data);
		$this->load->view('about/index',$data);
		$this->load->view('templates/footer');
	}
}