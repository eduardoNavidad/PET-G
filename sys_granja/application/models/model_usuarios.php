<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_usuarios extends CI_Model {

	public function login($username, $password){
		$this->db->where("nombre", $username);
		$this->db->where("contraseña", $password);
		
		$resultados = $this->db->get("g_usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}


	public function getusuarios(){
		$this->db->select("p.*,c.nombre as rol");
		$this->db->from("g_usuarios p");
		$this->db->join("g_roles c","p.rol = c.id");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuario($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("g_usuarios");
		return $resultado->row();
	}
	public function saveUsuario($data){
		return $this->db->insert("g_usuarios",$data);
	}

	public function updateUsuarios($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("g_usuarios",$data);
	}

	public function lastIDUsuarios(){
		return $this->db->insert_id();
	}


	public function getroles(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("g_roles");
		return $resultados->result();
	}

	public function getrol($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("g_roles");
		return $resultado->row();
	}
	public function saveRol($data){
		return $this->db->insert("g_roles",$data);
	}

	public function updateRoles($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("g_roles",$data);
	}

	public function lastIDRoles(){
		return $this->db->insert_id();
	}

}
