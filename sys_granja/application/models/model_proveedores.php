<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_proveedores extends CI_Model {
	public function getproveedores(){
		$this->db->select("c.*");
		$this->db->from("cat_proveedores c");
		$this->db->where("c.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getproveedor($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_proveedores");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("cat_proveedores",$data);
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_proveedores",$data);
	}

	
}