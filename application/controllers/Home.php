<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 30/07/2019
     * Time: 2:57 PM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Home extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
    
        public function index()
        {
            redirect(base_url().'/Dashboard');
        }
    
        public function dashboard_view()
        {
            $data = array(
                'tab_title' => 'Dashboard',
                'base_title' => 'Control Panel',
                'page_title' => 'Dashboard',
                'view_path' => 'home/dashboard_view'
            );
            $this->load->view('_layout/base_layout',$data);
        }
    }