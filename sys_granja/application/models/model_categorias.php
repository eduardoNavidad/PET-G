<?php
class model_categorias extends CI_Model {

	public function getCategorias(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_categorias_productos");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("cat_categorias_productos",$data);
	}
	public function getCategoria($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_categorias_productos");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_categorias_productos",$data);
	}
}