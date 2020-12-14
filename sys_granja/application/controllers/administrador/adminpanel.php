<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminpanel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_productos");
	}
	
	public function index()
	{	
		$data  = array(
			'productos' => $this->model_productos->getProductos(), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('admin/paneladmin',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}

}
