<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- Twitter meta-->
   
    <title>Brilliants Convent</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?php echo base_url(); ?>healthform"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo" ></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        
        <!-- User Menu-->
        <li class="dropdown app-profile"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <!--<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>-->
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>healthform/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo base_url(); ?>healthform"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="treeview-item" href="<?php echo base_url(); ?>user/blog"><i class="icon fa fa-circle-o"></i> Blog</a></li>
        <li><a class="treeview-item" href="<?php echo base_url(); ?>Achievement/index"><i class="icon fa fa-circle-o"></i> Achievements</a></li>
        <li><a class="treeview-item" href="<?php echo base_url(); ?>Gallery/index"><i class="icon fa fa-circle-o"></i> Gallery</a></li>
        <li><a class="treeview-item" href="<?php echo base_url(); ?>Club/index"><i class="icon fa fa-circle-o"></i> Club</a></li>
        <li><a class="treeview-item" href="<?php echo base_url(); ?>Ourprinciple/index"><i class="icon fa fa-circle-o"></i> Our Principle</a></li>
        <li><a class="treeview-item" href="<?php echo base_url(); ?>Ourfounder/index"><i class="icon fa fa-circle-o"></i> Our Founder</a></li>
<li><a class="treeview-item" href="<?php echo base_url(); ?>Facilities/index"><i class="icon fa fa-circle-o"></i> Facilities</a></li>
<li><a class="treeview-item" href="<?php echo base_url(); ?>Notice/index"><i class="icon fa fa-circle-o"></i> Notice Board</a></li>
<li><a class="treeview-item" href="<?php echo base_url(); ?>Academics/index"><i class="icon fa fa-circle-o"></i> Academics</a></li>
<li><a class="treeview-item" href="<?php echo base_url(); ?>Event/index"><i class="icon fa fa-circle-o"></i> Events</a></li>
<li><a class="treeview-item" href="<?php echo base_url(); ?>Admission/index"><i class="icon fa fa-circle-o"></i> Admission Process</a></li>
      </ul>
    </aside>
