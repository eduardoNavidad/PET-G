<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("model_usuarios");
	}
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."Administrador/AdminPanel");
		}
		else{
			$this->load->view("admin/login");
		}
		

	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->model_usuarios->login($username, md5($password));

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url()."Admin");
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->name,
				'nombre_completo' => $res->nombre_completo,
				'cod_empleado' => $res->cod_empleado,
				'area' => $res->area,
				'login' => TRUE
			);
			 $this->session->set_userdata($data);
			redirect(base_url()."Administrador/AdminPanel");
	       
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."Admin");
	}

	

}
