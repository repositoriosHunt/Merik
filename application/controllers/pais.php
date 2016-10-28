<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pais extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		session_start();

		if(!isset($_SESSION['abreviatura']) && $this->uri->segment(1)!=FALSE && $this->uri->segment(1)!="tp")
		{
			$this->link();
		}
		else if (isset($_SESSION['abreviatura']) && $this->uri->segment(1)!=FALSE && $_SESSION['abreviatura']!=$this->uri->segment(1))
		{
			$this->getPaisUri();
		}
		else if (!isset($_SESSION['abreviatura']) && $this->uri->segment(1)!="tp")
		{
			redirect(base_url()."tp/getPais");
		}
		else if($this->uri->segment(1) === FALSE || $this->uri->segment(1)=="pais")
		{
			redirect(base_url().$_SESSION['abreviatura']."/");
		}
		$this->load->model(array('menu_model', 'producto_model'));
	}
	

	public function index()
	{
		if(isset($_SESSION['abreviatura']))
		{
			redirect(base_url().$_SESSION['abreviatura']."/");
		}
		else
		{
			$this->getPais();
		}	
	}

	public function link()
	{
		$this->load->model('pais_model');
		$data['pais'] = $this -> pais_model -> getPaisByAbreviatura($this->uri->segment(1));
		if($data['pais']['Encontrado'])
		{
			$_SESSION['abreviatura']=$data['pais']['Abreviatura'];
			$_SESSION['direccion']=$data['pais']['Direccion'];
			redirect(base_url().$this->uri->uri_string());
		}
		else
		{
			redirect("/");
		}
		
	}

	public function home()
	{
		$this->load->model('img_model');

		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$data['productos_nuevos'] = $this -> producto_model -> productos_nuevos_aleatorios();
		$data['imagenes_home'] = $this -> img_model -> getImagenesHome();
		$this->load->view('layout/header_view.php', $data);
		$this->load->view('sections/home_view.php', $data);
		$this->load->view('layout/footer_view_home.php', $data);
	}

	public function getPais()
	{
		
		$this->load->helper('geoiploc');
		$this->load->model('pais_model');

		if ($this->uri->segment(1) === FALSE || $this->uri->segment(1)=="pais" || $this->uri->segment(1)=="tp")
		{
			$ip = $_SERVER["REMOTE_ADDR"];
			//$ip="132.254.0.0";
			$consulta_pais=substr(getCountryFromIP($ip, "NamE"), 0, 4);
			$data['pais']=$this->pais_model->getPais($consulta_pais);
			$_SESSION['abreviatura']=$data['pais']['Abreviatura'];
			$_SESSION['direccion']=$data['pais']['Direccion'];
			redirect(base_url().$_SESSION['abreviatura']."/");
		}
		//$this->load->view('sections/residencial_view.php',$data);

	}

	public function getPaisUri()
	{
		$this->load->model('pais_model');
		$data['pais'] = $this -> pais_model -> getPaisByAbreviatura($this->uri->segment(1));
		if($data['pais']['Encontrado'])
		{
			$_SESSION['abreviatura']=$data['pais']['Abreviatura'];
			$_SESSION['direccion']=$data['pais']['Direccion'];
		}
		else
		{
			redirect("/");
		}
	}

	public function to()
	{
		$this->load->model('pais_model');

		if ($this->uri->segment(3) === FALSE)
		{
			$this -> getPais();
			$datos_pais=null;
		}
		else
		{
			$datos_pais = $this -> pais_model -> getPaisByAbreviatura($this->uri->segment(3));
		}

		$_SESSION['abreviatura']=$datos_pais['Abreviatura'];
		$_SESSION['direccion']=$datos_pais['Direccion'];
		redirect(base_url().$_SESSION['abreviatura']."/");
	}

	public function buscador()
	{
		
		$this->load->model('distribuidor_model');
		$this->load->model('noticias_model');
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		if(isset($_GET['campo_buscar']))
			$data['campo_buscar'] = strip_tags($_GET['campo_buscar']);
		else
			$data['campo_buscar'] = "";

		$data['error_cadena_buscar']="";
		
		if($data['campo_buscar'] =="")
			$data['error_cadena_buscar'] = "Escriba una palabra para iniciar la busqueda";
		else if(strlen( $data['campo_buscar'] )<3)
			$data['error_cadena_buscar'] = "Se requiere 3 caracteres como minimo para realizar una busqueda";
		else if(strlen( $data['campo_buscar'] )>200)
			$data['error_cadena_buscar'] = "No se debe exceder los 200 caracteres para realizar una busqueda";

		if($data['error_cadena_buscar']!="")
		{
			$data['productos']=null;
			$data['noticias']=null;
			$data['distribuidores']=null;
			$data['distribuidoresTM']=null;
		}
		else
		{
			$data['productos'] = $this -> producto_model -> buscarProductos($data['campo_buscar']);
			$data['noticias'] = $this -> noticias_model -> buscarNoticias($data['campo_buscar']);
			$data['distribuidores'] = $this -> distribuidor_model -> buscarDistribuidores($data['campo_buscar']);
			$data['distribuidoresTM'] = $this -> distribuidor_model -> buscarDistribuidoresTM($data['campo_buscar']);
		}


		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();

		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view('sections/buscar_view.php', $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function productos()
	{
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$seccion_producto = 'residencial';
		$familia_producto = '';

		if ($this->uri->segment(3) === FALSE)
		{
			redirect($data['url_base']."productos/residencial/");
		}
		else
		{
			$seccion_producto = $this->uri->segment(3);
			if ($this->uri->segment(4) === FALSE)
				$familia_producto="";
			else
				$familia_producto = str_replace("_", " ", $this->uri->segment(4));;
		}

		$data['sub_menu'] = $this -> menu_model -> getMenuSubByName($seccion_producto);

		if($data['sub_menu']['Id_Menu_Sub']>0)
		{
			$data['menu_lateral'] = $this -> menu_model -> productos_familias($data['sub_menu']['Id_Menu_Sub']);
		} 
		else
		{
			redirect($data['url_base']."productos/residencial/");
		}

		if($data['menu_lateral'][0]['Id_Familia']>0  && $familia_producto=="")
		{
			$familia_producto=$data['menu_lateral'][0]['Familia'];
			$data['productos'] = $this -> producto_model -> getProductosByFamilia($familia_producto);
		}
		else if($familia_producto!="")
		{
			$data['productos'] = $this -> producto_model -> getProductosByFamilia($familia_producto);
		}
		else
		{
			redirect($data['url_base']."productos/residencial");
		}

		$data['complementos']=null;

		if($data['productos']==null)
		{
			redirect($data['url_base']."productos/residencial");
		}
		else
		{
			$data['complementos']= $this->producto_model -> getComplementos($data['productos'][0]['Complementos']);
		}	
			 
		$data['familia_actual']=$familia_producto;
		$data['id_seccion_actual']=$data['sub_menu']['Id_Menu_Sub'];
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();

		$this->load->view('layout/header_productos_view.php', $data);
		$this->load->view('sections/productos_view.php', $data);
		$this->load->view('layout/footer_view.php', $data);
		
		
	}
	public function quienes_somos(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$data['abreviatura'] = $id_pais=$_SESSION['abreviatura'];
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/quienes_view.php");
		$this->load->view('layout/footer_view.php', $data);

	}

	public function distribuidores()
	{
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
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/distribuidores_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function tiendas_merik()
	{
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

		$data['coordenadas']=$this->distribuidor_model->getDistribuidoresTM();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/tiendas_merik_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function ver_distribuidor()
	{
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidor";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['id_distribuidor'] = 0;

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['id_distribuidor'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['id_distribuidor'] = $this->uri->segment(5);
		}
		else
		{
			redirect($data['url_base']);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidoresById($data['id_distribuidor']);
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/distribuidor_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function ver_tienda_merik()
	{
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="distribuidor";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";
		$data['id_distribuidor'] = 0;

		if($this->uri->segment(3)!=FALSE && $this->uri->segment(4)===FALSE)
		{
			$data['id_distribuidor'] = $this->uri->segment(3);
		}
		else if($this->uri->segment(5)!=FALSE)
		{
			$data['id_distribuidor'] = $this->uri->segment(5);
		}
		else
		{
			redirect($data['url_base']);
		}

		if ( $this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getDistribuidoresById($data['id_distribuidor']);
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/tienda_merik_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function sucursales()
	{
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$this->load->model('distribuidor_model');
		$data['maps']="sucursales";

		$id_pais=$_SESSION['direccion'];
		$data['coordenadasPais']=null;
		$data['logo_dam'] = base_url()."img/Logo_distribuidor.png";
		$data['logo_merik'] = base_url()."img/logo_merik.png";

		if ($this->uri->segment(4) === FALSE)
		{
			$data['coordenadas_pais'] = $this->distribuidor_model->getCoordenadasByIdPais($id_pais);
		}
		else
		{
			$data['coordenadas_pais'] = array('Coordenadas_Lat' => $this->uri->segment(3), 'Coordenadas_Lon' => $this->uri->segment(4), 'Zoom' => 15);
		}

		$data['coordenadas']=$this->distribuidor_model->getSucursales();
		
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/sucursales_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function contacto(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";


		if($this->uri->segment(3)!=FALSE)
		{
			$data['proveedor_seleccionado'] = $this->uri->segment(3);
		}
		if($this->uri->segment(4)!=FALSE)
		{
			$data['producto_seleccionado'] = explode("_", $this->uri->segment(4));
		}

		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$data['menu_ciudades'] = $this -> menu_model -> getCiudades();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/contacto_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function privacidad(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/privacidad_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function gracias(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/gracias_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function imagina_crea_construye(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/imagina_view.php", $data);
		$this->load->view('layout/footer_view.php', $data);
	}

	// public function app(){
	// 	$data['url_base']=base_url().$_SESSION['abreviatura']."/";

	// 	$data['menu_principal']=$this->menu_model->menu_principal();
	// 	$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
	// 	$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
	// 	$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
	// 	$this->load->view('layout/header_secciones_view.php', $data);
	// 	$this->load->view("sections/app_view.php", $data);
	// 	$this->load->view('layout/footer_view.php', $data);
	// }

	public function imgCaptcha(){
	$ranStr = md5(microtime());
	$ranStr = substr($ranStr, 0, 6);
	$_SESSION['cap_code'] = $ranStr;
	$newImage = imagecreatefromjpeg(base_url()."img/cap_bg.jpg");
	$txtColor = imagecolorallocate($newImage, 0, 101, 121);

	imagestring($newImage, 5, 5, 5, $ranStr, $txtColor);
	header("Content-type: image/jpeg");
	imagejpeg($newImage);

	}
	public function alianzas(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/ida_view.php");
		$this->load->view('layout/footer_view.php', $data);
	}
	public function atraccion_talento(){
		date_default_timezone_set('America/Mexico_City');
		ini_set('max_execution_time', 300);
		error_reporting(E_ERROR | E_PARSE);
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('bolsa_model');

		//post
		if(isset($_POST['btn_enviar']) && $_POST['btn_enviar']=="Enviar")
		{
			$this -> form_validation -> set_rules('nombre', 'Nombre', 'trim|required|min_length[1]|max_length[200]|xss_clean');
			$this -> form_validation -> set_rules('dia_nacimiento', 'Dia de Nacimiento', 'trim|required|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('mes_nacimiento', 'Mes de Nacimiento', 'trim|required|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('anio_nacimiento', 'Año de Nacimiento', 'trim|required|integer|min_length[1]|max_length[4]|xss_clean');
			$this -> form_validation -> set_rules('nivel_estudios', 'Escolaridad', 'trim|required|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('especialidad', 'Especialidad', 'trim|required|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('pretensiones', 'Pretensiones Economicas', 'trim|required|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('ciudad', 'Estado de residencia', 'trim|required|integer|min_length[1]|max_length[3]|xss_clean');
			$this -> form_validation -> set_rules('admin_sel', 'Administracion', 'trim|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('electric_sel', 'Equipos Electronicos', 'trim|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('almacen_sel', 'Almacenes', 'trim|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('contabilidad_sel', 'Contabilidad', 'trim|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('personal_sel', 'Administracion de personal', 'trim|integer|min_length[1]|max_length[2]|xss_clean');
			$this -> form_validation -> set_rules('cv', 'CV Requerido', 'trim|min_length[1]|max_length[250]|xss_clean');


			$this->form_validation->set_message('required', 'Campo %s Requerido');
			$this->form_validation->set_message('min_length', 'En el %s se requiere %s caracteres como minimo');
			$this->form_validation->set_message('max_length', 'En el %s no puedes exceder %s caracteres');

			if ($this->form_validation->run() != FALSE)
			{
				$path = "cv_77a/";
				$config['upload_path'] = $path;
				$config['file_name'] = "cv_".$_POST['nombre'].date("Y_m_d_h_i_sa");
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = "50000";

				$this->load->library('upload', $config);
				//var_dump($_POST);
				if (!$this->upload->do_upload("cv")) {
					//*** ocurrio un error
					
					$data['upload_error'] = $this->upload->display_errors();
					//return;
				}
				else
				{
					$data['uploadSuccess'] = $this->upload->data();

					if(isset($_POST["admin_sel"]))
					{
						$sel_administracion=$_POST["admin_sel"];
					}
					else
					{
						$sel_administracion = "";
					}

					if(isset($_POST["electric_sel"]))
					{
						$sel_equipo_electrico=$_POST["electric_sel"];
					}
					else
					{
						$sel_equipo_electrico = "";
					}

					if(isset($_POST["almacen_sel"]))
					{
						$sel_almacen=$_POST["almacen_sel"];
					}
					else
					{
						$sel_almacen = "";
					}

					if(isset($_POST["contabilidad_sel"]))
					{
						$sel_contabilidad=$_POST["contabilidad_sel"];
					}
					else
					{
						$sel_contabilidad = "";
					}

					if(isset($_POST["personal_sel"]))
					{
						$sel_personal=$_POST["personal_sel"];
					}
					else
					{
						$sel_personal = "";
					}

					$datos = array(
						"Nombre"=>$_POST['nombre'],
						"Fecha_Nacimiento"=>$_POST["anio_nacimiento"]."-".$_POST["mes_nacimiento"]."-".$_POST["dia_nacimiento"],
						"Nivel_Estudio"=>$_POST["nivel_estudios"],
						"Especialidad"=>$_POST["especialidad"],
						"Pretencion_Economica"=>$_POST["pretensiones"],
						"Estado"=>$_POST["ciudad"],
						"Fecha"=>date("Y-m-d h:i:s"),
						"Procedencia"=>"",
						"Exp_Administracion"=>$sel_administracion,
						"Exp_equipo_Electrico" => $sel_equipo_electrico,
						"Exp_Almacen" => $sel_almacen,
						"Exp_Contabilidad" => $sel_contabilidad,
						"Exp_Personal" => $sel_personal,
						"CV"=>$path.$data['uploadSuccess']['file_name']
						);

					
					$data['insert']=$this->bolsa_model->insertar($datos);
					if($data!=null)
					{
						header("Location: ".$data['url_base']."gracias");
					}
					
				}

				}
			else
			{
				$this -> atraccion_talento();
			}
		}
		//pos cv


		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/bolsa_view.php");
		$this->load->view('layout/footer_view.php', $data);
	}

// Landings

public function noticias(){
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$id_pais=$_SESSION['direccion'];
		$this->load->model('noticias_model');
		$data['noticias']=$this->noticias_model->getNoticias();
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/noticias_view.php",$data);
		$this->load->view('layout/footer_view.php', $data);
	}

	public function noticia(){
		
		$data['url_base']=base_url().$_SESSION['abreviatura']."/";
		$id_pais=$_SESSION['direccion'];
		$this->load->model('noticias_model');
		if ($this->uri->segment(4) != FALSE)
		{
			$data['noticia'] = $this->noticias_model->getNoticia($this->uri->segment(4));
			$data['imagenes'] = $this->noticias_model->getGaleria($this->uri->segment(4));
		}
		$data['menu_principal']=$this->menu_model->menu_principal();
		$data['menu_footer_array'] = $this -> menu_model -> menu_footer();
		$data['menu_familias_footer'] = $this -> menu_model -> menu_familias_footer();
		$data['menu_paises_footer'] = $this -> menu_model -> getPaises();
		$this->load->view('layout/header_secciones_view.php', $data);
		$this->load->view("sections/noticia_view.php");
		$this->load->view('layout/footer_view.php', $data);	
	}
	public function recibe()
	{
		if($_POST['captcha']==$_SESSION['cap_code'])
		{
			echo "c";
		}
		else
		{
			echo "i";
		}
	}
}

