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
			<h1>Daftar Pesanan <small></small></h1>
		</div>
			<ul id="myTab" class="nav nav-tabs">
				<li class="active"><a href="#baru" data-toggle="tab">Pesanan Baru</a></li>
				<li><a href="#dikirim" data-toggle="tab">Pesanan Yang DI Proses</a></li>
				<li><a href="#selesai" data-toggle="tab">Pesanan Yang Sudah Selesai</a></li>
			  </ul>
			  <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="baru">
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
						foreach($baru as $val2){?>
					  <tbody>
						<tr>
						  <td><?php echo $val2->kode_pesanan;?></td>
						  <td><?php echo $val2->qty;?></td>
						  <td><?php echo $val2->produk;?></td>
						  <td><?php echo 'Rp.'.number_format($val2->hrg_satuan);?></td>
						  <td><?php $jml=$val2->hrg_satuan*$val2->qty; echo 'Rp.'.number_format($jml);?></td>
						  <td><?php $tgl=date_create($val2->tgl); echo date_format($tgl, "M d");?></td>
						</tr>
					  </tbody>
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
						foreach($dikirim as $val3){?>
					  <tbody>
						<tr>
						  <td><?php echo $val3->kode_pesanan;?></td>
						  <td><?php echo $val3->qty;?></td>
						  <td><?php echo $val3->produk;?></td>
						  <td><?php echo 'Rp.'.number_format($val3->hrg_satuan);?></td>
						  <td><?php $jml=$val3->hrg_satuan*$val3->qty; echo 'Rp.'.number_format($jml);?></td>
						  <td><?php $tgl=date_create($val3->tgl); echo date_format($tgl, "M d");?></td>
						</tr>
					  </tbody>
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
				<div class="tab-pane fade" id="selesai">
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
						foreach($selesai as $val4){?>
					  <tbody>
						<tr>
						  <td><?php echo $val4->kode_pesanan;?></td>
						  <td><?php echo $val4->qty;?></td>
						  <td><?php echo $val4->produk;?></td>
						  <td><?php echo 'Rp.'.number_format($val4->hrg_satuan);?></td>
						  <td><?php $jml=$val4->hrg_satuan*$val4->qty; echo 'Rp.'.number_format($jml);?></td>
						  <td><?php $tgl=date_create($val4->tgl); echo date_format($tgl, "M d");?></td>
						</tr>
					  </tbody>
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
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->    
	<script src="<?php echo base_url('assets/theme/bootstrap');?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/docs.min.js"></script>
  </body>
</html>
