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
                  <th>Aksi</th>
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
                  <td><?php if ($row->standar == '1'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '2'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '3'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '4'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '5'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '6'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '7'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '8'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td><?php if ($row->standar == '9'){
                    echo '<input type="checkbox" class="minimal" checked>';
                    }else{echo '<input type="checkbox" class="minimal" disabled>';}
                    ?></td>
                  <td>
                  <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default<?php echo $row->dokumen_id;?>">
                        Lihat
                  </button>
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
                       foreach ($list_pencarian as $rou) {
                           
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