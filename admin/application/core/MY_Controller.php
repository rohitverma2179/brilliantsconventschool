<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('table');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->helper('email');
		$this->load->helper('security');
		$this->load->library('email');
	    $this->load->helper('common');
		
	}
	
}