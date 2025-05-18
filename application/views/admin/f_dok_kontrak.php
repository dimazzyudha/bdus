

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$no_agenda	= $datpil->no_agenda;
	$indeks_berkas= $datpil->indeks_berkas;
	$kode		= $datpil->kode;

	$dari = $datpil->dari;

	$no_kontrak	= $datpil->no_kontrak;
	$tgl_kontrak	= $datpil->tgl_kontrak;
	$tgl_akhirkontrak	= $datpil->tgl_akhirkontrak;
	$uraian		= $datpil->isi_ringkas;
	$ket		= $datpil->keterangan;

} else {
	$act		= "act_add";
	$idp		= "";
	$no_agenda	= gli("tbl_dok_kontrak", "no_agenda", 4);
	$indeks_berkas="";
	$kode		= "";
	$kodeasal		= "";
	$dari = "";

	$no_kontrak	= "";
	$tgl_kontrak	= "";
	$tgl_akhirkontrak	= "";
	$uraian		= "";
	$ket		= "";
}
?>
<div class="navbar navbar-inverse">
	<div class="container">
    </div>
</div>

	<br>
      <br>
      <br>
      <br>
      <br>



      <p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#000000;"><?php echo $this->session->userdata('admin_nama'); ?></p>
          <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-185px; margin-left:50px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/+d.png" alt="" /></a>
     <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>
	<form action="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

	<input type="hidden" name="idp" value="<?php echo $idp; ?>">


		<div class="modal-show1">

	<div class="col-lg-6">
		<table  class="table-form">
            <br>
            <h4 style="font-family:Agency FB; font-size: 40px; color:#fc5242; text-align:center;">DATA KONTRAK</h4>
            <br>
		<tr style="font-family:Calibri; "><td width="20%">No. Agenda</td><td><b><input type="text" name="no_agenda" autofocus readonly="readonly" tabindex="1" required value="<?php echo $no_agenda; ?>" style="width: 150px height:70px;" class="form-control" placeholder="Nomor Agenda"></b></td></tr>
		<tr style="font-family:Calibri;text-align:left;"><td width="20%">Tanggal Awal Kontrak</td><td><b><input type="text" name="tgl_kontrak" tabindex="7" required value="<?php echo $tgl_kontrak; ?>" id="tgl_kontrak" style="width: 150px height:60px;" class="form-control" placeholder="Tanggal Awal Kontrak"></b></td></tr>
<tr style="font-family:Calibri;text-align:left;"><td width="20%">Tanggal Akhir Kontrak</td><td><b><input type="text" name="tgl_akhirkontrak" tabindex="7" required value="<?php echo $tgl_akhirkontrak; ?>" id="tgl_akhirkontrak" style="width: 150px height:60px;" class="form-control" placeholder="Tanggal Akhir Kontrak"></b></td></tr>

		<tr style="font-family:Calibri;text-align:left;"><td width="20%">No Kontrak</td><td><b><input type="text" name="no_kontrak" tabindex="3" required value="<?php echo $no_kontrak; ?>" style="width: 300px" class="form-control" placeholder="Masukkan Nomor Kontrak"></td></tr>
<tr style="font-family:Calibri; text-align:left;"><td width="20%">Dari</td><td><b><input type="text" name="dari" tabindex="5" id="dari" required value="<?php echo $dari; ?>" style="width: 150px" class="form-control"placeholder="Asal kontrak"></b></td></tr>


		<tr style="font-family:Calibri;text-align:left;"><td width="20%">Isi Ringkas</td><td><b><textarea name="uraian" tabindex="4" required style="width: 400px; height: 90px" class="form-control" placeholder="Masukkan Isi Ringkasan"><?php echo $uraian; ?></textarea></b></td></tr>

		<tr style="font-family:Calibri; text-align:left;"><td width="20%">Kode Klasifikasi</td><td><b><input type="text" name="kode" tabindex="5" id="kode_kontrak" required value="<?php echo $kode; ?>" style="width: 150px" class="form-control"placeholder="Kode Klasifikasi"></b></td></tr>


		<tr style="font-family:Calibri; text-align:left;"><td width="20%">File</td><td><b><input type="file" name="file_kontrak" tabindex="8"  style="width: 300px"></b></td></tr>
		<tr style="font-family:Calibri; text-align:left;"><td width="20%">Progress</td><td><b><input type="text" name="ket" value="<?php echo $ket; ?>" tabindex="9" style="width: 300px" class="form-control" placeholder="Masukkan Keterangan"></b></td></tr>
		</table>
        <tr style="font-family:Calibri;text-align:left;"><td colspan="2">
		<br>
            <center><button style="" type="submit" class="btn btn-primary"tabindex="10">Simpan</button>

		<a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak" class="btn btn-info" tabindex="11" >Kembali</a>
            </center>
		</td>
		</td></tr>
		<br>
	</div>

	</div>

	</form>

<script type="text/javascript">
$(function() {
	$( "#tgl_kontrak" ).datepicker({
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
<script type="text/javascript">
$(function() {
	$( "#tgl_akhirkontrak" ).datepicker({
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
