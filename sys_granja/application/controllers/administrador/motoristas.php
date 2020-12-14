<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class motoristas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_motoristas");
	}
	
	public function index()
	{
		$data  = array(
			'motoristas' => $this->model_motoristas->getmotoristas()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/motoristas/motoristas',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function agregar()
	{
		$data  = array(
			'motoristas' => $this->model_motoristas->getmotoristas()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/motoristas/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function guardar(){

		$nombre = $this->input->post("nombre");
		$dui = $this->input->post("dui");
		$licencia = $this->input->post("licencia");
	
			$data  = array(
				'nombre' => $nombre,
				'dui' => $dui,
				'licencia' => $licencia,
				// 'fehca_grabacion' => date("Y-m-d H:i:s"),
				'estado' => "1"
			);
			

			if ($this->model_motoristas->save($data)) {
				$id_motorista = $this->model_motoristas->lastID();
				$this->session->set_flashdata('ok','motorista guardado');
				redirect(base_url()."administrador/motoristas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/motoristas/add");
			}
		}


	public function editar($id)
	{
		$data  = array(
			'motorista' => $this->model_motoristas->getmotorista($id),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/motoristas/editar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function modificar(){
		$idmotorista = $this->input->post("idmotorista");
		$nombre = $this->input->post("nombre");
		$dui = $this->input->post("dui");
		$licencia = $this->input->post("licencia");
		

		

		$motoristaActual = $this->model_motoristas->getmotorista($idmotorista);

		if ($dui == $motoristaActual->dui) {
			$is_unique = "";
		}else{
			$is_unique= '|is_unique[motoristas.dui]';
		}

		
			$data = array(
				'nombre' => $nombre, 
				'dui' => $dui,
				'licencia' => $licencia,
			);

			if ($this->model_motoristas->update($idmotorista,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/motoristas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."administrador/motoristas/editar/".$idmotorista);
			}
				

	}


	public function borrar($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_motoristas->update($id,$data);
		$this->session->set_flashdata('ok','Ok , motorista Eliminado');
		redirect(base_url()."administrador/motoristas");
	}

}
