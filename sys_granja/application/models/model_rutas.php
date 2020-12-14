<?php
class model_rutas extends CI_Model {

	
	public function get_rutas(){
		$this->db->select("p.*,d.nombre as departamento, m.nombre as municipio");
		$this->db->from("cat_rutas p");
		$this->db->join("cat_departamento d","p.departamento_id = d.id");
		$this->db->join("cat_municipio m","p.municipio_id = m.id");
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

	public function getmoto(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_motoristas");
		return $resultados->result();
	}

	public function gettrans(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_unidad_transporte");
		return $resultados->result();
	}

	public function getcliente(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_clientes");
		return $resultados->result();
	}

	public function getrutaa(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("cat_rutas");
		return $resultados->result();
	}

	public function getruta($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_rutas");
		return $resultado->row();
	}

	public function getasiganciones($id){
		$this->db->select("p.*,d.nombre as cliente, m.nombre as ruta ,p.ruta_id,o.nombre as motorista,q.nombre as unidad_transporte");
		$this->db->from("g_detalle_rutas p");
		$this->db->join("cat_clientes d","p.cliente_id = d.id");
		$this->db->join("cat_rutas m","p.ruta_id = m.id");
		$this->db->join("cat_motoristas o","p.motorista_id = o.id");
		$this->db->join("cat_unidad_transporte q","p.unidad_transporte_id = q.id");
		$this->db->where("ruta_id",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getasigancion($id){
		$this->db->select("p.*,d.nombre as cliente, m.nombre as ruta ,p.ruta_id, o.nombre as motorista,q.nombre as unidad_transporte");
		$this->db->from("g_detalle_rutas p");
		$this->db->join("cat_clientes d","p.cliente_id = d.id");
		$this->db->join("cat_rutas m","p.ruta_id = m.id");
		$this->db->join("cat_motoristas o","p.motorista_id = o.id");
		$this->db->join("cat_unidad_transporte q","p.unidad_transporte_id = q.id");
		$this->db->where("ruta_id",$id);
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getdetalleruta(){
		$this->db->select("p.*,d.nombre as cliente, m.nombre as ruta");
		$this->db->from("g_detalle_rutas p");
		$this->db->join("cat_clientes d","p.cliente_id = d.id");
		$this->db->join("cat_rutas m","p.rutas_id = m.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("cat_rutas",$data);
	}

	public function save_asignar($data){
		return $this->db->insert("g_detalle_rutas",$data);
	}

	public function lastID_asignar(){
		return $this->db->insert_id();
	}

	public function lastID(){
		return $this->db->insert_id();
	}
	
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("cat_rutas",$data);
	}


}