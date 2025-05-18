

	<div class="navbar navbar-inverse">
        <div class="container">
              </div>
</div>
<?php echo $this->session->flashdata("k");?>
		<br>
      <br>
      <br>
      <br>
      <br>



      <p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#000000;"><?php echo $this->session->userdata('admin_nama'); ?></p>
          <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-185px; margin-left:100px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/+d.png" alt="" /></a>
     <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>


    <div class="modal-show-kontrak">
          <h2 style="font-family:Agency FB; color:#fc5242;text-align:center;">DATA KONTRAK</h2>



			<!--<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="post" action="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/cari">
					<input type="text" class="form-control" name="q" style="margin-left:795px; color:#000; width: 200px; height:30px;" placeholder="Kata kunci pencarian ..." required>
					<button type="submit" class="btn btn-danger">Cari</button>
				</form>-->



<!--
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Well done!</strong> You successfully read <a href="http://bootswatch.com/amelia/#" class="alert-link">this important alert message</a>.
</div>

<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh snap!</strong> <a href="http://bootswatch.com/amelia/#" class="alert-link">Change a few things up</a> and try submitting again.
</div>
-->
<br>
<table id="myTable" class="table table-striped table-bordered table-hover">
	<thead>
		<tr style="font-family:Agency FB; font-size:22px; text-align:center;">
			<th style="text-align:center;" width="10%">No/Kode Klas</th>
			<th style="text-align:center;" width="23%">Isi Ringkas, File</th>
			<th style="text-align:center;" width="20%">Nomor, Tgl Awak Kontrak</th>
			<th style="text-align:center;" width="25%">Tgl Akhir Kontrak</th>
			<th style="text-align:center;" width="20%">Dari</th>

			<th style="text-align:center;" width="10%">Progress</th>

			<th style="text-align:center;" width="3%">Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php
		if (empty($data)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $b) {
		?>
		<tr>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->no_agenda."/".$b->kode;?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->isi_ringkas."<br><b>File : </b><i><a href='".base_URL()."upload/dok_kontrak/".$b->file."' target='_blank'>".$b->file."</a>"?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->no_kontrak."<br><i>".tgl_jam_sql($b->tgl_kontrak)."</i>"?></td>
			<td style="font-family:Agency FB; font-size:20px; text-align:center;"><?php echo "<i>".tgl_jam_sql($b->tgl_akhirkontrak)."</i>"?></td>
			<td style="font-family:Agency FB; font-size:20px; text-align:center;"><?php echo $b->dari; ?></td>
			<td style="font-family:Agency FB; font-size:20px; text-align:center;"><?php echo $b->keterangan; ?></td>


			<td class="ctr">
				<?php
				if ($b->pengolah == $this->session->userdata('admin_id')) {
				?>

					<div class="btn-toolbar" role="toolbar">
						<div class="btn-group">
							<button type="button" style="width:80px; height:40px;" class="ib-btn-drop-b dropdown-toggle" data-toggle="dropdown">
								<p style="font-family: Agency FB; font-size:18px; margin-top:-15px;">AKSI</p><span class="ib-drop-down"></span>
							</button>
							<ul class="dropdown-menu ib-drop-menu big" role="menu">
								<li>
									<span class="arrow-up"></span>
									<a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/edt/<?php echo $b->id; ?>">Edit</a>
								</li>
								<!--<li><a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/del/<?php echo $b->id; ?>"onclick="return confirm('Serius Mau Menghapus?')">Hapus</a></li>-->
								<!--<li><a href="Bootstrap-UI-kit.html#">Something else here</a></li>-->
							</ul>
						</div>
					</div>

				</div>
				<?php
				}
				?>

			</td>
		</tr>
		<?php
			$no++;
			}
		}
		?>
	</tbody>
</table>
<script>
			$(document).ready(function(){
				$('#myTable').DataTable(
                    {"paging":   false}
                );
			});
		</script>

<!--<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
</script>-->
<div class="dark-wrapper clearfix">
					<div style="width:1020px;" class="ib-pagination">
						<a class="nav-left" href="Bootstrap-UI-kit.html#">
                            <span></span>
						</a>
                        <a class="nav-right" href="Bootstrap-UI-kit.html#">
							<span></span>
						</a>

<center><ul ><?php echo $pagi; ?></ul></center>


		
</div>
</div>
