
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donate_model extends CI_Model{
	
	public function __construct() {
	parent::__construct();
	}


	function form_insert($data){

		$this->db->insert('donate',$data);
	}	
	
}

?>