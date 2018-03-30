  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        Pencarian
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"> Search</li>
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
                  <th>Standar 1</th>
                  <th>Standar 2</th>
                  <th>Standar 3</th>
                  <th>Standar 4</th>
                  <th>Standar 5</th>
                  <th>Standar 6</th>
                  <th>Standar 7</th>
                  <th>Standar 8</th>
                  <th>Standar 9</th>
                </tr>
                </thead>
                <tbody> 
                <?php  $no = 1;                        
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
