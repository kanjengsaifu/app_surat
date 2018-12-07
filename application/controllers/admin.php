<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper(array('url','form'));
		// $this->load->model('model_admin');
	}

	function index(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

		$a['jenis']	= $this->model_admin->tampil_jenis()->num_rows(); //untuk ambil data dari file model_admin.php dengan function tampil_jenis
		$a['surat_keluar']	= $this->model_admin->tampil_surat_keluar()->num_rows();
		$a['page']	= "home";
		
		$this->load->view('admin/index', $a);
	}	

	/* Fungsi Jenis Surat */
	function jenis_surat(){
		$a['data']	= $this->model_admin->tampil_jenis()->result_object();
		$a['page']	= "jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function insert_jenis(){
		
		$no_agenda = $this->input->post('no_agenda');
		$tgl_terima= $this->input->post('tgl_terima');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tgl_surat= $this->input->post('tgl_surat');
		$pengirim = $this->input->post('pengirim');
		$perihal = $this->input->post('perihal');
		$lampiran= $this->input->post('lampiran');
		$sifat_surat= $this->input->post('sifat_surat');
		$penjabat_disposisi= $this->input->post('penjabat_disposisi');
		$disposisi= implode(',' , $this->input->post('disposisi'));


		$asli_copy = $this->input->post('asli_copy');
		$informasi_disposisi = $this->input->post('informasi_disposisi');

		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_terima' => $tgl_terima,
				'no_surat' => $no_surat,
				'tgl_surat' => $tgl_surat,
				'pengirim' => $pengirim,
				'perihal' => $perihal,
				'lampiran' => $lampiran,
				'sifat_surat' => $sifat_surat,
				'penjabat_disposisi' => $penjabat_disposisi,
				'disposisi' => $disposisi,
				'asli_copy' => $asli_copy,
				'informasi_disposisi' => $informasi_disposisi
			);
		$this->db->insert('tb_jenis_surat', $object);

		redirect('admin/jenis_surat','refresh');
	}

	function edit_jenis($id){
		$a['editdata']	= $this->db->get_where('tb_jenis_surat',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_jenis_surat";
		
		$this->load->view('admin/index', $a);
	}

	function update_jenis(){
		$id = $this->input->post('id');
		
		$no_agenda = $this->input->post('no_agenda');
		$tgl_terima= $this->input->post('tgl_terima');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tgl_surat= $this->input->post('tgl_surat');
		$pengirim = $this->input->post('pengirim');
		$perihal = $this->input->post('perihal');
		$lampiran= $this->input->post('lampiran');
		$sifat_surat= $this->input->post('sifat_surat');
		$penjabat_disposisi= $this->input->post('penjabat_disposisi');
		$disposisi= $this->input->post('disposisi');
		$asli_copy = $this->input->post('asli_copy');
		$informasi_disposisi = $this->input->post('informasi_disposisi');
		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_terima' => $tgl_terima,
				'no_surat' => $no_surat,
				'tgl_surat' => $tgl_surat,
				'pengirim' => $pengirim,
				'perihal' => $perihal,
				'lampiran' => $lampiran,
				'sifat_surat' => $sifat_surat,
				'penjabat_disposisi' => $penjabat_disposisi,
				'disposisi' => $disposisi,
				'asli_copy' => $asli_copy,
				'informasi_disposisi' => $informasi_disposisi
			);
		$this->db->where('surat_id', $id);
		$this->db->update('tb_jenis_surat', $object); 

		redirect('admin/jenis_surat','refresh');
	}

	function hapus_jenis($id){
		
		$this->model_admin->hapus_jenis($id);
		redirect('admin/jenis_surat','refresh');
	}


	/* Fungsi Surat Keluar */
	function surat_keluar(){
		$a['data']	= $this->model_admin->tampil_surat_keluar()->result_object();
		$a['page']	= "surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_surat_keluar(){
		$a['page']	= "tambah_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function insert_surat_keluar(){
		
		$no_agenda = $this->input->post('no_agenda');
		$tgl_surat= $this->input->post('tgl_surat');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tujuan = $this->input->post('tujuan');
		$perihal = $this->input->post('perihal');
		$asli_copy = $this->input->post('asli_copy');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_surat' => $tgl_surat,
				'no_surat' => $no_surat,
				'tujuan' => $tujuan,
				'perihal' => $perihal,
				'asli_copy' => $asli_copy,
				'keterangan' => $keterangan
			);
		$this->db->insert('tb_surat_keluar', $object);

		redirect('admin/surat_keluar','refresh');
	}

	function edit_surat_keluar($id){
		$a['editdata']	= $this->db->get_where('tb_surat_keluar',array('surat_id'=>$id))->result_object();		
		$a['page']	= "edit_surat_keluar";
		
		$this->load->view('admin/index', $a);
	}

	function update_surat_keluar(){
		$id = $this->input->post('id');
		$no_agenda = $this->input->post('no_agenda');
		$tgl_surat= $this->input->post('tgl_surat');
		$kode_arsip = $this->input->post('kode_arsip');	
		$no_surat = $this->input->post('no_surat');
		$tujuan = $this->input->post('tujuan');
		$perihal = $this->input->post('perihal');
		$asli_copy = $this->input->post('asli_copy');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'no_agenda' => $no_agenda,
				'kode_arsip' => $kode_arsip,
				'tgl_surat' => $tgl_surat,
				'no_surat' => $no_surat,
				'tujuan' => $tujuan,
				'perihal' => $perihal,
				'asli_copy' => $asli_copy,
				'keterangan' => $keterangan
			);
		$this->db->where('surat_id', $id);
		$this->db->update('tb_surat_keluar', $object); 

		redirect('admin/surat_keluar','refresh');
	}


	function hapus_surat_keluar($id){
		
		$this->model_admin->hapus_surat_keluar($id);
		redirect('admin/surat_keluar','refresh');
	}	

	/* Fungsi Manage User */
	function manage_user(){
		$a['data']	= $this->model_admin->tampil_user()->result_object();
		$a['page']	= "manage_user";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_user(){
		$a['page']	= "tambah_user";
		
		$this->load->view('admin/index', $a);
	}

	function insert_user(){
		
		$user 	  = $this->input->post('user');
		$pass = $this->input->post('pass');
		$nama	  = $this->input->post('nama');

		$object = array(
				'username' => $user,
				'password' => $pass,
				'nama' => $nama
			);
		$this->model_admin->insert_user($object);

		redirect('admin/manage_user','refresh');
	}

	function edit_user($id){
		$a['editdata']	= $this->model_admin->edit_user($id)->result_object();		
		$a['page']	= "edit_user";
		
		$this->load->view('admin/index', $a);
	}

	function update_user(){
		$id 	  = $this->input->post('id');
		$user 	  = $this->input->post('username');
		$password = $this->input->post('password');
		$pass_old = $this->input->post('password');
		$nama	  = $this->input->post('nama');

		if (empty($password)) {
			$object = array(
				'username' => $user,
				'password' => $password,
				'nama' => $nama
			);
		}else{
			$object = array(
				'username' => $user,
				'password' => $password,
				'nama' => $nama
			);
		}

		
		$this->model_admin->update_user($id, $object);

		redirect('admin/manage_user','refresh');
	}

	function hapus_user($id){
		
		$this->model_admin->hapus_user($id);
		redirect('admin/manage_user','refresh');
	}	


}

