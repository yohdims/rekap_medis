<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	var $data;
	var $hak_akses="admin";
	function __construct() {
		parent::__construct();
	}
	public function index()
	{
		
		$this->data['judul_tab'] = 'Login';

		$this->load->view('login', $this->data);
	}

	public function login(){
		$username			= $this->input->post('username');
		$password			= $this->input->post('password');
		$poli			= $this->input->post('poli');
		$data = array(
			'username' => $username,
			'password' => $password
		);
		$user=$this->M_User->login($data);
		if(!empty($user)){
	 		$begin = date('Y-m-d');
          	$end = date('Y-m-d', strtotime('+1 weeks'));
			$data_session = array(
				'id_user' => $user->id_user,
				'username' => $user->username,
				'nama' => $user->nama,
				'poli' => $poli,
				'hak_akses' => $user->hak_akses,
				'tgl_sekarang' => $begin,
				'tgl_batas' => $end ,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			
			redirect(base_url($user->hak_akses."/page"));
		}else {
			redirect(base_url('page/login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}