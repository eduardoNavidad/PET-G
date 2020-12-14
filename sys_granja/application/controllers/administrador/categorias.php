<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model('model_categorias');
	}
	
	public function index()
	{
		$data  = array(
			'categorias' => $this->model_categorias->getCategorias(), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('admin/categorias/categorias',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function agregar()
	{
		$data  = array(
			'categorias' => $this->model_categorias->getCategorias(), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('admin/categorias/agregar');
		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function guardar(){
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
			$data  = array(
				'nombre' => $nombre, 
				'descripcion' => $descripcion,
				'estado' => "1"
			);
			if ($this->model_categorias->save($data)) {
				 $this->session->set_flashdata('ok','Categoria guardada');
				redirect(base_url()."administrador/categorias");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/categorias/add");
			}
	}

	public function editar($id)
	{
		$data  = array(
			'categoria' => $this->model_categorias->getCategoria($id), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('admin/categorias/editar',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}


	public function modificar(){
		$idCategoria = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$categoriaactual = $this->model_categorias->getCategoria($idCategoria);
		if ($nombre == $categoriaactual->nombre) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[categorias.nombre]";
		}
			$data = array(
				'nombre' => $nombre, 
				'descripcion' => $descripcion,
			);
			if ($this->model_categorias->update($idCategoria,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/categorias");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."administrador/categorias/editar/".$idCategoria);
			}
		}


	public function borrar($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_categorias->update($id,$data);
		$this->session->set_flashdata('ok','ok , Categoria Eliminada');
		redirect(base_url()."administrador/categorias");
	}


}
