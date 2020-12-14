<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rutas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_rutas");
		$this->load->model("model_clientes");
		$this->load->model("model_motoristas");
	}
	
	public function index()
	{
		$data  = array(
			'rutas' => $this->model_rutas->get_rutas()
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('rutas/rutas',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function agregar()
	{
		$data  = array(
			'departamentos' => $this->model_rutas->getdepa(),
			'municipios' => $this->model_rutas->getmuni(),
			'motoristas' => $this->model_rutas->getmoto(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('rutas/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function guardar(){

		$nombre = $this->input->post("nombre");
		$lunes = $this->input->post("lunes");
		$martes = $this->input->post("martes");
		$miercoles = $this->input->post("miercoles");
		$jueves = $this->input->post("jueves");
		$viernes = $this->input->post("viernes");
		$sabado = $this->input->post("sabado");
		$domingo = $this->input->post("domingo");
		$departamento = $this->input->post("departamento");
		$municipio = $this->input->post("municipio");
		
	
			$data  = array(
				'nombre' => $nombre, 
				'lunes' => $lunes,
				'martes' => $martes,
				'miercoles' => $miercoles,	
				'jueves' => $jueves,
				'viernes' => $viernes,
				'sabado' => $sabado,
				'domingo' => $domingo,
				'departamento_id' => $departamento,
				'municipio_id' => $municipio,
				'estado' => "1"
			);
			

			if ($this->model_rutas->save($data)) {
				$id_cliente = $this->model_rutas->lastID();
				$this->session->set_flashdata('ok','Ruta guardada');
				redirect(base_url()."rutas/rutas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."rutas/rutas/agregar");
			}
		}

	public function asignar()
	{
		$data  = array(
			'clientes' => $this->model_rutas->getcliente(),
			'rutas' => $this->model_rutas->getrutaa(),
			'motoristas' => $this->model_rutas->getmoto(),
			'unidad_transportes' => $this->model_rutas->gettrans(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('rutas/asignar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function guardar_asignar(){

		$cliente = $this->input->post("cliente");
		$ruta = $this->input->post("ruta");
		$motorista = $this->input->post("motorista");
		$unidad_transporte = $this->input->post("unidad_transporte");
		
	
			$data  = array(
				'cliente_id' => $cliente,
				'ruta_id' => $ruta,
				'motorista_id' => $motorista,
				'unidad_transporte_id' => $unidad_transporte
			);
			

			if ($this->model_rutas->save_asignar($data)) {
				$id_cliente = $this->model_rutas->lastID_asignar();
				$this->session->set_flashdata('ok','Ruta Asignada');
				redirect(base_url()."rutas/rutas");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."rutas/rutas/agregar");
			}
		}


	public function asignacion($id)
	{
		$data  = array(
			'detalles' => $this->model_rutas->getasiganciones($id),
			'ruta' => $this->model_rutas->getruta($id),
			'clientes' => $this->model_rutas->getcliente(),
			'rutas' => $this->model_rutas->getrutaa(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('rutas/asignacion',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

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
				'departamento' => $departamento,
				'municipio' => $municipio,
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
