<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends CI_Controller {
	public function index($slug = NULL) {
		
		if($this->uri->segment(2) != NULL){

			$slug  = $this->uri->segment(2);
			$data['agent'] = $this->Agent_model->get_agent($slug);
			$data['slug'] = $this->uri->segment(2);
            $data['phone'] = "0815-1396-7907";
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
			
		}else{
			$data['agent'] = $this->Agent_model->get_agent($slug);
			$data['slug'] = "sonnyarief@gmail.com";
			$data['phone'] = "0815-1396-7907";
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
	
		}

		$this->load->view('templates/header', $data);
		$this->load->view('contacts/index', $data);
		$this->load->view('templates/footer');
	}
}
