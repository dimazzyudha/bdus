<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<span style="font-family:Amperzand;" class="navbar-brand">Manage Admin</span>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			
			
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="post" action="<?php echo base_URL(); ?>admin/manage_admin/cari">
					<input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
					<button type="submit" class="btn btn-danger">Cari</button>
				</form>
			</ul>
		</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

  </div>
</div>


<div class="modal-show2">
   
    <?php echo $this->session->flashdata("k");?>
    <div class="alert alert-dismissable alert-success">
			User yang sedang login : <strong><?php echo $this->session->userdata('admin_nama'); ?></strong> 
		</div>
     <ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/admin/manage_admin/add" style="width:968px; font-family:Agency FB; font-size:20px;" class="btn-info">Tambah User</a></li>
			</ul>
<table class="table table-bordered table-hover">
	<thead>
		<tr style="font-family:Agency FB; font-size:20px;">
			<th width="5%">ID</th>
			<th width="30%">Username</th>
			<th width="30%">Nama, NIP</th>
			<th width="20%">Level</th>
			<th width="10%">Tindakan</th>
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
			<td style="background-color:transparent; font-family:Agency FB; font-size:20px;" class="ctr"><?php echo $b->id;?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->username?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->nama."<br>".$b->nip?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->level?></td>
			<td class="ctr">
				<div class="btn-group">
                  
					<a href="<?php echo base_URL(); ?>index.php/admin/manage_admin/edt/<?php echo $b->id; ?>" style="width:80px; font-family:Agency FB; font-size:18px;" class="btn btn-primary btn-sm" title="Edit Data">Ubah</a>
					<a href="<?php echo base_URL(); ?>admin/manage_admin/del/<?php echo $b->id?>" style="width:80px; font-family:Agency FB; font-size:18px;" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Serius Mau Menghapus ?')">Hapus</a>		
				</div>					
			</td>
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
