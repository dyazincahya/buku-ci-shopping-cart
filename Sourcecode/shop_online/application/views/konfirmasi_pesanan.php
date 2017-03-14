<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/theme/bootstrap');?>/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/theme/bootstrap');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/theme/bootstrap');?>/dashboard.css" rel="stylesheet">
	
  <!--dropzone-->
  <link href="<?php echo base_url('assets/myjs/dropzone'); ?>/css/dropzone.css" type="text/css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php $this->load->view('adm_navbar');?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <div class="page-header">
			<h1>Konfirmasi Pembayaran <small>Pesanan Anda</small></h1>
		  </div>

		  <ul id="myTab" class="nav nav-tabs">
			<li class="active"><a href="#belum" data-toggle="tab">Pesanan Belum Dikonfirmasi</a></li>
			<li><a href="#sudah" data-toggle="tab">Pesanan Sudah Dikonfirmasi</a></li>
		  </ul>
		  <div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="belum">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
							  <th>#Kode</th>
							  <th>#Kuantitas</th>
							  <th>#Nama</th>
							  <th>#Harga Per Satuan</th>
							  <th>#Subtotal</th>
							  <th>#Tanggal</th>
							  <th>...</th>
							</tr>
						</thead>
						  <?php 
							$tk=0;
							foreach($list as $val){?>
						  <tbody>
							<tr>
							  <td><?php echo $val->kode_pesanan;?></td>
							  <td><?php echo $val->qty;?></td>
							  <td><?php echo $val->produk;?></td>
							  <td><?php echo 'Rp.'.number_format($val->hrg_satuan);?></td>
							  <td><?php $jml=$val->hrg_satuan*$val->qty; echo 'Rp.'.number_format($jml);?></td>
							  <td><?php $tgl=date_create($val->tgl); echo date_format($tgl, "M d");?></td>
							  <td>
								<a href="#" data-toggle="modal" data-target="#konfirmasi<?php echo $val->id;?>">Konfirmasi</a>
							  </td>
							</tr>
						</tbody>
						<!-- Modal Pembatalan-->
						<div class="modal fade" id="konfirmasi<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<?php echo form_open_multipart('konfirmasi_pesanan/img_upload/'.$val->id); ?>
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel">Konfirmasi Pembayaran Pesanan <?php echo $val->produk;?></h4>
								</div>
								<div class="modal-body">
										<h5>Lampirkan bukti transfer dalam bentuk gambar JPG,JPEG,PNG atau GIF, max 2MB.</h5>
										<input type="hidden" name="id_pesanan" value="<?php echo $val->id;?>">
										<fieldset>
										<legend>Di Transfer Kemana ?</legend>
											<select name="IDbank" class="form-control">
												<option value="">-Pilih Bank-</option>
												<?php foreach($bank as $l){?>
													<option value="<?php echo $l->id;?>"><?php echo $l->namaBank;?> - <?php echo $l->noRekening;?></option>
												<?php } ?>
											</select>
										</fieldset>
										<fieldset>
										<legend>Di Transfer Dari Mana ?</legend>
										<div class="row">
										  <div class="col-xs-6 col-sm-4">
											<input type="text" name="anBank" class="form-control" placeholder="A/N">
										  </div>
										  <div class="col-xs-6 col-sm-4">
											<input type="text" name="nmBank" class="form-control" placeholder="Nama Bank">
										  </div>
										  <div class="col-xs-6 col-sm-4">
											<input type="text" name="nrBank" class="form-control" placeholder="No Rekening">
										  </div>
										</div>
										</fieldset>
										<fieldset>
										<legend>Lampiran &amp; Keterangan</legend>
										<input type="file" name="userfile" class="form-control">
										<textarea class="form-control" name="ket" placeholder="Keterangan (Optional)"></textarea>
										</fieldset>
									</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
									<input type="submit" class='btn btn-primary' name="upload" value="Konfirmasi">
								</div>
								<?php echo form_close();?> 
							  </div>
							</div>
						</div>
						  <?php 
							$tk+=$jml;
							} 
						  ?>
						<tbody>
							<tr>
								<td colspan="4"><b>Total Keseluruhan</b></td>
								<td colspan="2" align="center"><b><?php echo 'Rp.'.number_format($tk);?></b></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade" id="sudah">
			  <div class="table-responsive">
				<table class="table table-striped">
				  <thead>
					<tr>
						<th>#Kode</th>
						<th>#Kuantitas</th>
						<th>#Nama</th>
						<th>#Harga Per Satuan</th>
						<th>#Subtotal</th>
						<th>#Tanggal</th>
						<th>...</th>
					</tr>
				  </thead>
					<?php 
					$ttl=0;
					foreach($konfir as $val){?>
					  <tbody>
						<tr>
							<td><?php echo $val->kode_pesanan;?></td>
							<td><?php echo $val->qty;?></td>
							<td><?php echo $val->produk;?></td>
							<td><?php echo 'Rp.'.number_format($val->hrg_satuan);?></td>
							<td><?php $j=$val->hrg_satuan*$val->qty; echo 'Rp.'.number_format($j);?></td>
							<td><?php $tgl=date_create($val->tgl); echo date_format($tgl, "M d");?></td>
							<td>
							  <a href="#" data-toggle="modal" data-target="#detail<?php echo $val->id;?>">Detail</a>
							</td>
						</tr>
					  </tbody>
						<!-- Modal Pembatalan-->
						<div class="modal fade" id="detail<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel">Detail Konfirmasi Pesanan <?php echo $val->produk;?></h4>
								</div>
								<div class="modal-body">
									<p><span class="glyphicon glyphicon-time"></span> <?php echo $val->tgl;?></p>
									<p><span class="glyphicon glyphicon-transfer"></span> Ditransfer Ke Bank :</p>
									<p>
										<b>A/N : </b><?php echo $val->ANBANK;?> | 
										<b>BANK : </b><?php echo $val->namaBank;?> | 
										<b>NO.REKENING : </b><?php echo $val->noRekening;?>
									</p>
									
									<p><span class="glyphicon glyphicon-transfer"></span> Ditransfer Dari Bank :</p>
									<p>
										<b>A/N : </b><?php echo $val->ANBank;?> | 
										<b>BANK : </b><?php echo $val->NMBank;?> | 
										<b>NO.REKENING : </b><?php echo $val->NRBank;?>
									</p>
										
									<p><a href="<?php echo base_url()."assets/uploads/img";?>/<?php echo $val->bukti;?>" target="_blank"><span class="glyphicon glyphicon-picture"></span> Lihat Gambar</a></p>
									<p><b><span class="glyphicon glyphicon-comment"></span>  Keterangan :</b>
									" <?php echo $val->ket;?> "</p>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
								</div>
							  </div>
							</div>
						</div>
						  <?php 
							$ttl+=$j;
							} 
						  ?>
						<tbody>
							<tr>
								<td colspan="4"><b>Total Keseluruhan</b></td>
								<td colspan="2" align="center"><b><?php echo 'Rp.'.number_format($ttl);?></b></td>
							</tr>
						</tbody>
				</table>
			  </div>
			</div>
		  </div>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/jquery.min.js"></script>
	
	<!--Dropzone--->
	<script src="<?php echo base_url('assets/myjs/dropzone'); ?>/dropzone.js"></script>
	<script>
		  // myDropzone is the configuration for the element that has an id attribute
			  // with the value my-dropzone (or myDropzone)
			  Dropzone.options.myDropzone = {
				autoProcessQueue: false,
				init: function() {
					var submitButton = document.querySelector("#submit-all")
					myDropzone = this; // closure

					submitButton.addEventListener("click", function() {
						myDropzone.processQueue(); // Tell Dropzone to process all queued files.
					});
					myDropzone.on("complete", function(file) {
						myDropzone.removeFile(file);
					});
				  this.on("addedfile", function(file) {
					//alert("Added file.");
					// Create the remove button
					var removeButton = Dropzone.createElement("<button type='button' class='btn btn-xs btn-primary'><i class='fa fa-times'></i> Remove</button>");

					// Capture the Dropzone instance as closure.
					var _this = this;

					// Listen to the click event
					removeButton.addEventListener("click", function(e) {
					  // Make sure the button click doesn't submit the form:
					  e.preventDefault();
					  e.stopPropagation();

					  // Remove the file preview.
					  _this.removeFile(file);
					  // If you want to the delete the file on the server as well,
					  // you can do the AJAX request here.
					});

					// Add the button to the file preview element.
					file.previewElement.appendChild(removeButton);
				  });
				}
			  };
			</script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/docs.min.js"></script>
  </body>
</html>
