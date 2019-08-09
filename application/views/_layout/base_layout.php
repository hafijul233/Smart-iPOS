<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo 'Smart-iPOS | ' . $tab_title; ?></title>
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>plugins/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- BootStrap -->
  <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- DataTables -->
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- App Style -->
  <link href="<?php echo base_url(); ?>assets/css/smart-ipos.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Navigation -->
<?php $this->load->view('_layout/header'); ?>
<!-- Page Content -->
<div class="container-fluid">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-5 mb-2"><?php echo $page_title; ?>
    <small class="controller"><?php echo isset($base_title) ? $base_title : 'Control Panel'; ?></small>
  </h1>
  <!-- Main Content -->
  <?php $this->load->view($view_path); ?>
</div>
<!-- /.container -->
<!-- Footer -->
<?php $this->load->view('_layout/footer'); ?>
<!-- Jquery-->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- dataTables -->
<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- App Script -->
<script src="<?php echo base_url(); ?>assets/js/smart-ipos.js"></script>
</body>
</html>


