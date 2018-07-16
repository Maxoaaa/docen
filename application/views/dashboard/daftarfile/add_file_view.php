 
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
						<?php
							$atribut = array(
									'class' => 'form-horizontal',
									'id'=>'formuser'
							);
								//echo form_open('list/adddocument/savedok',$atribut);
								echo form_open_multipart('list/adddocument/savedok',$atribut);
						?>
							<div class="box-body">
								<div class="form-group">
									<label class="col-sm-2 control-label">No. Dokumen</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="no_surat" id="no_Surat" placeholder="Nomor"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Nama Dokumen</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama_surat" id="nama_Surat" placeholder="Nama"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Kelompok Dokumen</label>
									<div class="col-sm-6">                    
										<select class="form-control selecto" style="width: 100%;" multiple="multiple" data-placeholder="Pilih Standar" name="kelompok[]">
											<option value="1">Standar 1</option>
											<option value="2">Standar 2</option>
											<option value="3">Standar 3</option>
											<option value="4">Standar 4</option>
											<option value="5">Standar 5</option>
											<option value="6">Standar 6</option>
											<option value="7">Standar 7</option>
											<option value="8">Standar 8</option>
											<option value="9">Standar 9</option>
										</select>
									</div>
								</div> 
								<div class="form-group">
									<label class="col-sm-2 control-label">Jenis Dokumen</label>
									<div class="col-sm-6">                 
										<select class="form-control selecto" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="jenis">
											<?php 
												foreach($query_tampil as $row){
											?>  
											<option><?php echo $row->jenis_dokumen; ?></option>                      
											<?php
												 }
											?>                    
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Authorisasi</label>
									<div class="col-sm-6">                 
										<select class="form-control" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="authorisasi">
											<?php
												foreach($query_tampil2 as $row){
											?>  
											<option><?php echo $row->author; ?></option>                      
											<?php
												 }
											?>   
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
										<input type="file" class="form-control" name="filepdf" id="exampleInputFile" accept="application/pdf" required />                    
									</div>
								</div>                
							</div>
							<!-- /.box-body -->
							<div class="box-footer">                
								<a href="<?php echo base_url() ?>dashboard" class="btn btn-warning btn-md"><i class="fa fa-arrow-left"></i> Batal</a>
								<button type="submit" class="btn btn-info btn-md" name="btnUpload" value="Upload">Upload</button>
							</div>
							<!-- /.box-footer -->
						<?php
								echo form_close();
							?>
					</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>

	</div>
	<!-- /.content-wrapper -->
