<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends CI_Controller {
	
	public function index() {
		
		$section = "b";
		$slug=FALSE;

		if($this->uri->segment(2) != NULL){
			
			$data['user'] = $this->uri->segment(2);
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			
			if(empty($data['user'])) {
				show_404();
			}

		}else{
			$data['user'] = "view";
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			$data['emailnya'] = "sonnyarief@gmail.com";
			$data['namanya'] = "Sonny Arief";
			$data['phone'] = "6281513967907";
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
		}

		if($this->input->post('search' == null))
			$data['posts'] = $this->Post_model->get_posts($slug,$section);
		else
			$data['posts'] = $this->Post_model->get_posts_search($slug,$section);
		
		//print_r($data['posts']);
		$this->load->view('templates/header', $data);
		$this->load->view('gallery/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = FALSE) {


		$section = "b";

		if($this->uri->segment(3) != NULL){
			$slug = $this->uri->segment(3);
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			$data['emailnya'] = "sonnyarief@gmail.com";
			$data['namanya'] = "Sonny Arief";
			$data['phone'] = "6281513967907";
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
			$data['posts'] = $this->Post_model->get_side_posts($section); 


		}else{
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			$data['posts'] = $this->Post_model->get_side_posts($section); 
		}

		$data['post'] = $this->Post_model->get_posts($slug,$section);
		//print_r($data['posts']);

		if(empty($data['post'])) {
			show_404();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('gallery/view',$data);
		$this->load->view('templates/footer');
	

	}

	public function search() {
		
		$section = "b";
		$slug=FALSE;

		if($this->uri->segment(2) != NULL && $this->uri->segment(2) != "search"){
			
			$data['user'] = $this->uri->segment(2);
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			
			
		}else{
			$data['user'] = "view";
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			$data['emailnya'] = "sonnyarief@gmail.com";
			$data['namanya'] = "Sonny Arief";
			$data['phone'] = "6281513967907";
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
		}

		
		//print_r($data['posts']);
		$this->load->view('templates/header', $data);
		$this->load->view('gallery/search',$data);
		$this->load->view('templates/footer');
	}
}