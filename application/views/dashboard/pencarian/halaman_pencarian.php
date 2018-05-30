<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>       
        <li class="active">Search Page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="text-align: center;">

      <div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>search/page"><b>Pencarian</b>File</a>
  </div>
  <!-- /.login-logo --> 
  <div class="login-box-body">   

    <form action="<?php echo base_url();?>search" method="get">
      <div class="form-group has-feedback">        
        <input type="text" name="q" class="form-control" id="title" value="" placeholder="Cari File..." required>
        <span class="fa fa-search form-control-feedback"></span>
      </div>      
      <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">          
          <button type="submit" name="cari" id="search-btn" class="btn btn-primary" style="width: 100%">Cari </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->