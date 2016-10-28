<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class producto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model(array('producto_model'));
		if (isset($_SESSION['abreviatura'])==FALSE)
		{
			redirect(base_url());
		}
	}

	public function index()
	{
		redirect(base_url());
	}

	public function detalle()
	{
		$data['galeria_producto'] = null;
		if ($this->uri->segment(3) === FALSE)
		{
			redirect(base_url());
		}
		else
		{
			$id_producto=(int)$this->uri->segment(3);
			$data['detalle_producto'] = $this -> producto_model -> getProducto($id_producto);
			if($_SESSION['abreviatura']=="mx")
			{
				if($data['detalle_producto']['galeria']=='1')
				{
					$data['galeria_producto'] = $this -> producto_model -> getGaleriaProducto($id_producto);
				}
				else
				{
					$data['galeria_producto'] = null;
				}
			}
			
			$this->load->view('sections/detalle_producto_view.php', $data);
		}
	}
}

