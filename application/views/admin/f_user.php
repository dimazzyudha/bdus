<div class="navbar navbar-inverse">
	<div class="container">
		<br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#000000;"><?php echo $this->session->userdata('admin_nama'); ?></p>

     <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>



	<form action="<?php echo base_URL(); ?>index.php/admin/user/act_edt" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input type="hidden" name="idp" value="<?php echo $data->id; ?>">
	<div class="modal-show3">
	<br>
	<h4 style="font-family:Agency FB; font-size: 40px; color:#fc5242; text-align:center;">VALIDASI</h4>
        <br>
		<table border="0px" width="100%" class="table-form">

		<!--<tr style="font-family:Calibri; "><td width="20%">Nama</td><td><b><input type="text" name="nama" required value="<?php echo $data->nama; ?>" style="width: 320px; height:30px;" class="form-control"></b></td></tr>
		<tr style="font-family:Calibri; "><td width="20%">Alamat  </td><td><b><textarea name="alamat" required style="width: 320px; height: 90px" class="form-control"><?php echo $data->alamat; ?></textarea></b></td></tr>-->
            <tr style="font-family:Calibri; "><td width="20%">Pimpinan</td><td><b><input type="text" name="pimpinan" required value="<?php echo $data->pimpinan; ?>" style="width: 320px; height:30px;" class="form-control"></b></td></tr>
          <tr style="font-family:Calibri; "><td width="20%">NIK</td><td><b><input type="text" name="nip_pimpinan" required value="<?php echo $data->nip_pimpinan; ?>" style="width: 320px; height:30px;" class="form-control"></b></td></tr>
            <!--<tr style="font-family:Calibri; "><td width="10%">Logo</td><td><b><input type="file" name="logo"  style="width: 320px" ></b></td></tr>-->
		<tr style="font-family:Calibri;"><td colspan="2">
            <br>
		<center>
			<button style="font-family:Agency FB; font-size:18px;" type="submit" class="btn btn-primary">Simpan</button>

		<a style="font-family:Agency FB; font-size:18px;" href="<?php echo base_URL(); ?>index.php/admin" class="btn btn-success">Kembali</a>
</center>
		</td></tr>

		</table>
		<br>
	</div>
	


		<table width="100%" class="table-form">



		</table>
	</div>

	</div>

	</form>
