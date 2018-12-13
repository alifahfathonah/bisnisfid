<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toolaids_model extends CI_Model{



	public function __construct() {			

		$this->load->database();

	}

	public function get_all_posts($id = false, $section) {

		if($id === false){
				
			$this->db->order_by('updated_at', 'DESC');
			$query = $this->db->get_where('toolaids',array('section' => $section));
			return $query->result_array();				

		}

		$query = $this->db->get_where('toolaids', array('id' => $id, 'section' => $section));

		return $query->row_array();
			
	}

	public function get_files($section, $type, $slug) {
		
		

		if ($section != false && $type != false && $slug != false) {
			$this->db->order_by('updated_at', 'DESC');
			$query = $this->db->get_where('toolaids', array('section' => $section,'type' => $type, 'slug' => $slug));
			
			return $query->row_array();

		} elseif (($section != false && $type == 'video' && $slug == false) || ($section != false && $type == 'doc' && $slug == false)){
			$this->db->order_by('updated_at', 'DESC');
			$query = $this->db->get_where('toolaids', array('section' => $section, 'type' => $type));

			return $query->result_array();
		
		} elseif ($section != false && $type == 'photo' && $slug == false) {
			$this->db->order_by('toolaids_images.updated_at', 'DESC');
			$this->db->from('toolaids');
			$this->db->join('toolaids_images', 'toolaids_images.id_album = toolaids.id');
			$this->db->where(array('toolaids.section' => $section,'toolaids.type' => $type));
			
			$query = $this->db->get();

			return $query->result_array();
		
		} else {

			return false;

		}
	
	}

	public function get_all_images($id, $section) {
		
		$this->db->select('*');
		$this->db->from('toolaids');
		$this->db->join('toolaids_images', 'toolaids_images.id_album = toolaids.id');
		$this->db->where(array('toolaids.id' => $id, 'toolaids.section' => $section));
		
		$query = $this->db->get();

		return $query->result_array();
			
	}

	public function store($post_file=array(), $type, $section, $count=null) {

		$slug = url_title($this->input->post('title'));

		if($section === "book" || $section === "epro") {
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'doc' => $post_file,
				'section' => $this->input->post('section'),
				'type' => $this->input->post('type'),		
				'created_by' => $this->session->userdata('name'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

		}elseif(($section == "meeting" && $type == "video") || ($section == "asn" && $type == "video") || ($section == "mobile" && $type == "video")) {
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'url' => $post_file,
				'section' => $this->input->post('section'),
				'type' => $this->input->post('type'),		
				'created_by' => $this->session->userdata('name'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);
		}else{
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'section' => $this->input->post('section'),
				'type' => $this->input->post('type'),		
				'created_by' => $this->session->userdata('name'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

		}
		
		

		if($section === "book" || $section === "epro") {

			return $this->db->insert('toolaids', $data);

		}elseif(($section == "meeting" && $type == "video") || ($section == "asn" && $type == "video") || ($section == "mobile" && $type == "video")) {

			return $this->db->insert('toolaids', $data);

		}else{
			
			$this->db->insert('toolaids', $data);
			$id = $this->db->insert_id();

			for($i=0; $i<$count; $i++){
				$data = array(
						'id_album' => $id,
						'image' => $post_file[$i]['file_name']
					);
				$this->db->insert('toolaids_images', $data);
			}

			return true;
		}

	}

	public function update($post_file, $section, $type) {

		$slug = url_title($this->input->post('title'));

		if($section === "book" || $section === "epro") {

			$data_f = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'doc' => $post_file,
				'created_by' => $this->session->userdata('name'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('toolaids', $data_f);

		}elseif(($section == "meeting" && $type == "video") || ($section == "asn" && $type == "video") || ($section == "mobile" && $type == "video")) {

			$data_f = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'url' => $post_file,
				'created_by' => $this->session->userdata('name'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('toolaids', $data_f);

		}else{

			for($i=0; $i<$post_file; $i++){
				$data_f = array('caption' => $this->input->post('caption')[$i],
					'updated_at' => date('Y-m-d H:i:s'));		
							
				$this->db->where('id', $this->input->post('id')[$i]);
				$this->db->update('toolaids_images', $data_f);
			}
			
			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'updated_at' => date('Y-m-d H:i:s')
			);

			$this->db->where('id', $this->input->post('id_main'));
			return $this->db->update('toolaids', $data);
		}


	}

	public function destroy($id) {

		$this->db->where('id', $id);
		$this->db->delete('toolaids');

		$this->db->where('id_album', $id);
		$this->db->delete('toolaids_images');
		return true;

	}

}