<?php
    /**
     * Created by PhpStorm.
     * User: hafiz
     * Date: 30/07/2019
     * Time: 2:51 PM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    class notification
    {
        public function danger_notification() {
            if (isset($_SESSION['message'])) {
                echo '<div class="alert alert-danger" style="background-color: #dd4b39 !important;"> ' .
                        '<h3 style="color: #ffffff;"><i class="fa fa-exclamation-triangle"></i> Error!</h3>' .
                        '<p style="color: #ffffff;">' . $_SESSION['message'] .'</p>' .
                    '</div>';
            }
        }
    }