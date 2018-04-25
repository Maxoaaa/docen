  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        List Pengguna Informatika
        <small>Prodi Informatika</small> 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active"> Pengguna</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
          <a type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah">
          <span class="glyphicon glyphicon-plus">Tambah</span></a>
        </div>      
        <p><?php echo $this->session->flashdata('notification_password')?></p>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
        <div class="col-xs-12">
          <div class="box">            
            <div class="box-body">
  
              <table id="exampleuser" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Author</th>
                  <th>Hak Akses</th>
                  <th>Aksi</th>                  
                </tr>
                </thead>
                <tbody> 
                <?php  $no=1;
                  foreach($query as $row){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->author; ?></td>
                  <td><?php echo $row->hak_akses; ?></td>
                  <td>
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit<?php echo $row->id;?>">Edit</a>
                  <a href="<?php echo base_url(); ?>pengguna/users/deleteuser/<?php echo $row->id; ?>" type="button" name="button" class="btn btn-primary" role="button">Hapus</a></td>
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
        <div class="modal fade" id="modal-tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lihat Data Pengguna</h4>
              </div>
              <div class="modal-body">
                
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">            
                        <div class="box-body">
              
                          <?php
                          $atribut = array(
                              'class' => 'form-horizontal',
                              'id'=>'formuser'
                          );
                            echo form_open('pengguna/users/saveuser',$atribut);
                        ?>
                          <div class="form-group">
                              <label for="username" class="col-sm-3 control-label">Username</label>
                              <div class="col-sm-9">
                                  <input id="username" class="form-control" type="text" name="username" placeholder="Masukan Username" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="password" class="col-sm-3 control-label">Email</label>
                              <div class="col-sm-9">
                                  <input id="email" class="form-control" type="email" name="email" placeholder="Masukan Email" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password" class="col-sm-3 control-label">Password</label>
                              <div class="col-sm-9">
                                  <input id="password" class="form-control" type="password" name="password" placeholder="Masukan Password" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="nama" class="col-sm-3 control-label">Konfirmasi Password</label>
                              <div class="col-sm-9">
                                  <input id="cpassword" class="form-control" type="password" name="cpassword" placeholder="Masukan Password" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="nama" class="col-sm-3 control-label">Hak Akses</label>
                              <div class="col-sm-9">                      
                                  <select class="form-control" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="authorisasi">
                                    <?php
                                      foreach($query_author as $op){
                                    ?>  
                                    <option>
                                      <?php echo $op->author;?>
                                    </option>                      
                                    <?php
                                       }
                                    ?>   
                                </select>
                              </div>
                          </div>                          
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">
              </div>
              <?php
                echo form_close();
              ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
                  <?php
                       foreach ($query as $rou) {
                           
                 ?>
        
         <div class="modal fade" id="modal-edit<?php echo $rou->id;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data Pengguna</h4>
              </div>
              <div class="modal-body">                
                <section class="content">
                  <div class="row">                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-body">
                          <?php
                            $atribut = array(
                                  'class' => 'form-horizontal',
                                  'id'=>'formuser'
                            );
                               echo form_open('pengguna/users/saveupdateuser',$atribut);
                               echo form_hidden('id',$rou->id);
                         ?>
                          <div class="form-group">
                              <label for="username" class="col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input id="username" class="form-control" type="text" name="username" placeholder="Masukan Username" value="<?php echo $rou->username; ?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input id="email" class="form-control" type="email" name="email" placeholder="Masukan Email"  value="<?php echo $rou->email; ?>" required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input id="password" class="form-control" type="password" name="password" placeholder="Masukan Password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="nama" class="col-sm-2 control-label">Konfirmasi Password</label>
                              <div class="col-sm-10">
                                  <input id="cpassword" class="form-control" type="password" name="cpassword" placeholder="Masukan Password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="nama" class="col-sm-2 control-label">Hak Akses</label>
                              <div class="col-sm-10">                      
                                  <select class="form-control" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="authorisasi">
                                  <?php
                                    foreach($query_author as $op){
                                  ?>  
                                  <option <?php if (($rou->author =='dosen') && ($op->author=='dosen')) {
                                      echo 'selected'; 
                                    }elseif (($rou->author =='admin') && ($op->author=='admin')) {
                                      echo 'selected'; 
                                    }
                                    echo '>'.$op->author;
                                    ?>
                                  </option>                      
                                  <?php
                                     }
                                  ?>   
                                </select>
                              </div>
                          </div>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">
              </div>
              <?php
                echo form_close();
              ?>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
          
           <?php
              }              
           ?>