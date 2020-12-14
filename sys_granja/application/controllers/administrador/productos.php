<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."Admin");
		}
		$this->load->model("model_productos");
		$this->load->model("model_categorias");
	}
	
	public function index()
	{

		$data  = array(
			'productos' => $this->model_productos->getProductos(), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/productos/productos',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function agregar()
	{

		$data  = array(
			'categorias' => $this->model_categorias->getCategorias(), 
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/productos/agregar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function guardar(){
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precioe = $this->input->post("precioe");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");
		$precios = $this->input->post("precios");
		$minimo_inventario = $this->input->post("minimo_inventario");
		$inventario_inicial = $this->input->post("inventario_inicial");

		
			$data  = array(
				'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'precio_entrada' => $precioe,
				'precio_salida' => $precios,
				'stock' => $stock,
				'categoria_id' => $categoria,
				'minimo_inventario' => $minimo_inventario,
				'inventario_inicial' => $inventario_inicial,
				'estado' => "1"
			);

			if ($this->model_productos->save($data)) {
				$idproducto = $this->model_productos->lastID();
				$this->session->set_flashdata('ok','Producto guardado');
				redirect(base_url()."administrador/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/productos/agregar");
			}
		}


	public function editar($id)
	{

		$data  = array(
			'categorias' => $this->model_categorias->getCategorias(),
			 "producto" => $this->model_productos->getProducto($id)
		);

		$this->load->view('admin/templateAdmin/headerAdmin');

		$this->load->view('admin/templateAdmin/asideAdmin');

		$this->load->view('admin/templateAdmin/contentAdmin');

		$this->load->view('admin/productos/editar',$data);

		$this->load->view('admin/templateAdmin/footerAdmin');
	}

	public function modificar(){
		$idproducto = $this->input->post("idproducto");
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precioe = $this->input->post("precioe");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");
		$precios = $this->input->post("precios");
		$minimo_inventario = $this->input->post("minimo_inventario");
		$inventario_inicial = $this->input->post("inventario_inicial");

		$productoActual = $this->model_productos->getProducto($idproducto);

		if ($codigo == $productoActual->codigo) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[productos.codigo]';
		}

		
			$data  = array(
				'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'precio_entrada' => $precioe,
				'precio_salida' => $precios,
				'stock' => $stock,
				'categoria_id' => $categoria,
				'minimo_inventario' => $minimo_inventario,
				'inventario_inicial' => $inventario_inicial,
				'estado' => "1"
			);
			if ($this->model_productos->update($idproducto,$data)) {
				$this->session->set_flashdata('ok','Cambios Guardados');
				redirect(base_url()."administrador/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/productos/editar/".$idproducto);
			}
		}



	public function borrar($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->model_productos->update($id,$data);
		$this->session->set_flashdata('ok','Ok , Producto Eliminado');
		redirect(base_url()."administrador/productos");
	}

}
