<?php

class bolsa_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function insertar($datos=null)
	{
		$detalle_producto = null;
		if($datos!=null)
		{
			$entity = DB::insert("Contacto_Talento", $datos);
			return $entity;
		}
		else
		{
			return false;
		}
	}
}
?>