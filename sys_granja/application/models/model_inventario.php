<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_inventario extends CI_Model {

	public function getinventario(){
		$this->db->select("p.*,c.nombre as categoria");
		$this->db->from("cat_productos p");
		$this->db->join("cat_categorias_productos c","p.categoria_id = c.id");
		$this->db->where("p.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getproductos($valor){
		$this->db->select("id,codigo,nombre as label,precio_entrada as precio,stock");
		$this->db->from("cat_productos");
		$this->db->like("nombre",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function getProducto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("cat_productos");
		return $resultado->row();
	}

	public function save($data){
		return $this->db->insert("inv_compras",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("inv_compras",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function save_operacion($data){
		$this->db->insert("inv_historital_inventario",$data);
	}

	public function save_detalle($data){
		$this->db->insert("inv_detalle_compra",$data);
	}

	public function getmovimientos($id){
		$this->db->select(" * ,o.id ,o.cantidad, p.nombre ,t.nombre as operacion , o.tipo_operacion_id as movimiento, o.fecha_movimiento, u.nombre as usuario");
		$this->db->from("inv_historital_inventario o");
		$this->db->join("cat_productos p","o.producto_id=p.id");
		$this->db->join("cat_tipo_operacion t","o.tipo_operacion_id=t.id");
		$this->db->join("g_usuarios u", "o.usuario_id = u.id");
		$this->db->where("o.producto_id =",$id);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

}