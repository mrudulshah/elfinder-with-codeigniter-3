<?php

if ( !defined('BASEPATH') )
	exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Class Constructor method
	 */
	public function __construct(){
		parent::__construct();
    }

	
    function elfinder_init()
	{
		$this->load->helper('general_helper');
		$opts = initialize_elfinder();
	  	$this->load->library('elfinder_lib', $opts);
	}


}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */