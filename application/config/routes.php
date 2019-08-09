<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route = array(
    'default_controller' => 'welcome',
    '404_override' => '',
    'translate_uri_dashes' => FALSE,
    //Application Routes
    'Login' => 'welcome/login_view',
    'Dashboard' => 'home/dashboard_view',
    'Add-New-Stock' => 'add_new_stock_view',
    'Stock-List' => 'stock/stock_list_view',
    'Low-Stock' => 'stock/low_stock_view',
    'Damaged-Stock' => 'stock/damaged_stock_view',
    'Stock-Return' => 'stock/stock_return_view'
);
