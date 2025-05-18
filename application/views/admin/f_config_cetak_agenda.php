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


<div class="modal-show2">

<form action="<?php echo base_URL(); ?>index.php/admin/cetak_agenda" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="tipe" value="<?php echo $this->uri->segment(2); ?>">

	<table style=" background-color:transparent; margin-left:145px; "class="table-form" width="100%">
        <br>
       <h4 style="font-family:Agency FB; font-size:40px; text-align:center; color:#fc5242;">LAPORAN DAFTAR KONTRAK</h4>
        <h6 style="font-family:Agency FB; font-size:20px; text-align:center; color:#fc5242;">PER TANGGAL INPUT</h6>
        <br>



	<tr><td width="20%"></td><td><b><input type="text" name="tgl_start" id="tgl_start" class="form-control" style=" margin-left:-160px; width: 325px; height:30px;" placeholder="Tanggal Awal" required></b></td></tr>
	<tr><td width="20%"></td><td><b><input type="text" name="tgl_end" id="tgl_end" class="form-control" style="margin-left:-160px; width: 325px; height:30px;"  placeholder="Tanggal Akhir" required></b></td></tr>

	<tr><td colspan="2">
	<br>
	<button   style="margin-left:-12px; "type="submit" class="btn btn-primary">Cetak</button>
        <button  type="reset" class="btn btn-danger">Hapus</button>
	<a href="<?php echo base_URL(); ?>index.php/admin" class="btn btn-success">Kembali</a>
	</td></tr>
	</table>
	</fieldset>
</form>
</div>
</div>


<script type="text/javascript">
$(function() {
	$( "#tgl_start" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
	$( "#tgl_end" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd'
	});
});
</script>
