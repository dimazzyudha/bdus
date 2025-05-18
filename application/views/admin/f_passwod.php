
	<div class="navbar navbar-inverse">
		<div class="container">
        </div>
</div>
<?php echo $this->session->flashdata("k_passwod");?>
<?php echo $this->session->flashdata("k");?>

			<br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#000000;"><?php echo $this->session->userdata('admin_nama'); ?></p>

     <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-270px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>


<div class="modal-show4">
<form action="<?php echo base_URL()?>index.php/admin/passwod/simpan" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<table class="table-form" width="100%">
        <br>
       <h4 style="font-family:Agency FB; font-size: 40px; color:#fc5242; text-align:center;">GANTI PASSWORD</h4>
        <br>
        <br>
	<tr  style="font-family:Calibri; text-align:left;"><td width="30%">Username</td><td><b><input type="text" name="username" class="form-control" readonly value="<?=$this->session->userdata('admin_user')?>" style="width: 200px"></b></td></tr>
	<tr  style="font-family:Calibri; text-align:left;"><td>Password lama</td><td><input type="password" name="p1" class="form-control" style="width: 200px" autofocus required></td></tr>
	<tr  style="font-family:Calibri; text-align:left;"><td>Password baru</td><td><input type="password" name="p2" class="form-control" style="width: 200px" required></td></tr>
	<tr  style="font-family:Calibri; text-align:left;"><td>Ulangi Password baru</td><td><input type="password" class="form-control" name="p3" style="width: 200px" required></td></tr>

	<tr  style="font-family:Calibri;"><td colspan="2">
	<br>

	<button style="margin-left:140px;" type="submit" class="btn btn-primary">Simpan</button>
        <button  type="reset" class="btn btn-danger">Hapus</button>
	<a href="<?php echo base_URL()?>index.php/admin" class="btn btn-success">Kembali</a>
	</td></tr>
	</table>
	</fieldset>
</form>
</div>
