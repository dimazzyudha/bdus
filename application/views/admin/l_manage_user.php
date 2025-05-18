<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
        </div>
      </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<p style="margin-left:1055px; font-family:Agency FB; font-size:18px;color:#fff;"><?php echo $this->session->userdata('admin_nama'); ?></p>
          <a href="<?php echo base_URL(); ?>index.php/admin/manage_user/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-185px; margin-left:100px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/+u.png" alt="" /></a>
     <a href="<?php echo base_URL(); ?>index.php/admin/dok_kontrak/add" style="font-family:Agency FB; color:#fff;"><img style="margin-top:-230px; margin-left:900px; height:100px; width:240px;" src="<?php echo base_url(); ?>aset/img/profile3.png" alt="" /></a>
	

<div class="modal-show3">
   
    <?php echo $this->session->flashdata("k");?>
    <br>
				<h4 style="font-family:Agency FB; font-size: 40px; color:#fc5242; text-align:center;">MANAJEMEN USER</h4>
    <br>
<table class="table table-bordered ">
	<thead>
		<tr style="font-family:Agency FB; font-size:20px;">
			<th width="5%">ID</th>
			<th width="30%">Username</th>
			<th width="30%">Nama dan NIP</th>
			
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
			<td style="background-color:transparent; font-family:Agency FB; font-size:20px;" ><?php echo $b->id;?></th>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->username?></td>
			<td style="font-family:Agency FB; font-size:20px;"><?php echo $b->nama."<br>".$b->nip?></td>
			
			<td class="ctr">
				
                    <div class="btn-toolbar" role="toolbar">
						<div class="btn-group">
							<button type="button" style="width:80px; height:40px;" class="ib-btn-drop-b dropdown-toggle" data-toggle="dropdown">
								<p style="font-family: Agency FB; font-size:18px; margin-top:-15px;">OPSI</p><span class="ib-drop-down"></span>
							</button>
							<ul class="dropdown-menu ib-drop-menu big" role="menu">
								<li>
									<span class="arrow-up"></span>
									<a href="<?php echo base_URL(); ?>index.php/admin/manage_user/edt/<?php echo $b->id; ?>">Edit</a>
								</li>
								<li><a href="<?php echo base_URL(); ?>index.php/admin/manage_user/del/<?php echo $b->id; ?>"onclick="return confirm('Serius Mau Menghapus?')">Hapus</a></li>
								<!--<li><a href="Bootstrap-UI-kit.html#">Something else here</a></li>-->
							</ul>
						</div>
					</div>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
    </div>
    </div>
