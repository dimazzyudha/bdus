<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$username	= $datpil->username;
	$password	= "-";
	$nama		= $datpil->nama;
	$nip		= $datpil->nip;
	$level		= $datpil->level;

} else {
	$act		= "act_add";
	$idp		= "";
	$username	= "";
	$password	= "";
	$nama		= "";
	$nip		= "";
	$level		= "";
}
?>
<div class="navbar navbar-inverse">
	<div class="container" style="z-index: 0">
		<div class="navbar-header">

		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->
<br>
<br>
<br>
<br>
<br>
	<form action="<?php echo base_URL(); ?>index.php/admin/manage_user/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input type="hidden" name="idp" value="<?php echo $idp; ?>">

	<p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#fff;"><?php echo $this->session->userdata('admin_nama'); ?></p>

	<a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>
	<div class="modal-show1">
        <h4 style="font-family:Agency FB; font-size: 40px; color:#fc5242; text-align:center;">FORM MANAGEMEN USER</h4>
				<br>
				<br>
	<div class="col-lg-6">
		<table width="100%" class="table-form">

		<tr style="font-family:Calibri; text-align:left;"><td width="20%">Username</td><td><b><input type="text" name="username" required value="<?php echo $username; ?>" style="width: 300px" class="form-control" tabindex="1" autofocus></b></td></tr>
		<tr style="font-family:Calibri; text-align:left;"><td width="20%">Password</td><td><b><input type="password" name="password" required value="<?php echo $password; ?>" id="dari" style="width: 300px" class="form-control" tabindex="2" ></b></td></tr>
		<tr style="font-family:Calibri; text-align:left;"><td width="20%">Ulangi Password</td><td><b><input type="password" name="password2" required value="<?php echo $password; ?>" id="dari" style="width: 300px" class="form-control" tabindex="3	" ></b></td></tr>
            <tr style="font-family:Calibri; text-align:left;"><td width="20%">Nama</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" style="width: 300px" class="form-control" tabindex="4" ></b></td></tr>
		<tr style="font-family:Calibri; text-align:left;"><td width="20%">N I P</td><td><b><input type="text" name="nip" required value="<?php echo $nip; ?>" style="width: 300px" class="form-control" tabindex="5" ></b></td></tr>
		<!--<tr style="background-color: #34495e; font-family:Calibri; Color:#fff;  text-align:left;"><td width="20%">Level</td><td><b>
			<select name="level" class="form-control" style="width: 300px" required tabindex="6" ><option value=""> - Level - </option>
			<?php
				$l_sifat	= array('Super Admin','Admin');

				for ($i = 0; $i < sizeof($l_sifat); $i++) {
					if ($l_sifat[$i] == $level) {
						echo "<option selected value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					} else {
						echo "<option value='".$l_sifat[$i]."'>".$l_sifat[$i]."</option>";
					}
				}
			?>
		</select>-->
			</b></td></tr>

		</table>

		<br>

			<button style="margin-left:170px; "type="submit" class="btn btn-primary" tabindex="7" >Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/admin/manage_user" class="btn btn-success" tabindex="8" >Kembali</a>

		</td></tr>

		</table>
	</div>
<br>
</div>

	</div>

	</div>

	</form>
