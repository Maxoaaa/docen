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
  
              <table id="example4_search" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dokumen</th>
                  <th>Jenis Dokumen</th>
                  <th>Std 1</th>
                  <th>Std 2</th>
                  <th>Std 3</th>
                  <th>Std 4</th>
                  <th>Std 5</th>
                  <th>Std 6</th>
                  <th>Std 7</th>
                  <th>Std 8</th>
                  <th>Std 9</th>
                </tr>
                </thead>
                <tbody> 
                <?php  $no = 1;
                  foreach($list_pencarian as $row){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row->nama_dok; ?></td>
                  <td><?php echo $row->jenis_dok; ?></td>
                  <td>
                    
                    <input type="checkbox" class="minimal" checked ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>
                  <td><input type="checkbox" class="minimal" <?php if($ceklis){echo 'checked';} ?> disabled ></td>                  
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
