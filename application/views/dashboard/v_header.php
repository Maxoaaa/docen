<!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Informatika Cloud</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/select2/dist/css/select2.min.css">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse fixed"><?php foreach($da as $row){$buba= $row->author; }  ?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo base_url() ?>dashboard" class="logo">
      <span class="logo-mini"><b>D</b>Cen</span>
      <span class="logo-lg"><b>Document </b>Center</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">                            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>asett/dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo  $nama_admin ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>asett/dist/img/avatar04.png" class="img-circle" alt="User Image">
                <p><?php echo  $nama_admin ?></p>
              </li>
 
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">      
        <li>
          <a href="<?php echo base_url() ?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>        
        <!--inisialisasi hak ases-->
        <?php
         if($buba == 'admin'){
        ?> 
        <li>
          <a href="<?php echo base_url() ?>dashboard">
            <i class="fa fa-user-times"></i> <span>Reset Password</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>dashboard">
            <i class="fa fa-users"></i> <span>Users</span>
          </a>
        </li>
        <?php
          }
        ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
