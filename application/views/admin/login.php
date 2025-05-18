
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PT.Budi Daya Utama Sejahtera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<style type="text/css">
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>aset/font/satu.woff) format('woff');
	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>aset/font/dua.woff) format('woff');
	}
	@font-face {
	  font-family: 'Lobster';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Lobster'), url(<?php echo base_url(); ?>aset/font/tiga.woff) format('woff');
	}

	</style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flat-ui.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/demo.css" media="screen">
      <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/vendor/bootstrap.min.css" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->


    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/jquery.chained.js"></script>

     <div id="intro">
       <div class="login">

        <div class="login-screen">
             <h2 style="text-align: justify; font-family:Agency FB;">PT. BUDI DAYA UTAMA SEJAHTERA</h2>
            <br>
          <div class="login-icon">

            <img src="<?php echo base_url(); ?>aset/img/login/logo2.png" style=" width:100px; height:100px;">

            <h4><small>Aplikasi Pendataan Kontrak Konstruksi Jalan & Jembatan</small></h4>
          </div>

<form action="<?php echo base_URL(); ?>index.php/admin/cek_login" method="post">

		<?php echo $this->session->flashdata("k"); ?>

          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Masukkan Username" autofocus name="u" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Masukkan Password" name="p">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <button  style="font-family:Agency FB; font-size:20px; " type="submit" class="btn btn-primary btn-block" value="Login" name="login">MASUK</button>
              <button style="font-family:Agency FB; font-size:20px;" type="reset" class="btn btn-danger btn-block" value="Reset" name="Reset">HAPUS</button>


           <a class="login-link" href="mailto:dimazzyudha@gmail.com?subject=Lupa%20Password&amp;body=Tolong%20Kirim%20Username%20dan%20Password%20%3A)">Lupa Passsword ?</a>

          </div>
        </div>
      </div>
         </div>
    </div>


	           <!--  <img src="<?php echo base_url(); ?>aset/img/fb.png" style="  margin-top:-340px; margin-left:1110px; width:60px;">
          <img src="<?php echo base_url(); ?>aset/img/twitter.png" style="  margin-top:-377px; margin-left:1250px; width:60px;">-->


	<!--</center>


	<script type="text/javascript">
	$(document).ready(function(){
		$(" #alert" ).fadeOut(6000);
	});
	</script>


<div class="span12">
		<h4 style="font-weight: bold; font-size: 14px;">Copyright by <a href="https://twitter.com/Dimazzyudha" target="_blank">Dimas</a></a></h4>
		<h6>&copy;  2015. Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage}</h6>
	  </div>-->

</body></html>
    </head>
</html>
