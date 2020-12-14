<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_productos");
		$this->load->model("model_inventario");
	}
	
	public function index()
	{
		$data  = array(
			'productos' => $this->model_inventario->getinventario(), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('inventario/inventario',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}


	public function abastecer()
	{
		$data  = array(
			'productos' => $this->model_inventario->getinventario(), 
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('inventario/abastecer',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function getproductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->model_inventario->getproductos($valor);
		echo json_encode($clientes);
		 exit();
	}

	public function guardar_ingreso(){
		
		$total = $this->input->post("subtotal");
		//input del detalle
		$idproductos = $this->input->post("idproductos");
		$precios = $this->input->post("precios");
		$cantidades = $this->input->post("cantidades");
		$importes = $this->input->post("importes");
		$data = array(
			'fecha' => date('Y-m-d'),
			'total' => $total,
			'usuario_id' => $this->session->userdata('id'),
			'tipo_operacion_id' => "1",
		);
		if ($this->model_inventario->save($data)) {
			$idventa = $this->model_inventario->lastID();
			$this->guardar_detalle($idproductos,$idventa,$precios,$cantidades,$importes);
			$this->guardar_historial($idproductos,$cantidades,$importes);
			$this->session->set_flashdata('ok','Ingreso guardado con exito');
			redirect(base_url()."inventario/inventario/abastecer");

		}else{
			redirect(base_url()."inventario/inventario/abastecer");
		}
	}

	protected function guardar_detalle($productos,$idventa,$precios,$cantidades,$importes){
		for ($i=0; $i < count($productos); $i++) { 
			$data  = array(
				'producto_id' => $productos[$i], 
				'compra_id' => $idventa,
				'precio' => $precios[$i],
				'cantidad' => $cantidades[$i],
				'importe'=> $importes[$i],
			);
			$this->model_inventario->save_detalle($data);
		}
	}

	protected function guardar_historial($productos,$cantidades,$importes){
		for ($i=0; $i < count($productos); $i++) { 
			$data  = array(
				'producto_id' => $productos[$i], 
				'cantidad' => $cantidades[$i],
				'fecha_movimiento' => date('Y-m-d'),
				'fecha_creacion' => date('Y-m-d'),
				'tipo_operacion_id' => "1",
				'usuario_id' => $this->session->userdata('id'),
			);
			$this->model_inventario->save_operacion($data);
			$this->actualizar_producto($productos[$i],$cantidades[$i]);
		}
	}

	protected function actualizar_producto($idproducto,$cantidad){
		$productoActual = $this->model_productos->getProducto($idproducto);
		$data = array(
			'stock' => $productoActual->stock + $cantidad, 
		);
		$this->model_productos->update($idproducto,$data);
	}

	public function ver_historial()
	{	
		$idproducto = $this->input->post("id");
		$data = array(
			"historiales" => $this->model_inventario->getmovimientos($idproducto),
			"producto"=>$this->model_productos->getProducto($idproducto),
		);
		$this->load->view('admin/templateAdmin/headerAdmin');
		$this->load->view('admin/templateAdmin/asideAdmin');
		$this->load->view('admin/templateAdmin/contentAdmin');
		$this->load->view('inventario/ver_historial',$data);
		$this->load->view('admin/templateAdmin/footerAdmin');
	}


	

   
	
}
