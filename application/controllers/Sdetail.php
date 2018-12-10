<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sdetail extends CI_Controller {
	
	public function index() {
		$record_num = $this->uri->segment_array();
		if($this->uri->segment(3) != NULL){
			$slug = $this->uri->segment(3);
			$data['agent'] = $this->Agent_model->get_agent($record_num[count($record_num)-1]);
		}else{
			$data['agent'] = $this->Agent_model->get_agent($record_num[count($record_num)-1]);
			$data['emailnya'] = "sonnyarief@gmail.com";
			$data['namanya'] = "Sonny Arief";
			$data['phone'] = "6281513967907";		$data['addon'] = "<h4>Surabaya</h4>
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

		$data['schedules'] = $this->Schedule_model->get_public_posts();
		$data['single'] = $this->Schedule_model->get_single_post($record_num[count($record_num)]);

		//print_r($data['schedule']);

		if(empty($data['single'])) {
			show_404();
		}
		

		$this->load->view('templates/header', $data);
		$this->load->view('sdetail/index',$data);
		$this->load->view('templates/footer');
		

	}
}