<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tools extends CI_Controller {
	
	public function index() {
		
		$page_tools = array("book","epro","meeting","asn","mobile");
		if(!in_array($this->uri->segment(2), $page_tools)){
			
			switch($this->uri->segment(3)){
				case 'book' :
					$title = "Buku yang Direkomendasi";
					$section = "book";
				break;
				case 'epro' :
					$title = "E-Pro";
					$section = "epro";
				break;
				case 'meeting' :
					$title = "Pertemuan";
					$section = "meeting";
				break;
				case 'asn' :
					$title = "ASN Digital Tools";
					$section = "asn";
				break;
				case 'mobile' :
					$title = "Univision Go-mobile apps";
					$section = "mobile";
				break;
				default:
					$title = null;
					$section = false;
				break;
			}

			$data['user'] = $this->uri->segment(2);
			$data['agent'] = $this->Agent_model->get_agent($this->uri->segment(2));
			
		}else{
			
			switch($this->uri->segment(2)){
				case 'book' :
					$title = "Buku yang Direkomendasi";
					$section = "book";
				break;
				case 'epro' :
					$title = "E-Pro";
					$section = "epro";
				break;
				case 'meeting' :
					$title = "Pertemuan";
					$section = "meeting";
				break;
				case 'asn' :
					$title = "ASN Digital Tools";
					$section = "asn";
				break;
				case 'mobile' :
					$title = "Univision Go-mobile apps";
					$section = "mobile";
				break;
				default:
					$title = null;
					$section = false;
				break;
			}
			

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

		$data['title'] = $title;

		$data['videos'] = $this->Toolaids_model->get_files($section, 'video', false);
		$data['docs'] = $this->Toolaids_model->get_files($section, 'doc', false);
		$data['photos'] = $this->Toolaids_model->get_files($section, 'photo', false);
		$data['schedules'] = $this->Schedule_model->get_public_posts();
		
		$this->load->view('templates/header', $data);
		$this->load->view('tools/index',$data);
		$this->load->view('templates/footer');

	}

}