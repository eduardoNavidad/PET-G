<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_clientes");
	}
	
	public function index()
	{
		$data  = array(
			'clientes' => $this->model_clientes->getClientes()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/clientes/clientes',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function agregar()
	{
		$data  = array(
			'tiposclientes' => $this->model_clientes->getTipoClientes(),
			'giros' => $this->model_clientes->getgiros(),
			'departamentos' => $this->model_clientes->getdepa(),
			'municipios' => $this->model_clientes->getmuni(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/clientes/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function guardar(){

		$nombre = $this->input->post("nombre");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$celular = $this->input->post("celular");
		$dui = $this->input->post("dui");
		$nit = $this->input->post("nit");
		$registro = $this->input->post("registro");
		$email = $this->input->post("email");
		$tipo_cliente_id = $this->input->post("tipo_cliente_id");
		$giro_id = $this->input->post("giro_id");
		$departamento = $this->input->post("departamento");
		$municipio = $this->input->post("municipio");
		$ruta_id = $this->input->post("giro_id");
	
			$data  = array(
				'nombre' => $nombre, 
				'telefono' => $telefono,
				'direccion' => $direccion,
				'celular' => $celular,	
				'dui' => $dui,
				'nit' => $nit,
				'registro' => $registro,
				'email' => $email,
				'tipo_cliente_id' => $tipo_cliente_id,
				'giro_id' => $giro_id,
				'departamento_id' => $departamento,
				'municipio_id' => $municipio,
				'ruta_id' => $ruta_id,
				'fehca_grabacion' => date("Y-m-d H:i:s"),
				'estado' => "1"
			);
			

			if ($this->model_clientes->save($data)) {
				$id_cliente = $this->model_clientes->lastID();
				$this->session->set_flashdata('ok','Cliente guardado');
				redirect(base_url()."administrador/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/clientes/add");
			}
		}


	public function editar($id)
	{
		$data  = array(
			'cliente' => $this->model_clientes->getCliente($id),
			'tiposclientes' => $this->model_clientes->getTipoClientes(),
			'giros' => $this->model_clientes->getgiros(),
			'departamentos' => $this->model_clientes->getdepa(),
			'municipios' => $this->model_clientes->getmuni(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/clientes/editar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function modificar(){
		$idcliente = $this->input->post("idcliente");
		$nombre = $this->input->post("nombre");
		$telefono = $this->input->post("telefono");
		$direccion = $this->input->post("direccion");
		$celular = $this->input->post("celular");
		$dui = $this->input->post("dui");
		$nit = $this->input->post("nit");
		$registro = $this->input->post("registro");
		$email = $this->input->post("email");
		$tipo_cliente_id = $this->input->post("tipo_cliente_id");
		$giro_id = $this->input->post("giro_id");
		$departamento = $this->input->post("departamento");
		$municipio = $this->input->post("municipio");
		$ruta_id = $this->input->post("giro_id");

		

		$clienteActual = $this->model_clientes->getCliente($idcliente);

		if ($num_documento == $clienteActual->num_documento) {
			$is_unique = "";
		}else{
			$is_unique= '|is_unique[clientes.num_documento]';
		}

		
			$data = array(
				'nombre' => $nombre, 
				'telefono' => $telefono,
				'direccion' => $direccion,
				'celular' => $celular,	
				'dui' => $dui,
				'nit' => $nit,
				'registro' => $registro,
				'email' => $email,
				'tipo_cliente_id' => $tipo_cliente_id,
				'giro_id' => $giro_id,
				'departamento_id' => $departamento,
				'municipio_id' => $municipio,
				'ruta_id' => $ruta_id,
			);

			if ($this->model_clientes->update($idcliente,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/clientes");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."administrador/clientes/editar/".$idcliente);
			}
				

	}


	public function borrar($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_clientes->update($id,$data);
		$this->session->set_flashdata('ok','Ok , Cliente Eliminado');
		redirect(base_url()."administrador/clientes");
	}

}
