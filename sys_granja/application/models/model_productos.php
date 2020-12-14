<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_productos extends CI_Model {

	public function getProductos(){
		$this->db->select("p.*,c.nombre as categoria");
		$this->db->from("cat_productos p");
		$this->db->join("cat_categorias_productos c","p.categoria_id = c.id");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function getProducto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_productos");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("cat_productos",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_productos",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function save_operacion($data){
		$this->db->insert("operacion",$data);
	}

}