 <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        Dokumen Standar <?php echo $natalo ?>
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> <li><a href="<?php echo base_url() ?>list/viewdocument/index/<?php echo $natalo; ?>"">Jenis Dokumen</a></li>
        <li class="active"> Detail</li>
      </ol>
    </section>
 
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="margin-bottom: 5px;">
            <div class="btn-group">
              <a href="<?php echo base_url() ?>list/AddDocument" class="btn btn-success"><span class="glyphicon glyphicon-plus">Tambah</span></a>    
              <!--<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>-->
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url() ?>list/AddDocument" class="btn btn-default"><span class="glyphicon glyphicon-edit" style="color:white align:left;">Edit</span></a></li>        
              </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
        <div class="col-xs-12">
          <div class="box">            
            <div class="box-body">                                         
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Surat</th>
                  <th>Nama Dokumen</th>
                  <th>Jenis Dokumen</th>                    
                  <th>Authorisasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;                
                  foreach($query as $row){
                ?>            
                <tr>                  
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->no_surat; ?></td>
                  <td><?php echo $row->nama_dok; ?></td>
                  <td><?php echo $row->jenis_dok; ?></td>
                  <td><?php echo $row->author; ?></td>                                      
                  <td>
                    <div style="margin: 0 5px; float: left;">
                      <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default<?php echo $row->dokumen_id;?>">
                        Lihat
                      </button>
                    </div>
                    <div style="margin: 0 5px; float: left;">
                      <a href="<?php echo base_url().'fileupload/'.$row->file  ?>"  target="_blank">
                        <button type="button" class="btn btn-block btn-info">Unduh</button>
                      </a>
                    </div>  
 
                                     
                  </td>                  
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
                  <?php
                       foreach ($query as $rou) {
                           
                 ?>
        <div class="modal fade" id="modal-default<?php echo $rou->dokumen_id;?>">
          <div class="modal-dialog" style="width: 100%;">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lihat File</h4>
              </div>
              <div class="modal-body" style="height: 650px;">               
                <object data="<?php echo base_url().'fileupload/'.$rou->file;?>" type="application/pdf" style="width: 100%; height: 100%;">                       
                </object>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>                
                <a href="<?php echo base_url().'fileupload/'.$rou->file;?>" target="_blank"><button type="button" class="btn btn-primary">Unduh</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
              <?php
                }
              ?>  