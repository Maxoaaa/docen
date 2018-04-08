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
                  if (($row->jenis_dokumen == "Formulir") && ($rowa1> 0) || ($row->jenis_dokumen == "Ijazah Dosen") && ($rowa2> 0) || ($row->jenis_dokumen == "Pedoman") && ($rowa3> 0)|| ($row->jenis_dokumen == "Sertifikat") && ($rowa4> 0)|| ($row->jenis_dokumen == "SK Pendirian PS") && ($rowa5> 0)|| ($row->jenis_dokumen == "SK Presiden") && ($rowa6> 0)|| ($row->jenis_dokumen == "SK Rektor") && ($rowa7> 0)|| ($row->jenis_dokumen == "SK Yayasan Pendidikan Jaya") && ($rowa8> 0)|| ($row->jenis_dokumen == "Surat Keputusan") && ($rowa9> 0)|| ($row->jenis_dokumen == "Surat Tugas") && ($rowa10> 0)) {
               ?>  
                  <div class="col-lg-3 col-xs-6">                  
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>
                        <?php if ($row->jenis_dokumen == "Formulir") {
                                  echo $rowa1;
                            }elseif ($row->jenis_dokumen == "Ijazah Dosen") {
                                  echo $rowa2;
                            }elseif ($row->jenis_dokumen == "Pedoman") {
                                  echo $rowa3;
                            }elseif ($row->jenis_dokumen == "Sertifikat") {
                                  echo $rowa4;
                            }elseif ($row->jenis_dokumen == "SK Pendirian PS") {
                                  echo $rowa5;
                            }elseif ($row->jenis_dokumen == "SK Presiden") {
                                  echo $rowa6;
                            }elseif ($row->jenis_dokumen == "SK Rektor") {
                                  echo $rowa7;
                            }elseif ($row->jenis_dokumen == "SK Yayasan Pendidikan Jaya") {
                                  echo $rowa8;
                            }elseif ($row->jenis_dokumen == "Surat Keputusan") {
                                  echo $rowa9;
                            }elseif ($row->jenis_dokumen == "Surat Tugas") {
                                  echo $rowa10;
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
