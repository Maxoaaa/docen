
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Document Information<?php foreach($da as $row){$buba= $row->author; } ?>
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">        
        <div class="col-xs-offset-9 col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
          <form action="<?php echo base_url('search'); ?>" method="get" class="form-group">
            <div class="input-group">
              <input type="text" name="q" class="form-control" value="" placeholder="Search..." required>
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kelengkapan Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Status</th>
                  <th>Pencapaian</th>
                  <th>label</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>  
                <?php
                  foreach($query as $row){
                ?>              
                <tr>
                  <td><?php echo $row->standar; ?></td>
                  <td><?php echo $row->status; ?></td>
                  <td>
                      <div class="progress">
                        <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        </div>
                      </div>                      
                  </td>
                  <td><span class="badge bg-light-blue  ">80%</span></td>
                  <td>
                    <a href="<?php echo base_url(); ?>list/viewdocument/index/<?php echo $row->standar; ?>" type="button" name="button" class="btn btn-primary" role="button">Detail</a> </td>
                </tr>
                
                <?php
                 }
                ?>
              </tbody>
                                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
