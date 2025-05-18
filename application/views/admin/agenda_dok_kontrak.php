<html>
<head>
<style type="text/css" media="print">
    body {background-color: #fff;}
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 10px}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;

	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
		font-family:Arial;
		color:white;
		font-size: 11px;

		background-color: #000;
		padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Cetak Agenda Kontrak</title>
</head>

<body onload="window.print()">

         <?php
	$q_instansi	= $this->db->query("SELECT * FROM tbl_perusahaan LIMIT 1")->row();

	?>
        <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="float: left; width: 90px; height: 90px">
    <center>
       

        <b style="font-family:Agency FB; font-size: 38px"><?php echo $q_instansi->nama; ?></b><br>
        <b style="font-family:Agency FB; font-size: 20px"><?php echo $q_instansi->alamat; ?></b><br>
        <b style="font-family:Agency FB; font-size: 18px">Tenggarong, Kalimantan Timur</b>
        <br>
        <hr>
</center>
<center>
<b style="margin-left:75px; font-family:Calibri; font-size: 24px">LAPORAN DAFTAR KONTRAK</b><br>
	<b style="margin-left:75px;">Tanggal Input <?php echo tgl_jam_sql($tgl_start)."</b> - <b>".tgl_jam_sql($tgl_end)."</b>"; ?>
	</b>
	</center>

	<table>
        <form action="<?php echo base_URL(); ?>index.php/admin/agenda_dok_kontrak">
 <!--<button  class="btn btn-primary" onclick="window.print()">Cetak</button>
<button type="submit" class="btn btn-primary">Kembali</button>-->
        <br>

		<thead>
			<tr style="background-color:#0374ff; text-align:center;">
				<th width="1%">No</td>
				<th width="2%">Kode Klas</td>
				<th width="20%">Isi Ringkas</td>

				<th width="10%">Nomor Kontrak</td>
				<th width="8%">Tgl. Awal Kontrak</td>
                <th width="8%">Tgl. Akhir Kontrak</td>
				<!--<th width="6%">Dari</td>
				<th width="6%">Pengolah</td>-->
				<th width="4%">Tgl.Diinput</td>
				<th width="5%">Progress</td>
			</tr>
		</thead>
		<tbody>
			<?php
			if (!empty($data)) {
				$no = 0;
				foreach ($data as $d) {
					$no++;
			?>
			<tr>
				<td style="text-align:center;"><?php echo $no; ?></td>
				<td style="text-align:center;"><?php echo $d->kode; ?></td>
				<td><?php echo $d->isi_ringkas; ?></td>

				<td><?php echo $d->no_kontrak; ?></td>
				<td style="text-align:center;"><?php echo tgl_jam_sql($d->tgl_kontrak); ?></td>
                <td style="text-align:center;"><?php echo tgl_jam_sql($d->tgl_akhirkontrak); ?></td>
				<!--<td><?php echo $d->dari; ?></td>
				<td><?php echo gval("tbl_admin", "id", "nama", $d->pengolah); ?></td>-->
				<td style="text-align:center;"><?php echo tgl_jam_sql($d->tgl_diinput); ?></td>
				<td style="text-align:center;"><?php echo $d->keterangan; ?></td>
			</tr>
			<?php
				}
			} else {
				echo "<tr><td style='text-align: center'>Tidak ada data</td></tr>";
			}
			?>
           </form>
		</tbody>
	</table>

<br>

<p style="float:right;"> <b>Mengetahui</b><br> <b>Pimpinan Perusahaan</b></p>
<br>
<br>
<br>
<br>
<br>
<p style="text-align:right;"><b><?php echo $q_instansi->pimpinan; ?></b></p>

<!--<p style="float:right; margin-top:-15px;"><b>NIP. <?php echo $q_instansi->nip_pimpinan; ?></b></p>-->
</body>
</html>
