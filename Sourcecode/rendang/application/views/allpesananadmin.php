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
				<li class="active"><a href="#baru" data-toggle="tab">
					<span class="badge"><?php $this->db->like('status', 'Baru'); $this->db->from('pesanan'); echo $this->db->count_all_results(); ?></span> 
					Pesanan Baru
				</a></li>
				<li><a href="#dikirim" data-toggle="tab">
					<span class="badge"><?php $this->db->like('status', 'Dikirim'); $this->db->from('pesanan'); echo $this->db->count_all_results(); ?></span> 
					Pesanan Yang DI Proses
				</a></li>
				<li><a href="#selesai" data-toggle="tab">
					<span class="badge"><?php $this->db->like('status', 'Selesai'); $this->db->from('pesanan'); echo $this->db->count_all_results(); ?></span> 
					Pesanan Yang Sudah Selesai
				</a></li>
			  </ul>
			  <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="baru">
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>#Kode</th>
						  <th>#Pemesan</th>
						  <th>#Asal</th>
						  <th>#Tanggal</th>
						  <th></th>
						</tr>
					  </thead>
					  <?php 
						$tk=0;
						foreach($baru as $val2){?>
					  <tbody>
						<tr>
						  <td><?php echo $val2->kode_pesanan;?></td>
						  <td><?php echo $val2->nama;?></td>
						  <td><?php echo $val2->alamat;?></td>
						  <td><?php $tgl=date_create($val2->tgl); echo date_format($tgl, "M d");?></td>
						  <td><a href="#" data-toggle="modal" data-target="#pbaru<?php echo $val2->kode_pesanan;?>">Datail</a></td>
						</tr>
					  </tbody>
					  <!-- Modal detail pesanan baru-->
						<div class="modal fade" id="pbaru<?php echo $val2->kode_pesanan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-list-alt"> Detail Pesanan</span></h4>
								</div>
								<div class="modal-body">
								 <div class="row">
									<div class="col-md-6">
								  <fieldset>
									<legend><span class="label label-primary">Info Pesanan</span></legend>
									  <label>Kode Pesanan</label> <?php echo $val2->kode_pesanan;?><br>
									  <label>Kuantitas</label> <?php echo $val2->qty;?><br>
									  <label>Produk</label> <?php echo $val2->produk;?><br>
									  <label>Harga Per Satuan</label> <?php echo 'Rp.'.number_format($val2->hrg_satuan);?><br>
									  <label>Diskon</label> <?php echo $val2->diskon;?>%<br>
									 <?php if($val2->diskon == "" || "0"){?>
									  <label>Total Harga</label> <s><?php $jml=$val2->hrg_satuan*$val2->qty; echo 'Rp.'.number_format($jml);?></s> <br>
									  <label>Harga Diskon</label> <?php $ttl=$val2->hrg_satuan*$val2->qty; $dk=($ttl*$val2->diskon)/100; $hrg_dk=$ttl-$dk; echo 'Rp.'.number_format($hrg_dk);?><br>
									 <?php } else { ?>
									  <label>Total Harga</label> <s><?php $jml=$val2->hrg_satuan*$val2->qty; echo 'Rp.'.number_format($jml);?></s> <br>
									  <label>Harga Diskon</label> <?php $ttl=$val2->hrg_satuan*$val2->qty; $dk=($ttl*$val2->diskon)/100; $hrg_dk=$ttl-$dk; echo 'Rp.'.number_format($hrg_dk);?><br>
									 <?php } ?>
									  <label>Tanggal</label> <?php $tgl=date_create($val2->tgl); echo date_format($tgl, "d F Y");?> <br>
								  </fieldset>
									</div>
									
									<div class="col-md-6">								  
								  <fieldset>
									<legend><span class="label label-success">Info Pemesan</span></legend>
									  <label>Nama</label> <?php echo $val2->nama;?><br>
									  <label>Email</label> <?php echo $val2->email;?><br>
									  <label>No.Handphone</label> <?php echo $val2->nohp;?><br>
									  <label>Alamat</label> <?php echo $val2->alamat;?><br>
								  </fieldset>
									</div>
								 </div>
								</div>
								<div class="modal-footer">
									<input type="button" class="btn btn-primary" data-dismiss="modal" value="OK">
								</div>
							  </div>
							</div>
						</div>
					  <?php 
						} 
					  ?>
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
						  <td><a href="#" data-toggle="modal" data-target="#selesai<?php echo $val3->kode_pesanan;?>">Selesai</a></td>
						</tr>
					  </tbody>
						<!-- Modal Konfir pesanan-->
						<div class="modal fade" id="selesai<?php echo $val3->kode_pesanan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel">Pesanan <?php echo $val2->produk;?></h4>
								</div>
								<div class="modal-body">
								 <div class="row">
									<div class="col-md-6">
								  <fieldset>
									<legend><span class="label label-primary">Info Pesanan</span></legend>
									  <label>Kode Pesanan</label> <?php echo $val3->kode_pesanan;?><br>
									  <label>Kuantitas</label> <?php echo $val3->qty;?><br>
									  <label>Produk</label> <?php echo $val3->produk;?><br>
									  <label>Harga Per Satuan</label> <?php echo 'Rp.'.number_format($val3->hrg_satuan);?><br>
									  <label>Diskon</label> <?php echo $val3->diskon;?>%<br>
									 <?php if($val3->diskon == "" || "0"){?>
									  <label>Total Harga</label> <s><?php $jml=$val3->hrg_satuan*$val2->qty; echo 'Rp.'.number_format($jml);?></s> <br>
									  <label>Harga Diskon</label> <?php $ttl=$val3->hrg_satuan*$val3->qty; $dk=($ttl*$val3->diskon)/100; $hrg_dk=$ttl-$dk; echo 'Rp.'.number_format($hrg_dk);?><br>
									 <?php } else { ?>
									  <label>Total Harga</label> <s><?php $jml=$val3->hrg_satuan*$val3->qty; echo 'Rp.'.number_format($jml);?></s> <br>
									  <label>Harga Diskon</label> <?php $ttl=$val3->hrg_satuan*$val3->qty; $dk=($ttl*$val3->diskon)/100; $hrg_dk=$ttl-$dk; echo 'Rp.'.number_format($hrg_dk);?><br>
									 <?php } ?>
									  <label>Tanggal</label> <?php $tgl=date_create($val3->tgl); echo date_format($tgl, "d F Y");?> <br>
								  </fieldset>
									</div>
									
									<div class="col-md-6">								  
								  <fieldset>
									<legend><span class="label label-success">Info Pemesan</span></legend>
									  <label>Nama</label> <?php echo $val3->nama;?><br>
									  <label>Email</label> <?php echo $val3->email;?><br>
									  <label>No.Handphone</label> <?php echo $val3->nohp;?><br>
									  <label>Alamat</label> <?php echo $val3->alamat;?><br>
								  </fieldset>
									</div>
								 </div>
								</div>
								<div class="modal-footer">
								  <form action="<?php echo site_url('admin/Selesai/'.$val3->kode_pesanan);?>" method="POST">
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
