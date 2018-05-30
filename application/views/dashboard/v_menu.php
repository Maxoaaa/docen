<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menu Pilihan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/font-awesome/css/font-awesome.min.css">  
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/dist/css/AdminLTE.css">s
</head>
<body class="hold-transition lockscreen" style="height:auto"><?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }  ?>
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo base_url() ?>menu">Selamat Datang	</a>
  </div>
  

  <div class="lockscreen-item" style="margin-bottom: 80px;">    
    <div class="lockscreen-image">     
    <i class="ikon"><span class="fa fa-home" aria-hidden="true"></span></i>
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
	   <a href="<?php echo base_url() ?>dashboard" type="button" name="button" class="btn btn-primary" role="button" style="background-color: black;width: 100%;height: 30px;line-height: 30px;">Dashboard</a> 
        

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted" style="height: 30px;line-height: 30px;"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  
  
  <div class="lockscreen-item" style="margin-bottom: 80px;">
    <div class="lockscreen-image">
      <i class="ikon"><span class="fa fa-plus" aria-hidden="true"></span></i>
    </div>
    <form class="lockscreen-credentials">
      <div class="input-group">
	   <a href="<?php echo base_url() ?>list/adddocument" type="button" name="button" class="btn btn-primary" role="button" style="background-color: black;width: 100%;height: 30px;line-height: 30px;">Tambah Data</a>         
        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted" style="height: 30px;line-height: 30px;"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  
  
  <div class="lockscreen-item" style="margin-bottom: 80px;">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <!--<img src="<?php echo base_url() ?>asett/dist/img/user1-128x128.jpg" alt="User Image">-->
      <i class="ikon"><span class="fa fa-search" aria-hidden="true"></span></i>
    </div>
    <!-- /.lockscreen-image -->
 
    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
	   <a href="<?php echo base_url() ?>search/page" type="button" name="button" class="btn btn-primary" role="button" style="background-color: black;width: 100%;height: 30px;line-height: 30px;">Pencarian</a> 
        

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted" style="height: 30px;line-height: 30px;"></i></button>
        </div>
      </div>
    </form>    
  </div>

  <?php
         if($buba == 'admin'){
        ?>         
        <div class="lockscreen-item" style="margin-bottom: 80px;">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <!--<img src="<?php echo base_url() ?>asett/dist/img/user1-128x128.jpg" alt="User Image">-->
      <i class="ikon"><span class="fa fa-users" aria-hidden="true"></span></i>
    </div>
    <!-- /.lockscreen-image -->
 
    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials">
      <div class="input-group">
	   <a href="<?php echo base_url() ?>search/page" type="button" name="button" class="btn btn-primary" role="button" style="background-color: black;width: 100%;height: 30px;line-height: 30px;">List User</a> 
        

        <div class="input-group-btn">
          <button type="button" class="btn"><i class="fa fa-arrow-right text-muted" style="height: 30px;line-height: 30px;"></i></button>
        </div>
      </div>
    </form>    
  </div>
        <?php
          }
        ?>
</div>

<script src="<?php echo base_url() ?>asett/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
