<?php

class menu_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function filtro_url($String)
	{
		$String = ereg_replace("[äáàâãª]","a",$String);
		$String = ereg_replace("[ÁÀÂÃÄ]","A",$String);
		$String = ereg_replace("[ÍÌÎÏ]","I",$String);
		$String = ereg_replace("[íìîï]","i",$String);
		$String = ereg_replace("[éèêë]","e",$String);
		$String = ereg_replace("[ÉÈÊË]","E",$String);
		$String = ereg_replace("[óòôõöº]","o",$String);
		$String = ereg_replace("[ÓÒÔÕÖ]","O",$String);
		$String = ereg_replace("[úùûü]","u",$String);
		$String = ereg_replace("[ÚÙÛÜ]","U",$String);
		$String = ereg_replace("[^´`¨~]","",$String);
		$String = str_replace("ç","c",$String);
		$String = str_replace("Ç","C",$String);
		$String = str_replace("ñ","n",$String);
		$String = str_replace("Ñ","N",$String);
		$String = str_replace("Ý","Y",$String);
		$String = str_replace("ý","y",$String);
		$String = str_replace(" ","_",$String);
		$String = strtolower($String);
		return $String;
	}
	
	function menu_principal()
	{
		$menu_principal=array(); 
		$index=0;
		$submenu=null;
		$results = DB::query("SELECT Id_Menu, Menu, URL FROM MI_Menu WHERE Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC");
		// $results = DB::query("SELECT Id_Menu, Menu, URL FROM MI_Menu WHERE Activo=1 AND Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC");
		foreach ($results as $row)
		{
			
			if($row['Menu']== 'Productos')
			{
				$submenu=$this->sub_menu_principal($row['Id_Menu']);
			}
			else
			{
				$submenu=null;
			}
			$menu_principal[$index]=array('id_menu'=>$row['Id_Menu'], 'menu'=>$row['Menu'], 'url'=>$row['URL'] ,'submenu'=>$submenu);
			$index++;
		}
		return $menu_principal;
	}

	function sub_menu_principal($id_menu=1)
	{
		$sub_menu=null;
		$sub_menu = DB::query("SELECT Id_Menu_Sub, Menu_Sub,URL FROM MI_Menu_Sub WHERE Activo=1 AND Padre_Menu=%i AND Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC", $id_menu);
		return $sub_menu;
	}

	function menu_footer()
	{
		//se filtra por pais de forma dinamica
		$results = DB::query("SELECT Id_Menu, Menu, URL FROM MI_Menu WHERE Menu <> 'Productos' AND Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC");
		// $results = DB::query("SELECT Id_Menu, Menu, URL FROM MI_Menu WHERE Activo=1 AND Menu <> 'Productos' AND Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC");

		return $results;
	}

	function menu_familias_footer()
	{
		$menu_familiar=array();
		$menu_padre=$this->sub_menu_principal(1);
		$index=0;

		foreach ($menu_padre as $menu_familia) {
			$array_familias=$this->productos_familias($menu_familia['Id_Menu_Sub']);

			$menu_familiar[$index]=array("id_padre_menu" => $menu_familia['Id_Menu_Sub'], "nombre_padre_menu" => $menu_familia['Menu_Sub'], "url_padre_menu" => $menu_familia['URL'], "array_familias" => $array_familias);
			$index++;
		}
		return $menu_familiar;

	}

	function productos_familias($id_familia=1)
	{
		$pais_actual=$_SESSION['abreviatura'];
		$results = DB::query("SELECT Id_Familia, Area, Familia_".$pais_actual." AS Familia, Descripcion_".$pais_actual." AS Descripcion, Imagen_".$pais_actual." AS Imagen FROM MI_Productos_Familias WHERE Area=%i AND Imagen_".$pais_actual." != '' AND Activo_".$pais_actual." = 1 ORDER BY Id_Familia", $id_familia);
		
		return $results;
	}

	function getProductosFamiliasByName($familia="residencial")
	{
		$pais_actual=$_SESSION['abreviatura'];
		$results = DB::query("SELECT Id_Familia, Area, Familia_".$pais_actual." AS Familia, Descripcion_".$pais_actual." AS Descripcion, Imagen_".$pais_actual." AS Imagen FROM MI_Productos_Familias WHERE Area=%i AND Imagen_".$pais_actual." != '' AND Activo_".$pais_actual." = 1 ORDER BY Id_Familia", $id_familia);
		
		return $results;
	}

	function getMenuSubByName($menu_sub="")
	{
		$sub_menu=null;
		$sub_menu = DB::queryFirstRow("SELECT Id_Menu_Sub, Menu_Sub,URL FROM MI_Menu_Sub WHERE Activo=1 AND Menu_Sub=%s AND Paises LIKE '%,".$_SESSION['direccion'].",%' ORDER BY Orden ASC", $menu_sub);
		return $sub_menu;
	}

	function getPaises()
	{
		
		$result = DB::query("SELECT * FROM MI_Paises WHERE abreviatura != %s AND  Activo=1", $_SESSION['abreviatura']);

		return $result;
	
	}

	function getCiudades()
	{
		
		$result = DB::query("SELECT gc.* FROM Geo_Ciudad gc JOIN MI_Paises mp ON gc.Pais = mp.Geo_Pais WHERE mp.Abreviatura=%s", $_SESSION['abreviatura']);
		return $result;
		
	}

}

?>