<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unidad_transporte extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_unidad_transportes");
	}
	
	public function index()
	{
		$data  = array(
			'unidad_transportes' => $this->model_unidad_transportes->getunidad_transportes()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/unidad_transportes/unidad_transportes',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function agregar()
	{
		$data  = array(
			'unidad_transportes' => $this->model_unidad_transportes->getunidad_transportes()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/unidad_transportes/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function guardar(){

		$nombre = $this->input->post("nombre");
		$modelo = $this->input->post("modelo");
		$placa = $this->input->post("placa");
	
			$data  = array(
				'Nombre' => $nombre,
				'Modelo' => $modelo,
				'Placa' => $placa,
				// 'fehca_grabacion' => date("Y-m-d H:i:s"),
				'estado' => "1"
			);
			

			if ($this->model_unidad_transportes->save($data)) {
				$id_unidad_transporte = $this->model_unidad_transportes->lastID();
				$this->session->set_flashdata('ok','unidad_transporte guardado');
				redirect(base_url()."administrador/unidad_transporte");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/unidad_transporte/agregar");
			}
		}


	public function editar($id)
	{
		$data  = array(
			'ut' => $this->model_unidad_transportes->getunidad_transporte($id),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/unidad_transportes/editar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function modificar(){
		$idunidad_transporte = $this->input->post("idunidad_transporte");
		$nombre = $this->input->post("nombre");
		$modelo = $this->input->post("modelo");
		$placa = $this->input->post("placa");
		

		

		$unidad_transporteActual = $this->model_unidad_transportes->getunidad_transporte($idunidad_transporte);

		if ($dui == $unidad_transporteActual->dui) {
			$is_unique = "";
		}else{
			$is_unique= '|is_unique[unidad_transportes.dui]';
		}

		
			$data = array(
				'Nombre' => $nombre,
				'Modelo' => $modelo,
				'Placa' => $placa,
			);

			if ($this->model_unidad_transportes->update($idunidad_transporte,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/unidad_transporte");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."administrador/unidad_transporte/editar/".$idunidad_transporte);
			}
				

	}


	public function borrar($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_unidad_transportes->update($id,$data);
		$this->session->set_flashdata('ok','Ok , unidad_transporte Eliminado');
		redirect(base_url()."administrador/unidad_transporte");
	}

}
