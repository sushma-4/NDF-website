<?php

/**
* 
*/
class Pages extends CI_Controller
{

	function view($page)
	{

		$this->load->helper('form');
		$this->load->view('pages/'.$page);
	}


}



?>
