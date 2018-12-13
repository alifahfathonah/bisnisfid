<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tools extends CI_Controller {
	
	public function index() {
		
		if($this->uri->segment(2) != NULL){

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

		$datap['title'] = "";
		$data['videos'] = $this->Toolaids_model->get_files(false, 'video', false);
		$data['docs'] = $this->Toolaids_model->get_files(false, 'doc', false);
		$data['photos'] = $this->Toolaids_model->get_files(false, 'photo', false);
		//$data['photos'] = $this->Toolaids_model->get_all_posts();

		$this->load->view('templates/header', $data);
		$this->load->view('tools/index',$data);
		$this->load->view('templates/footer');

	}

}