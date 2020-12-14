<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proveedores extends CI_Controller {


	public function __construct(){
		parent::__construct();
		
		$this->load->model("model_proveedores");
	}

	public function index()
	{	
		$data  = array(
			'proveedores' => $this->model_proveedores->getproveedores(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/proveedores/proveedores',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');
    

	}


	public function agregar(){

		$data = array(
			"proveedores" => $this->model_proveedores->getproveedores()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/proveedores/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

		
	}

	public function guardar(){

		$nombreEmpresa = $this->input->post("nombreEmpresa");
		$NIT = $this->input->post("NIT");
		$RazonSocial = $this->input->post("RazonSocial");
		$direccion = $this->input->post("direccion");
		$email = $this->input->post("email");
		$telefono = $this->input->post("telefono");


			$data  = array(
				'nombreEmpresa' => $nombreEmpresa, 
				'NIT' => $NIT,
				'RazonSocial' => $RazonSocial,
				'direccion' => $direccion,
				'email' => $email,
				'telefono' => $telefono,
				'estado' => "1"
			);

			if ($this->model_proveedores->save($data)) {
				$this->session->set_flashdata('ok','Proveedor guardado');
				redirect(base_url()."administrador/proveedores");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/proveedores/agregar");
			}
		}
		
		

		
	
	public function editar($id){

		$data  = array(
			'proveedor' => $this->model_proveedores->getproveedor($id)
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/proveedores/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

		
	}


	public function modificar(){

		$idproveedor = $this->input->post("idproveedor");
		$nombreEmpresa = $this->input->post("nombreEmpresa");
		$NIT = $this->input->post("NIT");
		$RazonSocial = $this->input->post("RazonSocial");
		$direccion = $this->input->post("direccion");
		$email = $this->input->post("email");
		$telefono = $this->input->post("telefono");

		$proveedorActual = $this->model_proveedores->getproveedor($idproveedor);

		if ($NIT == $proveedorActual->NIT) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[proveedores.NIT]';
		}

		
			$data  = array(
				'nombreEmpresa' => $nombreEmpresa, 
				'NIT' => $NIT,
				'RazonSocial' => $RazonSocial,
				'direccion' => $direccion,
				'email' => $email,
				'telefono' => $telefono,
			);
			if ($this->model_proveedores->update($idproveedor,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/proveedores");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/proveedores/editar".$idproveedor);
			}
		}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_proveedores->update($id,$data);
		//echo "mantenimiento/proveedores";
		$this->session->set_flashdata('ok','Proveedore Eliminado');
		redirect(base_url()."administrador/proveedores");
	}
}