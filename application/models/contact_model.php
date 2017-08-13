<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{
	
	public function __construct() {
	parent::__construct();
	}


	function form_insert($data){

	$query = $this->db->insert('contactdata', $data);
	if($query)
			return true;
		else
			return false;
	}


	function view_contactdata(){
		$query = $this->db->get('contactdata');
		if($query)
			return $query->result();
		else
			return false;

	}

	function showcontact($id){
		
		$this->db->select('*');
		$this->db->from('contactdata');
		$this->db->where('s_no', $id);
		$query = $this->db->get();
		if($query)
			return $query->result();
		
		else
			return false;
	}

	function update_contactdata($id,$data){

		$this->db->where('s_no', $id);
		$query = $this->db->update('contactdata', $data);
		if ($query) 
			return true;
		else
			return false;
	}

	function delete_contactdata($id){

		$this->db->where('s_no', $id);
		$query = $this->db->delete('contactdata');
		if ($query) 
			return true;
		else
			return false;
}

}

?>