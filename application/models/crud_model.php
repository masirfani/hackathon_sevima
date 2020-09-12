<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	function create($table,$data){
		$query = $this->db->insert($table,$data);
		if ($query) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function read($table){
		$query = $this->db->get($table)->result();
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}

	function read_one($table, $id_name, $id){
		$this->db->where($id_name, $id);
		$query = $this->db->get($table)->row();
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}

	function read_where($table, $id_name, $id){
		$this->db->where($id_name, $id);
		$query = $this->db->get($table)->result();
		if ($query) {
			return $query;
		}else{
			return FALSE;
		}
	}

	function sum_field($table, $field, $id_name = NULL, $id = NULL){
		if (!empty($id_name) && !empty($id)) {
			$this->db->select_sum($field)->where($id_name,$id);
		}else{
			$this->db->select_sum($field);
		}
		$query = $this->db->get($table)->row();
		if ($query->$field > 0) {
			return $query->$field;	
		}else{
			return 0;
		}
	}

	function row_field($table, $id_name = NULL, $id = NULL){
		if (empty($id_name) && empty($id)) {
			return $this->db->get($table)->num_rows();
		}else{
			return $this->db->where($id_name, $id)->get($table)->num_rows();
		}
	}

	function update($table, $data, $id_name, $id){
		$this->db->where($id_name, $id);
		$query = $this->db->update($table, $data);
		if ($query) {
			return TRUE;
		}else{
			return FALSE;
		}	
	}

	function delete($table,$id_name,$id){
		$this->db->where($id_name, $id);
		$query = $this->db->delete($table);
		if ($query) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */