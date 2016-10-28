<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "pais";

// $route['HaceFrio'] = "landing/haceFrio";
// $route['hacefrio'] = "landing/haceFrio";
// $route['HACEFRIO'] = "landing/haceFrio"; 
// $route['haceFrio'] = "landing/haceFrio";
$route['App'] = "landing/App";
$route['app'] = "landing/App";
$route['APP'] = "landing/App";
$route['SafoAbrir'] = "landing/SafoAbrir";
$route['safoabrir'] = "landing/SafoAbrir";
$route['SAFOABRIR'] = "landing/SafoAbrir";
$route['safoAbrir'] = "landing/SafoAbrir";
$route['PorSiLasLluvias'] = "landing/PorSiLasLluvias";
$route['porsilaslluvias'] = "landing/PorSiLasLluvias";
$route['PORSILASLLUVIAS'] = "landing/PorSiLasLluvias";
$route['porSiLasLluvias'] = "landing/PorSiLasLluvias";
$route['PorTuSeguridad'] = "landing/PorTuSeguridad";
$route['portuseguridad'] = "landing/PorTuSeguridad";
$route['PORTUSEGURIDAD'] = "landing/PorTuSeguridad";
$route['porTuSeguridad'] = "landing/PorTuSeguridad";
$route['EsDeMadrugada'] = "landing/EsDeMadrugada";
$route['esdemadrugada'] = "landing/EsDeMadrugada";
$route['ESDEMADRUGADA'] = "landing/EsDeMadrugada";
$route['esDeMadrugada'] = "landing/EsDeMadrugada";
$route['TraigoMuchasCompras'] = "landing/TraigoMuchasCompras";
$route['traigomuchascompras'] = "landing/TraigoMuchasCompras";
$route['TRAIGOMUCHASCOMPRAS'] = "landing/TraigoMuchasCompras";
$route['tragioMuchasCompras'] = "landing/TraigoMuchasCompras";
$route['ConfiaEnLosExpertos'] = "landing/ConfiaEnLosExpertos";
$route['confiaenlosexpertos'] = "landing/ConfiaEnLosExpertos";
$route['CONFIAENLOSEXPERTOS'] = "landing/ConfiaEnLosExpertos";
$route['confiaEnLosExpertos'] = "landing/ConfiaEnLosExpertos";
$route['GarantizaTuEntrada'] = "landing/GarantizaTuEntrada";
$route['garantizatuentrada'] = "landing/GarantizaTuEntrada";
$route['GARANTIZATUENTRADA'] = "landing/GarantizaTuEntrada";
$route['garantizaTuEntrada'] = "landing/GarantizaTuEntrada";$route['GarantizaTuEntrada'] = "landing/GarantizaTuEntrada";
$route['garantizatuentrada'] = "landing/GarantizaTuEntrada";
$route['GARANTIZATUENTRADA'] = "landing/GarantizaTuEntrada";
$route['garantizaTuEntrada'] = "landing/GarantizaTuEntrada";
$route['imagina-crea-construye'] = "landing/imagina_crea_construye";
$route['([a-z]{2}+)/([a-zA-Z _]+)'] = "pais/$2";
$route['([a-z]{2}+)/([a-zA-Z _]+)/([a-zA-Z0-9 _]+)'] = "pais/$2/$3";
$route['([a-z]{2}+)/([a-zA-Z _]+)/([a-zA-Z0-9 _\-\.]{0,100})/([a-zA-Z0-9 _\-\.]{0,100})'] = "pais/$2/$3/$4";
$route['([a-z]{2}+)/([a-zA-Z _]+)/([a-zA-Z0-9 _\-\.]{0,100})/([a-zA-Z0-9 _\-\.]{0,100})/([a-zA-Z0-9 _\-\.]{0,100})'] = "pais/$2/$3/$4/$5";


$route['([a-z]{2}+)'] = "pais/home/";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */