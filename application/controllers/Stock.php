<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 30/07/2019
     * Time: 2:57 PM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class Stock extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            redirect(base_url() . '/Stocks-List');
        }
        
        public function add_new_stock_view()
        {
            $data = array(
                'tab_title' => 'Add New Stock',
                'base_title' => 'Stocks',
                'page_title' => 'Stock Entry Form',
                'view_path' => 'home/dashboard_view'
            );
            $this->load->view('_layout/base_layout', $data);
        }
        
        public function stock_list_view()
        {
            $data = array(
                'tab_title' => 'Stock List',
                'base_title' => 'Stock',
                'page_title' => 'Stocks Manager',
                'view_path' => 'stock/stock_list_view'
            );
            $this->load->view('_layout/base_layout', $data);
        }
        
        public function low_stock_view()
        {
            $data = array(
                'tab_title' => 'Low Stock',
                'base_title' => 'Stocks',
                'page_title' => 'Low Stock List',
                'view_path' => 'home/dashboard_view'
            );
            $this->load->view('_layout/base_layout', $data);
        }
        
        public function damaged_stock_view()
        {
            $data = array(
                'tab_title' => 'Dashboard',
                'base_title' => 'Stocks',
                'page_title' => 'Dashboard',
                'view_path' => 'home/dashboard_view'
            );
            $this->load->view('_layout/base_layout', $data);
        }
        
        public function stock_return_view()
        {
            $data = array(
                'tab_title' => 'Dashboard',
                'base_title' => 'Stocks',
                'page_title' => 'Dashboard',
                'view_path' => 'home/dashboard_view'
            );
            $this->load->view('_layout/base_layout', $data);
        }
    }