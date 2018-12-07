<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('admin_valid') == TRUE ){
			redirect("admin");
		}
		
		$this->load->view('login');
	}

/*	public function do_login()
	{
		$u = $this->input->post("username");
		$p = md5($this->input->post("password"));
		
		// echo json_encode('user' => $user, 'pass' => $pass);
		// echo $u."<br>".$p;

		$cari = $this->model_admin->cek_login($u, $p)->row();
		$hitung = $this->model_admin->cek_login($u, $p)->num_rows();


		if ($hitung > 0) {
			
			$data = array('admin_id' => $cari->id_user ,
							'admin_user' => $cari->username, 
							'admin_nama' => $cari->nama,
							'admin_valid' => TRUE
			);

			$this->session->set_userdata($data);

			redirect('admin');
		}else{
			echo "maaf username atau password salah";
		}
		
		
		
	}*/
		/*public function do_login() {
		$u 		= $this->security->xss_clean($this->input->post('username'));
	
        $p 		= md5($this->security->xss_clean($this->input->post('password')));
         
		$q_cek	= $this->db->query("SELECT * FROM admin WHERE username = '".$u."' AND password = '".$p."'");
		$j_cek	= $q_cek->num_rows();
		$d_cek	= $q_cek->row();
		//echo $this->db->last_query();
		
        if($j_cek == 1) {
            $data = array(
                    'admin_id' => $d_cek->id,
                    'admin_user' => $d_cek->username,
                    'admin_password' => $d_cek->passsword,		
					'admin_valid' => true
                    );
            $this->session->set_userdata($data);
            redirect('admin');
        } else {	
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">username or password is not valid</div>");
			redirect('login');
		}
	}
*/	
	function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_admin->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'id' => $id_user,
				'nama' => $username,
				'status' => "login",
				'admin_valid' => true
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">username or password is not valid</div>");
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */