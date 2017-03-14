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
			<h1>Konfirmasi Pembayaran Pesanan <small></small></h1>
		</div>
			<ul id="myTab" class="nav nav-tabs">
				<li class="active"><a href="#konfir" data-toggle="tab">Konfirmasi Pesanan</a></li>
				<li><a href="#dikirim" data-toggle="tab">Pesanan Yang DI Proses</a></li>
			  </ul>
			  <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="konfir">
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
						foreach($konfir as $val){?>
					  <tbody>
						<tr>
						  <td><?php echo $val->kode_pesanan;?></td>
						  <td><?php echo $val->qty;?></td>
						  <td><?php echo $val->produk;?></td>
						  <td><?php echo 'Rp.'.number_format($val->hrg_satuan);?></td>
						  <td><?php $jml=$val->hrg_satuan*$val->qty; echo 'Rp.'.number_format($jml);?></td>
						  <td><?php $tgl=date_create($val->tgl); echo date_format($tgl, "M d");?></td>
						  <td><a href="#" data-toggle="modal" data-target="#proses<?php echo $val->id;?>">Proses</a></td>
						</tr>
					  </tbody>
					  <!-- Modal Pembatalan-->
						<div class="modal fade" id="proses<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								  <form action="<?php echo site_url('admin/Proses/'.$val->id);?>" method="POST">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
									<input type="submit" class="btn btn-primary" name="submit" value="Proses Pesanan">
								  </form>
								</div>
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
				<div class="tab-pane fade" id="dikirim">
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
						</tr>
					  </thead>
					  <?php 
						$tk=0;
						foreach($proses as $val2){?>
					  <tbody>
						<tr>
						  <td><?php echo $val2->kode_pesanan;?></td>
						  <td><?php echo $val2->qty;?></td>
						  <td><?php echo $val2->produk;?></td>
						  <td><?php echo 'Rp.'.number_format($val2->hrg_satuan);?></td>
						  <td><?php $jml=$val2->hrg_satuan*$val2->qty; echo 'Rp.'.number_format($jml);?></td>
						  <td><?php $tgl=date_create($val2->tgl); echo date_format($tgl, "M d");?></td>
						  <td><a href="#" data-toggle="modal" data-target="#selesai<?php echo $val2->id;?>">Selesai</a></td>
						</tr>
					  </tbody>
					  <!-- Modal Pembatalan-->
						<div class="modal fade" id="selesai<?php echo $val2->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel">Pesanan <?php echo $val->produk;?></h4>
								</div>
								<div class="modal-body">
									<p>Apakah Pesanan Ini Telah Selesai Di Proses ?"</p>
								</div>
								<div class="modal-footer">
								  <form action="<?php echo site_url('admin/Proses/'.$val->id);?>" method="POST">
									<input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
									<input type="submit" class="btn btn-primary" name="submit" value="Ya, Pesanan Selesai">
								  </form>
								</div>
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

			</div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
	<script src="<?php echo base_url('assets/theme/bootstrap');?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/docs.min.js"></script>
  </body>
</html>
