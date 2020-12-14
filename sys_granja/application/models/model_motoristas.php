<?php
class model_motoristas extends CI_Model {

	
	public function getmotoristas(){
		$this->db->select("p.*");
		$this->db->from("cat_motoristas p");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}


	public function getdepa(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_departamento");
		return $resultados->result();
	}

	public function getmuni(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_municipio");
		return $resultados->result();
	}

	public function getmotorista($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_motoristas");
		return $resultado->row();

	}

	public function save($data){
		return $this->db->insert("cat_motoristas",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}
	
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_motoristas",$data);
	}

	public function getTipomotoristas(){
		$resultados = $this->db->get("cat_tipo_motoristas");
		return $resultados->result();
	}

}