<?php
class model_clientes extends CI_Model {

	
	public function getClientes(){
		$this->db->select("p.*,c.nombre as tipo_cliente,g.descripcion as giro,d.nombre as departamento, m.nombre as municipio");
		$this->db->from("cat_clientes p");
		$this->db->join("cat_tipo_clientes c","p.tipo_cliente_id = c.id");
		$this->db->join("cat_giros g","p.giro_id = g.idactividad");
		$this->db->join("cat_departamento d","p.departamento_id = d.id");
		$this->db->join("cat_municipio m","p.municipio_id = m.id");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getgiros(){
		$this->db->where("eliminado","1");
		$resultados = $this->db->get("cat_giros");
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

	public function getCliente($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_clientes");
		return $resultado->row();

	}

	public function save($data){
		return $this->db->insert("cat_clientes",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}
	
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_clientes",$data);
	}

	public function getTipoClientes(){
		$resultados = $this->db->get("cat_tipo_clientes");
		return $resultados->result();
	}

}