  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        Dokumen Standar <?php echo $natalo ?>
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li class="active">Jenis Dokumen</li>
      </ol> 
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="margin-bottom: 5px;"> 
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"></div>
        <div class="col-xs-12">
          <div class="box">            
            <div class="box-body">
              <div class="row">                
               <?php
                foreach($query_tampil2 as $row){
                  foreach($jumlah_dok1 as $rowa){$rowa1= $rowa->ma;}
                  foreach($jumlah_dok2 as $rowa){$rowa2= $rowa->ma;}
                  foreach($jumlah_dok3 as $rowa){$rowa3= $rowa->ma;}
                  foreach($jumlah_dok4 as $rowa){$rowa4= $rowa->ma;}
                  foreach($jumlah_dok5 as $rowa){$rowa5= $rowa->ma;}
                  foreach($jumlah_dok6 as $rowa){$rowa6= $rowa->ma;}
                  foreach($jumlah_dok7 as $rowa){$rowa7= $rowa->ma;}
                  foreach($jumlah_dok8 as $rowa){$rowa8= $rowa->ma;}
                  foreach($jumlah_dok9 as $rowa){$rowa9= $rowa->ma;}
                  foreach($jumlah_dok10 as $rowa){$rowa10= $rowa->ma;}
                  foreach($jumlah_dok11 as $rowa){$rowa11= $rowa->ma;}
                  foreach($jumlah_dok12 as $rowa){$rowa12= $rowa->ma;}
                  foreach($jumlah_dok13 as $rowa){$rowa13= $rowa->ma;}
                  foreach($jumlah_dok14 as $rowa){$rowa14= $rowa->ma;}
                  foreach($jumlah_dok15 as $rowa){$rowa15= $rowa->ma;}
                  foreach($jumlah_dok16 as $rowa){$rowa16= $rowa->ma;}
                  foreach($jumlah_dok17 as $rowa){$rowa17= $rowa->ma;}
                  foreach($jumlah_dok18 as $rowa){$rowa18= $rowa->ma;}
                  foreach($jumlah_dok19 as $rowa){$rowa19= $rowa->ma;}
                  foreach($jumlah_dok20 as $rowa){$rowa20= $rowa->ma;}
                  if ((($row->id_jenis_dokumen == 1) && ($rowa1> 0))||(($row->id_jenis_dokumen == 2) && ($rowa2> 0)) ||(($row->id_jenis_dokumen == 3) && ($rowa3> 0)) ||(($row->id_jenis_dokumen == 4) && ($rowa4> 0)) ||(($row->id_jenis_dokumen == 5) && ($rowa5> 0)) ||(($row->id_jenis_dokumen == 6) && ($rowa6> 0)) ||(($row->id_jenis_dokumen == 7) && ($rowa7> 0)) ||(($row->id_jenis_dokumen == 8) && ($rowa8> 0)) ||(($row->id_jenis_dokumen == 9) && ($rowa9> 0)) ||(($row->id_jenis_dokumen == 10) && ($rowa10> 0)) ||(($row->id_jenis_dokumen == 11) && ($rowa11> 0)) ||(($row->id_jenis_dokumen == 12) && ($rowa12> 0)) ||(($row->id_jenis_dokumen == 13) && ($rowa13> 0)) ||(($row->id_jenis_dokumen == 14) && ($rowa14> 0)) ||(($row->id_jenis_dokumen == 15) && ($rowa15> 0)) ||(($row->id_jenis_dokumen == 16) && ($rowa16> 0)) ||(($row->id_jenis_dokumen == 17) && ($rowa17> 0)) ||(($row->id_jenis_dokumen == 18) && ($rowa18> 0)) ||(($row->id_jenis_dokumen == 19) && ($rowa19> 0)) ||(($row->id_jenis_dokumen == 20) && ($rowa20> 0))  ) {
               ?>  
                  <div class="col-lg-3 col-xs-6">                  
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>
                        <?php if ($row->id_jenis_dokumen == 1) {
                                  echo $rowa1;
                            }elseif ($row->id_jenis_dokumen == 2) {
                                  echo $rowa2;
                            }elseif ($row->id_jenis_dokumen == 3) {
                                  echo $rowa3;
                            }elseif ($row->id_jenis_dokumen == 4) {
                                  echo $rowa4;
                            }elseif ($row->id_jenis_dokumen == 5) {
                                  echo $rowa5;
                            }elseif ($row->id_jenis_dokumen == 6) {
                                  echo $rowa6;
                            }elseif ($row->id_jenis_dokumen == 7) {
                                  echo $rowa7;
                            }elseif ($row->id_jenis_dokumen == 8) {
                                  echo $rowa8;
                            }elseif ($row->id_jenis_dokumen == 9) {
                                  echo $rowa9;
                            }elseif ($row->id_jenis_dokumen == 10) {
                                  echo $rowa10;
                            }elseif ($row->id_jenis_dokumen == 11) {
                                  echo $rowa11;
                            }elseif ($row->id_jenis_dokumen == 12) {
                                  echo $rowa12;
                            }elseif ($row->id_jenis_dokumen == 13) {
                                  echo $rowa13;
                            }elseif ($row->id_jenis_dokumen == 14) {
                                  echo $rowa14;
                            }elseif ($row->id_jenis_dokumen == 15) {
                                  echo $rowa15;
                            }elseif ($row->id_jenis_dokumen == 16) {
                                  echo $rowa16;
                            }elseif ($row->id_jenis_dokumen == 17) {
                                  echo $rowa17;
                            }elseif ($row->id_jenis_dokumen == 18) {
                                  echo $rowa18;
                            }elseif ($row->id_jenis_dokumen == 19) {
                                  echo $rowa19;
                            }elseif ($row->id_jenis_dokumen == 20) {
                                  echo $rowa20;
                            } 
                        ?>                          
                        </h3>

                        <p><?php echo $row->jenis_dokumen; ?></p> 
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="<?php echo base_url(); ?>list/viewdocument/dokudoku/<?php echo $natalo; ?>/<?php echo $row->jenis_dokumen; ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>                  
               <?php
                  }
                }
               ?>      
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
