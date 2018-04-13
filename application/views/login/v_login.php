<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Data</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/dist/css/AdminLTE.css">
  <!--<link rel="stylesheet" href="<?php echo base_url() ?>asett/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asett/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>

<body class="hold-transition login-page" style="height: auto;">
<div class="login-box" style="margin-top: 50px;">
  <div class="login-logo">
    <a href="<?php echo base_url() ?>"><b>Document </b>Repository</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><img src="<?php echo base_url() ?>asett/dist/img/pict/logo_upj.png"></p>

    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <p style="color:red;text-align:center;"><?php echo $this->session->flashdata('notification')?></p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username / Email" name="username" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
         <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>-->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" value="Login">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


<!-- ==============LOGIN menggunakan Sosial Media ================ -->
    <!--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    

    <a href="#">Lupa Password</a><br>
    <a href="register.html" class="text-center">Daftar</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<script src="<?php echo base_url() ?>asett/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
