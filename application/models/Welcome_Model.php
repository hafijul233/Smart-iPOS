<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_Model extends CI_Model {
 
	function __construct()
    {
        parent::__construct();
    }
    
    public function index()
	{
        $data = array(
            'tab_title' => 'Login'
        );
	    $this->load->view('auth/login', $data);
	}
}
