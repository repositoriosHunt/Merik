<?php

class pais_model extends CI_Model {

	function getPais($pais="mexico")
	{
		
		$result = DB::queryFirstRow("SELECT Abreviatura, Direccion FROM MI_Paises mp JOIN MI_Paises_Home mph ON mp.Id_Pais=mph.Direccion WHERE mp.Activo=1 AND mph.Pais LIKE '".$pais."%'");
		if($result!=null)
		{
			return $result;
		}
		else
		{
			return array("Abreviatura"=>"mx", "Direccion"=>"1");
		}
	}

	function getPaisByAbreviatura($pais="mx")
	{
		
		$result = DB::queryFirstRow("SELECT Abreviatura, Direccion FROM MI_Paises mp JOIN MI_Paises_Home mph ON mp.Id_Pais=mph.Direccion WHERE mp.Activo=1 AND mp.Abreviatura LIKE %ss", $pais);
		if($result!=null)
		{	
			$result['Encontrado'] = true;
			return $result;
		}
		else
		{
			return array("Abreviatura"=>"mx", "Direccion"=>"1", "Encontrado" => false);
		}
	}





}

?>