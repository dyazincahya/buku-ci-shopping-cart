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

<?php
	$this->load->view('adm_navbar');
?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="page-header">
			<h1>All Kontak <small></small></h1>
		</div>
			<ul id="myTab" class="nav nav-tabs">
				<li class="active"><a href="#kontak" data-toggle="tab">
					<span class="badge"><?php $this->db->where('subjek', 'Kontak');$this->db->where('trash','N');  $this->db->from('kontak'); echo $this->db->count_all_results();?></span>
					Kontak Masuk
				</a></li>
				<li><a href="#kritik" data-toggle="tab">
					<span class="badge"><?php $this->db->where('subjek', 'Kritik');$this->db->where('trash','N');$this->db->from('kontak');echo $this->db->count_all_results();?></span>
					Kritik
				</a></li>
				<li><a href="#saran" data-toggle="tab">
					<span class="badge"><?php $this->db->where('subjek', 'Saran');$this->db->where('trash','N');$this->db->from('kontak');echo $this->db->count_all_results();?></span>
					Saran
				</a></li>
				<li><a href="#Trash" data-toggle="tab">
					<span class="badge"><?php $this->db->like('trash', 'Y');$this->db->from('kontak');echo $this->db->count_all_results();?></span>
					<span class="glyphicon glyphicon-trash"></span>
				</a></li>
			  </ul>
			  <div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="kontak">
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>#Nama</th>
						  <th>#Email</th>
						  <th>#No.Handphone</th>
						  <th>#isi</th>
						</tr>
					  </thead>
					  <?php foreach($allkontak as $val){?>
					  <tbody>
						<tr>
						  <td><?php echo $val->nama;?></td>
						  <td><?php echo $val->email;?></td>
						  <td><?php echo $val->nohp;?></td>
						  <td><?php echo $val->isi;?></td>						  
						  <td><a href="" data-toggle="modal" data-target="#move<?php echo $val->id;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					  </tbody>
					  <!-- Modal edit-->
						<div class="modal fade" id="move<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
							   <form class="basic-form" action="<?php echo site_url('admin/MoveKontakToTrash/'.$val->id);?>" method="post">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span></h4>
								</div>
								<div class="modal-body">
									<h3>Move To Trash !</h3>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								  <input type="submit" name="submit" class="btn btn-primary" value="Ok">
								</div>
							   </form>
							  </div>
							</div>
						</div>
					  <?php } ?>
					</table>
				  </div>
				</div>
				<div class="tab-pane fade" id="kritik">
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>#Nama</th>
						  <th>#Email</th>
						  <th>#No.Handphone</th>
						  <th>#isi</th>
						</tr>
					  </thead>
					  <?php foreach($allkritik as $val2){?>
					  <tbody>
						<tr>
						  <td><?php echo $val2->nama;?></td>
						  <td><?php echo $val2->email;?></td>
						  <td><?php echo $val2->nohp;?></td>
						  <td><?php echo $val2->isi;?></td>
						  <td><a href="" data-toggle="modal" data-target="#move2<?php echo $val2->id;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					  </tbody>
					  <!-- Modal edit-->
						<div class="modal fade" id="move2<?php echo $val2->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
							   <form class="basic-form" action="<?php echo site_url('admin/MoveKontakToTrash/'.$val2->id);?>" method="post">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span></h4>
								</div>
								<div class="modal-body">
									<h3>Move To Trash !</h3>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								  <input type="submit" name="submit" class="btn btn-primary" value="Ok">
								</div>
							   </form>
							  </div>
							</div>
						</div>
					  <?php } ?>
					</table>
				  </div>
				</div>
				<div class="tab-pane fade" id="saran">
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>#Nama</th>
						  <th>#Email</th>
						  <th>#No.Handphone</th>
						  <th>#isi</th>
						</tr>
					  </thead>
					  <?php foreach($allsaran as $val3){?>
					  <tbody>
						<tr>
						  <td><?php echo $val3->nama;?></td>
						  <td><?php echo $val3->email;?></td>
						  <td><?php echo $val3->nohp;?></td>
						  <td><?php echo $val3->isi;?></td>
						  <td><a href="" data-toggle="modal" data-target="#move3<?php echo $val3->id;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					  </tbody>
					  <!-- Modal edit-->
						<div class="modal fade" id="move3<?php echo $val3->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
							   <form class="basic-form" action="<?php echo site_url('admin/MoveKontakToTrash/'.$val3->id);?>" method="post">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span></h4>
								</div>
								<div class="modal-body">
									<h3>Move To Trash !</h3>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								  <input type="submit" name="submit" class="btn btn-primary" value="Ok">
								</div>
							   </form>
							  </div>
							</div>
						</div>
					  <?php } ?>
					</table>
				  </div>
				</div>
				<div class="tab-pane fade" id="Trash">
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>#Nama</th>
						  <th>#Email</th>
						  <th>#No.Handphone</th>
						  <th>#Type</th>
						</tr>
					  </thead>
					  <?php foreach($alltrash as $val4){?>
					  <tbody>
						<tr>
						  <td><?php echo $val4->nama;?></td>
						  <td><?php echo $val4->email;?></td>
						  <td><?php echo $val4->nohp;?></td>
						  <td><?php echo $val4->subjek;?></td>
						  <td><a href="" data-toggle="modal" data-target="#restore<?php echo $val4->id;?>"><span class="glyphicon glyphicon-repeat"></span></a></td>
						  <td><a href="" data-toggle="modal" data-target="#remove<?php echo $val4->id;?>"><span data-toggle="toltips" title="Delete Permanenly" class="glyphicon glyphicon-remove"></span></a></td>
						</tr>
					  </tbody>
					  <!-- Modal edit-->
						<div class="modal fade" id="restore<?php echo $val4->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
							   <form class="basic-form" action="<?php echo site_url('admin/RestoreTrash/'.$val4->id);?>" method="post">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-repeat"></span></h4>
								</div>
								<div class="modal-body">
									<h3>Restore <?php echo $val4->subjek;?> !</h3>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								  <input type="submit" name="submit" class="btn btn-primary" value="Ok">
								</div>
							   </form>
							  </div>
							</div>
						</div>
					  <!-- Modal Remove-->
						<div class="modal fade" id="remove<?php echo $val4->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							  <div class="modal-content">
							   <div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								  <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span></h4>
								</div>
								<div class="modal-body">
									<h3>Delete Permanenly Data <?php echo $val4->subjek;?> !</h3>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								  <a href="<?php echo site_url('admin/DeletePermanenly/'.$val4->id);?>" class="btn btn-danger">Ok</a>
								</div>
							   </form>
							  </div>
							</div>
						</div>
					  <?php } ?>
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
