<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
	<title>PT. Budi Daya Utama Sejahtera</title>
	<link href="<?php echo base_url(); ?>logo2.ico" rel="icon" type="image/x-icon"/>

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

        <link href="<?php echo base_url(); ?> aset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flatscroll/bootstrap.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flatscroll/bootstrap-responsive.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flatscroll/pricing.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flatscroll/style.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/flatscroll/jquery.dataTables.min.css" >



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.css" />

    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
	<script src="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?> aset/js/vendor/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?> aset/js/flat-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	// <![CDATA[
	$(document).ready(function () {
		$(function () {
			$( "#kode_kontrak" ).autocomplete({
				source: function(request, response) {
					$.ajax({
						url: "<?php echo site_url('index.php/admin/get_klasifikasi'); ?>",
						data: { kode: $("#kode_kontrak").val()},
						dataType: "json",
						type: "POST",
						success: function(data){
							response(data);
						}
					});
				},
			});
		});

		$(function () {
			$( "#dari" ).autocomplete({
				source: function(request, response) {
					$.ajax({
						url: "<?php echo site_url('index.php/admin/get_instansi_lain'); ?>",
						data: { kode: $("#dari").val()},
						dataType: "json",
						type: "POST",
						success: function(data){
							response(data);
						}
					});
				},
			});
		});


		$(function() {
			$( "#tgl_kontrak" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: 'yy-mm-dd'
			});
		});
	});
	// ]]>
	</script>
	</head>

 <!-- <body>
      <div id="intro2">

<div class="row demo-row">
        <div class="col-xs-12">
          <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a style="font-family:Amperzand;" class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                  <li><a href="<?php echo base_url(); ?>index.php/admin">Beranda</a></li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Klasifikasi<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/klasifikasi_kontrak">Klasifikasi Kontrak</a></li>

                  </ul>
                </li>
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kontrak<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/dok_kontrak">Daftar Kontrak</a></li>

                  </ul>
                </li>
                  </li>
                   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agenda<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/agenda_dok_kontrak">Daftar Agenda Kontrak</a></li>

                  </ul>
                </li>
              <!--  <li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                </li>-->
                  <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/user">Manajemen Instansi</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/admin/manage_user">Manajemen User</a></li>
                       <li><a href="<?php echo base_url(); ?>index.php/admin/passwod">Manajemen Password</a></li>

                  </ul>
                </li>

              <li><a href="<?php echo base_url(); ?>index.php/admin/logout">Keluar</a></li>
               <!--<form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
   <body>

 <header id="head-top">

    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo base_url(); ?>index.php/admin"><i class="icon-twitter-sign icon-x3"></i>MANAJEMEN KONTRAK</a>
          <div class="nav-collapse collapse top-spy">
            <ul style="margin-left:330px; margin-top:-70px;" class="nav" id="topnav">
              <li class="active"><a href="<?php echo base_url(); ?>index.php/admin">Beranda</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/klasifikasi_kontrak">Klasifikasi</a></li>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">


                  </ul>
                </li>

              <li><a href="<?php echo base_url(); ?>index.php/admin/user">Validasi</a></li>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">


                  </ul>
                </li>



              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendataan<b class="caret"></b></a>
                 <span class="dropdown-arrow"></span>
                 <ul class="dropdown-menu">
                   <li><a href="<?php echo base_url(); ?>index.php/admin/dok_kontrak">Data Kontrak</a></li>



                  </ul>

                  </li>
			  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>index.php/admin/agenda_dok_kontrak">Laporan Daftar Kontrak Per Tanggal Input</a></li>
                      <li><a href="<?php echo base_url(); ?>index.php/admin/agenda_dok_kontrak2">Laporan Daftar Kontrak Per Tanggal Kontrak</a></li>

                  </ul>
                </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengaturan<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">

                  <li><a href="<?php echo base_url(); ?>index.php/admin/passwod">Ganti Password</a></li>


                  </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/logout">Keluar</a></li>
                      <span class="dropdown-arrow"></span>
                      <ul class="dropdown-menu">


                      </ul>
                    </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


	<?php
	$q_instansi	= $this->db->query("SELECT * FROM tbl_perusahaan LIMIT 1")->row();

	?>
<div id="intro">
 <div class="container">

      <div class="page-header" id="banner">
        <div class="row">

       <br>
            <br>
             <br>
            <br>

                        <?php $this->load->view('admin/'.$page); ?>
           <br>
            <br>
            <br>
            <br>

                    </div>
                </div>
            </div>
        </div>

   <section id="Section-footer">
<img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: outline; float: left; margin-left: 0px; width: 90px; height: 90px">
            <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: outline; float: right; margin-left: 0px; width: 90px; height: 90px">
                <h2 style="margin: 15px 90px 10px 0; color: #fff; text-align: center; font-family:Agency FB; font-size:35px;"><?php echo $q_instansi->nama; ?></h2>
                <div style="color: #003171; text-align: center; font-size: 16px; font-family: Tahoma; margin: 15px 90px 10px 0; " class="clearfix"><b>Alamat : <?php echo $q_instansi->alamat; ?></b></div>

</body></html>
