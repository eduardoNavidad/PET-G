<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gestion_usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_usuarios");

	}
	
	public function index()
	{
		$this->load->library('encryption');

		$data  = array(
			'usuarios' => $this->model_usuarios->getusuarios(), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/usuarios',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function agregar_usuario()
	{

		$data  = array(
			'usuarios' => $this->model_usuarios->getusuarios(),
			 'roles' => $this->model_usuarios->getroles(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/agregar_usuario',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function guardar_usuario(){

		$nombre = $this->input->post("nombre");
		$rol = $this->input->post("rol");
		$contraseña = $this->input->post("contraseña");
		$nombre_completo = $this->input->post("nombre_completo");
		$cod_empleado = $this->input->post("cod_empleado");
		$area = $this->input->post("area");

			$data  = array(
				'nombre' => $nombre, 
				'rol' => $rol,
				'contraseña' => md5($contraseña), 
				'nombre_completo' => $nombre_completo,
				'cod_empleado' => $cod_empleado, 
				'area' => $area,
				'estado' => "1"
			);

			if ($this->model_usuarios->saveUsuario($data)) {
				 $this->session->set_flashdata('ok','Usuario guardado');
				redirect(base_url()."administrador/gestion_usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/gestion_usuarios/agregar_usuario");
			}
	}

	public function editar_usuario($id)
	{

		$data  = array(
			'usuario' => $this->model_usuarios->getUsuario($id),
			'roles' => $this->model_usuarios->getroles(), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/editar_usuario',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function modificar_usuario(){

		$idusuario = $this->input->post("idusuario");
		$nombre = $this->input->post("nombre");
		$rol = $this->input->post("rol");
		$contraseña = $this->input->post("contraseña");
		$nombre_completo = $this->input->post("nombre_completo");
		$cod_empleado = $this->input->post("cod_empleado");
		$area = $this->input->post("area");

		$usuarioActual = $this->model_usuarios->getUsuario($idusuario);

		if ($nombre == $usuarioActual->nombre) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[usuarios.nombre]';
		}

		
			$data  = array(
				'nombre' => $nombre, 
				'rol' => $rol,
				'contraseña' => md5($contraseña), 
				'nombre_completo' => $nombre_completo,
				'cod_empleado' => $cod_empleado, 
				'area' => $area
			);
			if ($this->model_usuarios->updateUsuarios($idusuario,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/gestion_usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/gestion_usuarios/editar_usuario".$idusuario);
			}
		}

	public function borrar_usuario($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_usuarios->updateUsuarios($id,$data);
		$this->session->set_flashdata('ok','ok , Usuario Eliminado');
		redirect(base_url()."administrador/gestion_usuarios");
	}

	//****************************************CRUD ROLES ************************************************************

	public function roles()
	{
		$data  = array(
			'roles' => $this->model_usuarios->getroles(), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/roles',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');
		
	}

	public function agregar_rol()
	{

		$data  = array(
			'usuarios' => $this->model_usuarios->getusuarios(),
			 'roles' => $this->model_usuarios->getroles(),
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/agregar_rol',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}

	public function guardar_rol(){

		$nombre = $this->input->post("nombre");

			$data  = array(
				'nombre' => $nombre, 
				'estado' => "1"
			);

			if ($this->model_usuarios->saveRol($data)) {
				 $this->session->set_flashdata('ok','Rol guardado');
				redirect(base_url()."administrador/gestion_usuarios/roles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/gestion_usuarios/agregar_rol");
			}
	}

	public function editar_rol($id)
	{

		$data  = array(
			'rol' => $this->model_usuarios->getrol($id), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/gestion_usuarios/editar_rol',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');

	}


	public function modificar_rol(){

		$idrol = $this->input->post("idrol");
		$nombre = $this->input->post("nombre");
		
		$rolActual = $this->model_usuarios->getrol($idrol);

		if ($nombre == $rolActual->nombre) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[roles.nombre]";

		}
			$data = array(
				'nombre' => $nombre, 
			);

			if ($this->model_usuarios->updateRoles($idrol,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/gestion_usuarios/roles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."administrador/gestion_usuarios/editar_rol/".$idrol);
			}
		}


	public function borrar_rol($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_usuarios->updateRoles($id,$data);
		$this->session->set_flashdata('ok','ok , Rol Eliminado');
		redirect(base_url()."administrador/gestion_usuarios/roles");
	}

}
