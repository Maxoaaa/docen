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

    <section class="content">
      <div class="row">  
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
        <a href="<?php echo base_url() ?>list/AddDocument" class="btn btn-success"><span class="glyphicon glyphicon-plus">Tambah</span></a>                  
      </div>      
        <div class="col-xs-offset-3 col-sm-offset-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
          <form action="<?php echo base_url();?>search" method="get" class="form-group"> 
            <div class="input-group">
              <input type="text" name="q" class="form-control" id="title" value="" placeholder="Search..." required>
                  <span class="input-group-btn">
                    <button type="submit" name="cari" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
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
                      <div class="progress pull-left" style="width: 82%;">
                        <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="<?php 
                        if ($row->standar == 1) {
                          foreach($capai1 as $rowe){$rowe=$rowe->ma/100*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 2) {
                          foreach($capai2 as $rowe){$rowe=$rowe->ma/129*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 3) {
                          foreach($capai3 as $rowe){$rowe=$rowe->ma/10*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 4) {
                          foreach($capai4 as $rowe){$rowe=$rowe->ma/27*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 5) {
                          foreach($capai5 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 6) {
                          foreach($capai6 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 7) {
                          foreach($capai7 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 8) {
                          foreach($capai8 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 9) {
                          foreach($capai9 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        } 
                   ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php 
                        if ($row->standar == 1) {
                          foreach($capai1 as $rowe){$rowe=$rowe->ma/100*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 2) {
                          foreach($capai2 as $rowe){$rowe=$rowe->ma/129*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 3) {
                          foreach($capai3 as $rowe){$rowe=$rowe->ma/10*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 4) {
                          foreach($capai4 as $rowe){$rowe=$rowe->ma/27*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 5) {
                          foreach($capai5 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 6) {
                          foreach($capai6 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 7) {
                          foreach($capai7 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 8) {
                          foreach($capai8 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 9) {
                          foreach($capai9 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        } 
                   ?>%">
                        </div>
                      </div> 
                      <span class="badge bg-light-blue pull-right"><?php 
                        if ($row->standar == 1) {
                          foreach($capai1 as $rowe){$rowe=$rowe->ma/100*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 2) {
                          foreach($capai2 as $rowe){$rowe=$rowe->ma/129*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 3) {
                          foreach($capai3 as $rowe){$rowe=$rowe->ma/10*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 4) {
                          foreach($capai4 as $rowe){$rowe=$rowe->ma/27*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 5) {
                          foreach($capai5 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 6) {
                          foreach($capai6 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 7) {
                          foreach($capai7 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 8) {
                          foreach($capai8 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        }elseif ($row->standar == 9) {
                          foreach($capai9 as $rowe){$rowe=$rowe->ma/30*100;$rowe1= number_format($rowe,2);echo $rowe1;}
                        } 
                   ?>%</span>                      
                  </td>
                  <td>
                   <?php 
                        if ($row->standar == 1) {
                          foreach($capai1 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 2) {
                          foreach($capai2 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 3) {
                          foreach($capai3 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 4) {
                          foreach($capai4 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 5) {
                          foreach($capai5 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 6) {
                          foreach($capai6 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 7) {
                          foreach($capai7 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 8) {
                          foreach($capai8 as $rowe){echo $rowe->ma; }
                        }elseif ($row->standar == 9) {
                          foreach($capai9 as $rowe){echo $rowe->ma; }
                        }
                   ?>/ <?php  
                   if ($row->standar == 1) {
                          echo 100;
                        }elseif ($row->standar == 2) {
                          echo 129;
                        }elseif ($row->standar == 3) {
                          echo 10;
                        }elseif ($row->standar == 4) {
                          echo 29;
                        }elseif ($row->standar == 5) {
                          echo 30;
                        }elseif ($row->standar == 6) {
                          echo 30;
                        }elseif ($row->standar == 7) {
                          echo 30;
                        }elseif ($row->standar == 8) {
                          echo 30;
                        }elseif ($row->standar == 9) {
                          echo 30;
                        }?>
                 </td>
                  <td>
                  <!--<td><span class="badge bg-light-blue  "><?php foreach($capai as $rowe){echo $rowe->ma;} ?>%</span></td>
                  <td>-->
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
