<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class landing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();
		$_SESSION['abreviatura']="mx";
		$_SESSION['direccion']="1";
		$this->load->model(array('menu_model'));
	}

	public function index()
	{
		redirect(base_url());
	}

public function SafoAbrir(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/safoAbrir.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function PorSiLasLluvias(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/porSiLasLluvias.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function EsDeMadrugada(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/esDeMadrugada.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function TraigoMuchasCompras(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/traigoMuchasCompras.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function ConfiaEnLosExpertos(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/confiaEnLosExpertos.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function PorTuSeguridad(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/porTuSeguridad.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

public function App(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/app_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

public function GarantizaTuEntrada(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidores";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['producto'] = "";

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['producto'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['producto'] = $this->uri->segment(5);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$this->load->view('layout/header_landing.php', $data);
		$this->load->view("sections/garantizaTuEntrada.php");
		$this->load->view('layout/footer_landing.php', $data);
	}

// public function haceFrio(){ // <----- nombre de la nueva función que controla el landing
// 		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
// 		$this->load->model('distribuidor_model');
// 		$data['maps']="distribuidores";

// 		$id_pais=$_SESSION['direccion'];
// 		$data['coordenadasPais']=null;
// 		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
// 		$data['logo_merik'] = base_url()."img/logo_merik.png";
// 		$data['producto'] = "";

// 		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
// 		{
// 			$data['producto'] = $this->uri->segment(3);
// 		}
// 		else if($this->uri->segment(5)!=FALSE)
// 		{
// 			$data['producto'] = $this->uri->segment(5);
// 		}

// 		if ( $this->uri->segment(4) === FALSE)
// 		{
// 			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
// 		}
// 		else
// 		{
// 			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
// 		}

// 		$data['coordenadas']=$this->distribuidor_model->getDistribuidores();
		
// 		$data['menu_principal']=$this->menu_model->menu_principal();
// 		$this->load->view('layout/header_landing.php', $data);
// 		$this->load->view("sections/haceFrio.php"); // <----- Cambiar
// 		$this->load->view('layout/footer_landing.php', $data);
// 	}

}

