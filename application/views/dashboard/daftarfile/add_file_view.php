
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input atau Edit Data
        <small>Prodi Informatika</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li><a href="<?php echo base_url() ?>list/viewdocument"> Detail</a></li> 
        <li class="active"> Tambah</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-xs-12 ">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Penambahan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('dashboard'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama dan No. Surat</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="no_surat" id="no_Surat" placeholder="Nomor"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelompok Dokumen</label>
                  <div class="col-sm-6">                    
                    <select class="form-control selecto" style="width: 100%;" multiple="multiple" data-placeholder="Pilih Standar">
                      <option>Standar 1</option>
                      <option>Standar 2</option>
                      <option>Standar 3</option>
                      <option>Standar 4</option>
                      <option>Standar 5</option>
                      <option>Standar 6</option>
                      <option>Standar 7</option>
                      <option>Standar 8</option>
                      <option>Standar 9</option>
                    </select>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Dokumen</label>
                  <div class="col-sm-6">                 
                    <select class="form-control selecto" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen">
                      <option>Surat Keputusan</option>
                      <option>Surat Tata Pamong</option>
                      <option>Surat kemahasiswaan</option>
                      <option>Surat keterangan</option>
                      <option>Kurikulum</option>
                      <option>Anggaran Biaya</option>
                      <option>Surat Tugas</option>
                      <option>Pengmas</option>
                      <option>Capaian Luaran</option>
                    </select>
                  </div>
                </div><!--               
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Belaku</label>
                  <div class="col-sm-6">                    
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Standar</label>
                  <div class="col-sm-6">                    
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">1
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">2
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">3
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">4
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">5
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">6
                    </div>
                    <div class="col-sm-1">
                      <input type="checkbox" class="minimal">7
                    </div>                    
                  </div>
                </div>-->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pilih File*</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" name="Upload" id="exampleInputFile" required />                    
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">                
                <a href="<?php echo base_url() ?>dashboard" class="btn btn-info btn-md">Batal</a>
                <!--<a href="<?php echo base_url() ?>dashboard/viewdocument" class="btn btn-info btn-md pull-right" type="submit">Upload</a>-->
                <button type="submit" class="btn btn-info btn-md pull-right" value="upload">Upload</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
