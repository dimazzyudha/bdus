<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		$a['page']	= "selamatdatang";

		$this->load->view('admin/site', $a);
	}

	public function klasifikasi_kontrak() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		/* pagination */
		$total_row		= $this->db->query("SELECT * FROM tbl_klasifikasi")->num_rows();
		$per_page		= 10;

		$awal	= $this->uri->segment(4);
		$awal	= (empty($awal) || $awal == 1) ? 0 : $awal;

		//if (empty($awal) || $awal == 1) { $awal = 0; } { $awal = $awal; }
		$akhir	= $per_page;

		$a['pagi']	= _page($total_row, $per_page, 4, base_url()."admin/klasifikasi_kontrak/p");

		//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);

		$cari					= addslashes($this->input->post('q'));

		//ambil variabel Postingan
		$idp					= addslashes($this->input->post('idp'));
        $kode                   = addslashes($this->input->post('kode'));
		$nama					= addslashes($this->input->post('nama'));
		$uraian					= addslashes($this->input->post('uraian'));

		$cari					= addslashes($this->input->post('q'));



		if ($mau_ke == "cari") {
			$a['data']		= $this->db->query("SELECT * FROM tbl_klasifikasi WHERE nama LIKE '%$cari%' OR uraian LIKE '%$cari%' ORDER BY id DESC")->result();
			$a['page']		= "l_klasifikasi_kontrak";
		} else if ($mau_ke == "add") {
			$a['page']		= "f_klasifikasi_kontrak";

        } else if ($mau_ke == "del") {

			$this->db->query("DELETE FROM tbl_klasifikasi WHERE id = '$idu'");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Dihapus</div>");
			redirect('admin/klasifikasi_kontrak');
        }

		else if ($mau_ke == "edt") {
			$a['datpil']	= $this->db->query("SELECT * FROM tbl_klasifikasi WHERE id = '$idu'")->row();
			$a['page']		= "f_klasifikasi_kontrak";
		}

        else if ($mau_ke == "act_edt") {
			$this->db->query("UPDATE tbl_klasifikasi SET kode = '$kode', nama = '$nama', uraian = '$uraian' WHERE id = '$idp'");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Dirubah</div>");
			redirect('admin/klasifikasi_kontrak');
		}

        else if ($mau_ke == "act_add") {
			$this->db->query("INSERT INTO tbl_klasifikasi VALUES (NULL, '$kode', '$nama', '$uraian')");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data has been added</div>");
			redirect('admin/klasifikasi_kontrak');
    }

        else {
			$a['data']		= $this->db->query("SELECT * FROM tbl_klasifikasi LIMIT $awal, $akhir ")->result();
			$a['page']		= "l_klasifikasi_kontrak";
		}

		$this->load->view('admin/site', $a);
	}

	public function dok_kontrak() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		/* pagination */
		$total_row		= $this->db->query("SELECT * FROM tbl_dok_kontrak")->num_rows();
		$per_page		= 10;

		$awal	= $this->uri->segment(4);
		$awal	= (empty($awal) || $awal == 1) ? 0 : $awal;

		//if (empty($awal) || $awal == 1) { $awal = 0; } { $awal = $awal; }
		$akhir	= $per_page;

		$a['pagi']	= _page($total_row, $per_page, 4, base_url()."admin/dok_kontrak/p");

		//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);

		$cari					= addslashes($this->input->post('q'));

		//ambil variabel Postingan
		$idp					= addslashes($this->input->post('idp'));
		$no_agenda				= addslashes($this->input->post('no_agenda'));
		$indeks_berkas			= addslashes($this->input->post('indeks_berkas'));
		$kode					= addslashes($this->input->post('kode'));

		$dari					= addslashes($this->input->post('dari'));
		$no_kontrak				= addslashes($this->input->post('no_kontrak'));
		$tgl_kontrak			= addslashes($this->input->post('tgl_kontrak'));
		$tgl_akhirkontrak			= addslashes($this->input->post('tgl_akhirkontrak'));
		$uraian					= addslashes($this->input->post('uraian'));
		$ket					= addslashes($this->input->post('ket'));

		$cari					= addslashes($this->input->post('q'));

		//upload config
		$config['upload_path'] 		= './upload/dok_kontrak';
		$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']			= '100000';
		$config['max_width']  		= '10000';
		$config['max_height'] 		= '10000';

		$this->load->library('upload', $config);

		if ($mau_ke == "del") {
			$this->db->query("DELETE FROM tbl_dok_kontrak WHERE id = '$idu'");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Dihapus</div>");
			redirect('admin/dok_kontrak');
		} else if ($mau_ke == "cari") {
			$a['data']		= $this->db->query("SELECT * FROM tbl_dok_kontrak WHERE isi_ringkas LIKE '%$cari%' ORDER BY id DESC")->result();
			$a['page']		= "l_dok_kontrak";
		} else if ($mau_ke == "add") {
			$a['page']		= "f_dok_kontrak";
		} else if ($mau_ke == "edt") {
			$a['datpil']	= $this->db->query("SELECT * FROM tbl_dok_kontrak WHERE id = '$idu'")->row();
			$a['page']		= "f_dok_kontrak";
		}


        else if ($mau_ke == "act_add") {
			if ($this->upload->do_upload('file_kontrak')) {
				$up_data	 	= $this->upload->data();

				$this->db->query("INSERT INTO tbl_dok_kontrak VALUES (NULL, '$kode', '$no_agenda', '$indeks_berkas', '$uraian', '$dari', '$no_kontrak', '$tgl_kontrak','$tgl_akhirkontrak', NOW(), '$ket', '".$up_data['file_name']."', '".$this->session->userdata('admin_id')."')");
			} else {
				$this->db->query("INSERT INTO tbl_dok_kontrak VALUES (NULL, '$kode','$no_agenda', '$indeks_berkas', '$uraian', '$dari', '$no_kontrak', '$tgl_kontrak','$tgl_akhirkontrak', NOW(), '$ket', '', '".$this->session->userdata('admin_id')."')");
			}

			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah ditambah</div>");
			redirect('admin/dok_kontrak');
		} else if ($mau_ke == "act_edt") {
			if ($this->upload->do_upload('file_kontrak')) {
				$up_data	 	= $this->upload->data();

				$this->db->query("UPDATE tbl_dok_kontrak SET kode = '$kode', no_agenda = '$no_agenda', indeks_berkas = '$indeks_berkas', isi_ringkas = '$uraian', dari = '$dari', no_kontrak = '$no_kontrak', tgl_kontrak = '$tgl_kontrak', tgl_akhirkontrak = '$tgl_akhirkontrak', keterangan = '$ket', file = '".$up_data['file_name']."' WHERE id = '$idp'");
			} else {
				$this->db->query("UPDATE tbl_dok_kontrak SET kode = '$kode', no_agenda = '$no_agenda', indeks_berkas = '$indeks_berkas', isi_ringkas = '$uraian', dari = '$dari', no_kontrak = '$no_kontrak', tgl_kontrak = '$tgl_kontrak', tgl_akhirkontrak = '$tgl_akhirkontrak', keterangan = '$ket' WHERE id = '$idp'");
			}

			$this->session->set_flashdata("k", "<div class=\"alert alert-success alert-dismissable\" id=\"alert\">Data Telah Diubah".$this->upload->display_errors()."</div>");
			redirect('admin/dok_kontrak');
		} else {
			$a['data']		= $this->db->query("SELECT * FROM tbl_dok_kontrak LIMIT $awal, $akhir ")->result();
			$a['page']		= "l_dok_kontrak";
		}

		$this->load->view('admin/site', $a);
	}


	public function user() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);

		//ambil variabel Postingan
		$idp					= addslashes($this->input->post('idp'));
		$nama					= addslashes($this->input->post('nama'));
		$alamat					= addslashes($this->input->post('alamat'));
		$pimpinan				= addslashes($this->input->post('pimpinan'));
		$nip_pimpinan			= addslashes($this->input->post('nip_pimpinan'));

		$cari					= addslashes($this->input->post('q'));

		//upload config
		$config['upload_path'] 		= './upload';
		$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx';
		$config['max_size']			= '2000';
		$config['max_width']  		= '3000';
		$config['max_height'] 		= '3000';

		$this->load->library('upload', $config);

		if ($mau_ke == "act_edt") {
			if ($this->upload->do_upload('logo')) {
				$up_data	 	= $this->upload->data();

				$this->db->query("UPDATE tbl_perusahaan SET nama = '$nama', alamat = '$alamat', pimpinan = '$pimpinan', nip_pimpinan = '$nip_pimpinan', logo = '".$up_data['file_name']."' WHERE id = '$idp'");

			} else {
				$this->db->query("UPDATE tbl_perusahaan SET nama = '$nama', alamat = '$alamat', pimpinan = '$pimpinan', nip_pimpinan = '$nip_pimpinan' WHERE id = '$idp'");
			}

			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dirubah</div>");
			redirect('admin/user');
		} else {
			$a['data']		= $this->db->query("SELECT * FROM tbl_perusahaan WHERE id = '1' LIMIT 1")->row();
			$a['page']		= "f_user";
		}

		$this->load->view('admin/site', $a);
	}

	public function agenda_dok_kontrak() {
		$a['page']	= "f_config_cetak_agenda";
		$this->load->view('admin/site', $a);
	}


	public function cetak_agenda() {
		$jenis_kontrak	= $this->input->post('tipe');
		$tgl_start		= $this->input->post('tgl_start');
		$tgl_end		= $this->input->post('tgl_end');

		$a['tgl_start']	= $tgl_start;
		$a['tgl_end']	= $tgl_end;

		if ($jenis_kontrak == "agenda_dok_kontrak") {
			$a['data']	= $this->db->query("SELECT * FROM tbl_dok_kontrak WHERE tgl_diinput >= '$tgl_start' AND tgl_diinput <= '$tgl_end' ORDER BY id")->result();
			$this->load->view('admin/agenda_dok_kontrak', $a);
		}
	}

	public function agenda_dok_kontrak2() {
		$a['page']	= "f_config_cetak_agenda2";
		$this->load->view('admin/site', $a);
	}


	public function cetak_agenda2() {
		$jenis_kontrak	= $this->input->post('tipe');
		$tgl_start		= $this->input->post('tgl_start');
		$tgl_end		= $this->input->post('tgl_end');

		$a['tgl_start']	= $tgl_start;
		$a['tgl_end']	= $tgl_end;

		if ($jenis_kontrak == "agenda_dok_kontrak2") {
			$a['data']	= $this->db->query("SELECT * FROM tbl_dok_kontrak WHERE tgl_kontrak >= '$tgl_start' AND tgl_kontrak <= '$tgl_end' ORDER BY id")->result();
			$this->load->view('admin/agenda_dok_kontrak2', $a);
		}
	}

	public function manage_user() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		/* pagination */
		$total_row		= $this->db->query("SELECT * FROM tbl_admin")->num_rows();
		$per_page		= 10;

		$awal	= $this->uri->segment(4);
		$awal	= (empty($awal) || $awal == 1) ? 0 : $awal;

		//if (empty($awal) || $awal == 1) { $awal = 0; } { $awal = $awal; }
		$akhir	= $per_page;

		$a['pagi']	= _page($total_row, $per_page, 4, base_url()."admin/manage_user/p");

		//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);

		$cari					= addslashes($this->input->post('q'));

		//ambil variabel Postingan
		$idp					= addslashes($this->input->post('idp'));
		$username				= addslashes($this->input->post('username'));
		$password				= md5(addslashes($this->input->post('password')));
		$nama					= addslashes($this->input->post('nama'));
		$nip					= addslashes($this->input->post('nip'));
		$level					= addslashes($this->input->post('level'));

		$cari					= addslashes($this->input->post('q'));


		if ($mau_ke == "del") {
			$this->db->query("DELETE FROM tbl_admin WHERE id = '$idu'");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Dihapus </div>");
			redirect('admin/manage_user');
		} else if ($mau_ke == "cari") {
			$a['data']		= $this->db->query("SELECT * FROM tbl_admin WHERE nama LIKE '%$cari%' ORDER BY id DESC")->result();
			$a['page']		= "l_manage_user";
		} else if ($mau_ke == "add") {
			$a['page']		= "f_manage_user";
		} else if ($mau_ke == "edt") {
			$a['datpil']	= $this->db->query("SELECT * FROM tbl_admin WHERE id = '$idu'")->row();
			$a['page']		= "f_manage_user";
		} else if ($mau_ke == "act_add") {
			$this->db->query("INSERT INTO tbl_admin VALUES (NULL, '$username', '$password', '$nama', '$nip', '$level')");
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Ditambah</div>");
			redirect('admin/manage_user');
		} else if ($mau_ke == "act_edt") {
			if ($password = md5("-")) {
				$this->db->query("UPDATE tbl_admin SET username = '$username', nama = '$nama', nip = '$nip', level = '$level' WHERE id = '$idp'");
			} else {
				$this->db->query("UPDATE tbl_admin SET username = '$username', password = '$password', nama = '$nama', nip = '$nip', level = '$level' WHERE id = '$idp'");
			}

			$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data Telah Dirubah </div>");
			redirect('admin/manage_user');
		} else {
			$a['data']		= $this->db->query("SELECT * FROM tbl_admin LIMIT $awal, $akhir ")->result();
			$a['page']		= "l_manage_user";
		}

		$this->load->view('admin/site', $a);
	}

	public function get_klasifikasi() {
		$kode 				= $this->input->post('kode',TRUE);

		$data 				=  $this->db->query("SELECT id, kode, nama FROM tbl_klasifikasi WHERE kode LIKE '%$kode%' ORDER BY id ASC")->result();

		$klasifikasi 		=  array();
        foreach ($data as $d) {
			$json_array				= array();
            $json_array['value']	= $d->kode;
			$json_array['label']	= $d->kode." - ".$d->nama;
			$klasifikasi[] 			= $json_array;
		}

		echo json_encode($klasifikasi);
	}

	public function get_instansi_lain() {
		$kode 				= $this->input->post('dari',TRUE);

		$data 				=  $this->db->query("SELECT dari FROM t_surat_masuk WHERE dari LIKE '%$kode%' GROUP BY dari")->result();

		$klasifikasi 		=  array();
        foreach ($data as $d) {
			$klasifikasi[] 	= $d->dari;
		}

		echo json_encode($klasifikasi);
	}



	public function passwod() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("admin/login");
		}

		$ke				= $this->uri->segment(3);
		$id_user		= $this->session->userdata('admin_id');

		//var post
		$p1				= md5($this->input->post('p1'));
		$p2				= md5($this->input->post('p2'));
		$p3				= md5($this->input->post('p3'));

		if ($ke == "simpan") {
			$cek_password_lama	= $this->db->query("SELECT password FROM tbl_admin WHERE id = $id_user")->row();
			//echo

			if ($cek_password_lama->password != $p1) {
				$this->session->set_flashdata('k_passwod', '<div id="alert" class="alert alert-error">Password Lama tidak sama'.$this->db->last_query().'-'.$cek_password_lama->p.'-'.$p1.'</div>');
				redirect('admin/passwod');
			} else if ($p2 != $p3) {
				$this->session->set_flashdata('k_passwod', '<div id="alert" class="alert alert-error">Password Baru 1 dan 2 tidak cocok</div>');
				redirect('admin/passwod');
			} else {
				$this->db->query("UPDATE tbl_admin SET password = '$p3' WHERE id = '1'");
				$this->session->set_flashdata('k_passwod', '<div id="alert" class="alert alert-success">Password berhasil diperbaharui</div>');
				redirect('admin/passwod');
			}
		} else {
			$a['page']	= "f_passwod";
		}

		$this->load->view('admin/site', $a);
	}

	//login
	public function login() {
		$this->load->view('admin/login');
	}

	public function cek_login() {
		$u 		= $this->security->xss_clean($this->input->post('u'));
		$ta 	= $this->security->xss_clean($this->input->post('ta'));
        $p 		= md5($this->security->xss_clean($this->input->post('p')));

		$q_cek	= $this->db->query("SELECT * FROM tbl_admin WHERE username = '".$u."' AND password = '".$p."'");
		$j_cek	= $q_cek->num_rows();
		$d_cek	= $q_cek->row();
		//echo $this->db->last_query();

        if($j_cek == 1) {
            $data = array(
                    'admin_id' => $d_cek->id,
                    'admin_user' => $d_cek->username,
                    'admin_nama' => $d_cek->nama,
                    'admin_ta' => $ta,
                    'admin_level' => $d_cek->level,
					'admin_valid' => true
                    );
            $this->session->set_userdata($data);
            redirect('admin');
        } else {
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">User dan password salah</div>");
			redirect('admin/login');
		}
	}

	public function logout(){
        
        $this->session->sess_destroy();
      
		redirect('admin/login');
    }
}
