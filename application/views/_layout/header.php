<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Start Header Top Area -->
<nav class="navbar fixed-top navbar-icon-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url() . 'Dashboard'; ?>"><h4><img
          src="<?php echo base_url(); ?>assets/img/app_logo.png" class="img-responsive"
          width="45"> <?php echo 'Smart-iPOS'; ?></h4></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-layer-group"></i> Stocks
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Add New Product</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Stocks List</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Low Stocks</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Damaged Stocks</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Stock Return</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-hand-receiving"></i> Purchase
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Purchase List</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Due Purchase</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Purchase Return</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-share-square"></i> Sales
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Sales</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Sales Return</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Chalan</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-file-user"></i> Accounts
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">1 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">2 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">3 Column Portfolio</a>
            <a class="dropdown-item " href="<?php echo base_url(); ?>">4 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Single Portfolio Item</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-download"></i> Loans
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Personal Loan</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Bank Loan</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">3 Column Portfolio</a>
            <a class="dropdown-item " href="<?php echo base_url(); ?>">4 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Single Portfolio Item</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-abacus"></i> Reports
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">1 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">2 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">3 Column Portfolio</a>
            <a class="dropdown-item " href="<?php echo base_url(); ?>">4 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Single Portfolio Item</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-database"></i> Database
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">1 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">2 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">3 Column Portfolio</a>
            <a class="dropdown-item " href="<?php echo base_url(); ?>">4 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Single Portfolio Item</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cogs"></i> Settings
          </a>
          <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>">1 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">2 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">3 Column Portfolio</a>
            <a class="dropdown-item " href="<?php echo base_url(); ?>">4 Column Portfolio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>">Single Portfolio Item</a>
          </div>
        </li>
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Admin name
          </a>
          <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="<?php echo base_url(); ?>"><i class="fa fa-user"></i> User Profile</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>"><i class="fa fa-clipboard-list"></i> Activity Log</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>"><i class="fa fa-door-open"></i> Log Out</a>
          </div>
        </li>

        <!--<li class="nav-item">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> </button>
          </form>
        </li>-->
      </ul>
    </div>
  </div>
</nav>
<!-- End Header Top Area -->