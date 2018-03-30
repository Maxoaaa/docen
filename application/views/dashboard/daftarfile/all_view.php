  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        Keseluruhan Dokumen Standar
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"> Semua Data</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
        <div class="col-xs-12">
          <div class="box">            
            <div class="box-body">
                                          
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Dokumen</th>
                  <th>Jenis Dokumen</th>
                  <th>No. Surat</th>
                  <th>Tanggal Belaku</th>
                  <th>Tanggal Expired</th>
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
                  <td><?php echo $row->nama_dok; ?></td>
                  <td><?php echo $row->jenis_dok; ?></td>
                  <td><?php echo $row->no_surat; ?></td>
                  <td><?php echo $row->tgl_belaku; ?></td>
                  <td><?php echo $row->tgl_expired; ?></td>
                  <td><button type="button" class="btn btn-block btn-info">Lihat</button></td>                  
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
