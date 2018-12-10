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
	function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password,
			

			);
		$cek = $this->model_admin->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'id' => $id_user,
				'nama' => $username,
				'name'  => $nama,
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