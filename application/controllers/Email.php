<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {
	public function send() {
		$this->form_validation->set_rules('fname','Nama Lengkap','trim|min_length[2]|max_length[255]');
		$this->form_validation->set_rules('bdate','Tanggal Lahir','trim');
		$this->form_validation->set_rules('gender','Jenis Kelamin','trim');
		$this->form_validation->set_rules('occ','Pekerjaan','trim');
		$this->form_validation->set_rules('smoker','Perokok','trim');
		$this->form_validation->set_rules('pplan','Sistem Pembayaran','trim');
		$this->form_validation->set_rules('amount','Jumlah Pembayaran','trim');
		$this->form_validation->set_rules('aplan','Asuransi Tambahan','trim');
		$this->form_validation->set_rules('phone','Nomor HP','trim');
		$this->form_validation->set_rules('email','Email','trim|valid_email');
		$this->form_validation->set_rules('sid','ID Sosial Media','trim');
		$this->form_validation->set_rules('stype','Tipe Sosial Media','trim');
		$this->form_validation->set_rules('city','Kota','trim');
		$this->form_validation->set_rules('zcode','Zip Code','trim');
		$this->form_validation->set_rules('iimpor','Pentingnya Asuransi','trim');
		$this->form_validation->set_rules('will','Asuransi TAPRO','trim');

		$to = $this->input->post('to');
		if($to == "contact@sampledomain.com") {
			$pages = 'contacts'; 
		}else{
			$pages = 'contacts/'.$to;
		}
		if($this->form_validation->run() == FALSE) {
			redirect($pages);
		}else{
			if($row = $this->Agent_model->verify_agent()){
				//print_r($row['email']);
				$this->Contact_model->insert();
				$this->load->library('email');
	$body = "
	Nama Lengkap						:" .$this->input->post('fname') ."
	Tanggal Lahir						:" .$this->input->post('bdate') ."
	Jenis Lengkap						:" .$this->input->post('gender') ."
	Pekerjaan							:" .$this->input->post('occ') ."
	Perokok								:" .$this->input->post('smoker') ."
	Rencana Sistem Pembayaran Premi 	:" .$this->input->post('pplan') ."
	Rencana Jumlah Premi yang dibayar	:" .$this->input->post('amount') ."
	Asuransi Tambahan					:" .$this->input->post('aplan') ."
	No Hp atau whatsapp					:" .$this->input->post('phone') ."
	Email 								:" .$this->input->post('email') ."
	ID Sosial Media 					:" .$this->input->post('sid') ."
	Tipe Sosial Media 					:" .$this->input->post('stype') ."
	Kota 								:" .$this->input->post('city') ."
	Kodepos								:" .$this->input->post('zcode') ."
	Seberapa penting asuransi 			:" .$this->input->post('iimpor') ."
	Pengajuan asuransi TAPRO			:" .$this->input->post('will') 
	;

				$this->email->from($this->input->post('fname'),'<'.$this->input->post('email').'>');
				$this->email->to($row['email']);
				$this->email->subject($this->input->post('subject'));
				$this->email->message($body);
				$this->email->send();
		
				redirect($pages);
					
			}else{
				redirect($pages);
			}
		} 
	}
}