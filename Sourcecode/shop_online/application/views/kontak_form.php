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
          <h1 class="page-header">Feedback</h1>
			<?php if ($this->session->flashdata('message'))echo $this->session->flashdata('message');?>
			<form action="<?php echo site_url('admin/kontak');?>" method="POST" onsubmit="return validasi()">
          <div class="row">
              <input type="hidden" name="nama" class="form-control" value="<?php echo $pengguna->nama;?>">
              <input type="hidden" name="email" class="form-control"  value="<?php echo $pengguna->email;?>">
			  <input type="hidden" name="hp" class="form-control"  value="<?php echo $pengguna->nohp;?>">
			  
            <div class="col-xs-6 col-sm-12">
			  <label>Subjek</label>
			  <select name="subjek" class="form-control" id="subjek">
				<option value="">---Pilih Subjek---</option>
				<option value="Kontak">Kontak</option>
				<option value="Kritik">Kritik</option>
				<option value="Saran">Saran</option>
			  </select>
            </div>
            <div class="col-xs-6 col-sm-12">
			  <label>Keterangan</label>
              <textarea name="isi" class="form-control" placeholder="Messege" id="isi"></textarea>
            </div>
			<div class="col-xs-6 col-sm-12"><hr>
			  <?php echo $image;?>
			</div>
			<div class="col-xs-6 col-sm-12">
			  <label>Masukan Kode Keamanan</label>
			  <input type="text" name="secutity_code" class="form-control" id="captcha">
			</div>
			<div class="col-xs-6 col-sm-12"><hr>
              <input type="submit" name="submit" class="btn btn-primary" value="Send">
            </div>
          </div>
			</form>
			
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/jquery.min.js"></script>
	<script>
		function validasi(){
			var subjek = document.getElementById('subjek');
			var isi = document.getElementById('isi');
			var captcha = document.getElementById('captcha');

			if (harusDiisi(subjek, "Apa Subjek FeedBack Anda ?")) {
				if (harusDiisi(isi, "Anda Lupa Menulisan Pesan !!!")) {
					if (harusDiisi(captcha, "Ketikan Kode Security-nya !!!")) {
						return true;
					};
				};
			};
			return false;
		}

		function harusDiisi(att, msg){
			if (att.value.length == 0) {
				alert(msg);
				att.focus();
				return false;
			}

			return true;
		}
	</script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/theme/bootstrap');?>/assets/js/docs.min.js"></script>
  </body>
</html>
