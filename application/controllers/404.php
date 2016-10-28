<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pais extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model(array('menu_model', 'producto_model'));
	}
	

	public function index()
	{
		if(isset($_SESSION['abreviatura']))
		{
			redirect(base_url().$_SESSION['abreviatura']."/home");
		}
		else
		{
			$this->getPais();
		}	
	}
	public function home()
	{
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['productos_nuevos'] = $this -> producto_model -> productos_nuevos_aleatorios();
		$this->load->view('layout/header_view.php', $data);
		$this->load->view('sections/home_view.php', $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function getPais()
	{
		
		$this->load->helper('geoiploc');
		$this->load->model('pais_model');

		if ($this->uri->segment(1) === FALSE || $this->uri->segment(1)=="pais")
		{
			//$ip = $_SERVER["REMOTE_ADDR"];
			$ip="191.98.224.0";
			$consulta_pais=substr(getCountryFromIP($ip, "NamE"), 0, 4);
			$data['pais']=$this->pais_model->getPais($consulta_pais);
			$_SESSION['abreviatura']=$data['pais']['Abreviatura'];
			$_SESSION['direccion']=$data['pais']['Direccion'];
			redirect(base_url().$_SESSION['abreviatura']."/home");
		}
		//$this->load->view('sections/residencial_view.php',$data);

	}
	public function ajaxcall()
	{
		echo "XD";
	}
}

