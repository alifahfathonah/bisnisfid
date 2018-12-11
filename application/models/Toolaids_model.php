<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toolaids_model extends CI_Model{



	public function __construct() {			

		$this->load->database();

	}

	public function get_all_posts($id = false, $section) {

		if($id === false){
				
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get_where('toolaids',array('section' => $section));
			return $query->result_array();				

		}

		$query = $this->db->get_where('toolaids', array('id' => $id, 'section' => $section));

		return $query->row_array();
			
	}

	public function store($post_file, $type, $section) {

		$slug = url_title($this->input->post('title'));

		if($section === "book" || $section === "epro") {
			$column = "doc";
		}elseif(($section == "meeting" && $type == "video") || ($section == "asn" && $type == "video") || ($section == "mobile" && $type == "video")) {
			$column = "url";
		}else{
			$column = "photo";
		}
		
		$data = array(

				'title' => $this->input->post('title'),
				'slug' => $slug,
				$column => $post_file,
				'section' => $this->input->post('section'),
				'type' => $this->input->post('type'),		
				'created_by' => $this->session->userdata('name'),
				'created_at' => date('Y-m-d H:i:s')

		);

		return $this->db->insert('toolaids', $data);
		
	}

	public function update($post_file, $section) {

		$slug = url_title($this->input->post('title'));

		if($section === "book" || $section === "epro") {
			$column = "doc";
		}elseif($section == "meeting" || $section == "asn" || $section == "mobile") {
			$column = "url";
		}else{
			$column = "photo";
		}

		$data_f = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				$column => $post_file,
				'created_by' => $this->session->userdata('name'),
				'updated_at' => date('Y-m-d H:i:s')
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('toolaids', $data_f);

	}

	public function destroy($id) {

		$this->db->where('id', $id);
		$this->db->delete('toolaids');

		return true;

	}

}