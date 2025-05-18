

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
    $kode       = $datpil->kode;
	$nama		= $datpil->nama;
	$uraian		= $datpil->uraian;
} else {


    $act		= "act_add";
	$idp		= "";
	$kode	= gli("tbl_klasifikasi", "kode", 4);
	$nama		= "";
	$uraian		= "";
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
          <a href="<?php echo base_URL(); ?>index.php/admin/klasifikasi_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-185px; margin-left:100px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/+k.png" alt="" /></a>
     <a href="" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>

<?php echo $this->session->flashdata("k_passwod");?>


<input type="hidden" name="idp" value="<?php echo $idp; ?>">
 <div class="modal-show33">
<form action="<?php echo base_URL(); ?>index.php/admin/klasifikasi_kontrak/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">


    <br>
    <h4 style="font-family:Agency FB; font-size:40px; color:#fc5242; text-align:center;">KLASIFIKASI KONTRAK</h4>
    <br>
	<table width="100%" class="table-form">


        <tr style="font-family:Calibri; "><td width="20%">Kode</td><td><b><input type="text" name="kode" required value="<?php echo $kode; ?>" class="form-control" tabindex="1"  autofocus></b></td></tr>

	<tr style="font-family:Calibri; "><td width="20%">Nama</td><td><b><input type="text" name="nama" required value="<?php echo $nama; ?>" style="width: 500px" class="form-control" ></b></td></tr>

	<tr style="font-family:Calibri; "><td width="20%">Uraian</td><td><b><textarea name="uraian" required style="width: 500px; height: 100px" class="form-control"><?php echo $uraian; ?></textarea></b></td></tr>

	<tr style="font-family:Calibri;text-align:left;"><td colspan="2">
	<br>
        <center><button style="font-family:Agency FB; font-size:20px;" type="submit" class="btn btn-primary">Simpan</button>

	<a style="font-family:Agency FB; font-size:20px;" href="<?php echo base_URL(); ?>index.php/admin/klasifikasi_kontrak" class="btn btn-info">Kembali</a>
            </center>
	</td></tr>
	</table>
</form>
</div>
