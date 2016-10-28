<?php

class producto_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function productos_nuevos_aleatorios()
	{
		$pais_actual=$_SESSION['abreviatura'];
		$productos_nuevos=null;
		$productos_nuevos = DB::query("SELECT mp.Id_Producto, mp.Producto_".$pais_actual." as Producto, mp.Imagen_".$pais_actual." as Imagen, mpf.Familia_".$pais_actual." AS Familia
										FROM MI_Productos mp JOIN MI_Productos_Familias mpf ON mp.Familia=mpf.Id_Familia
										WHERE mp.Nuevos_".$pais_actual." = 1 AND mp.Activo_".$pais_actual." = 1 AND mp.Imagen_".$pais_actual." != '' 
										ORDER BY RAND() LIMIT 8");
		return $productos_nuevos;
	}

	function getProducto($id_producto=0)
	{
		$pais_actual = $_SESSION['abreviatura'];
		$detalle_producto = null;
		$detalle_producto = DB::queryFirstRow("SELECT mp.Producto_".$pais_actual." as Producto, mp.Galeria_".$pais_actual." as galeria, mp.Descripcion_".$pais_actual." as Descripcion, mp.Folleto_".$pais_actual." as Folleto,  mp.Imagen_".$pais_actual." as Imagen, mp.Detalle_".$pais_actual."_1 as Detalle_1, mp.Detalle_".$pais_actual."_2 as Detalle_2, mpf.Titulo_Familia_".$pais_actual." as Titulo
												FROM MI_Productos mp JOIN MI_Productos_Familias mpf on mpf.Id_Familia = mp.Familia
												WHERE mp.Id_Producto = %i and mp.Activo_".$pais_actual." =1", $id_producto);
		return $detalle_producto;
	}
	function getGaleriaProducto($id_producto=0)
	{
		$pais_actual = $_SESSION['abreviatura'];
		$detalle_producto = null;
		$detalle_producto = DB::query("SELECT Imagen_".$pais_actual." AS Imagen
												FROM MI_Galeria
												WHERE Producto = %i AND Activo_".$pais_actual." =1", $id_producto);
		return $detalle_producto;
	}

	function getProductosByFamilia($familia="")
	{
		$pais_actual = $_SESSION['abreviatura'];
		$detalle_producto = null;
		$detalle_producto = DB::query("SELECT mp.Id_Producto, mp.Producto_".$pais_actual." as Producto, mp.Descripcion_".$pais_actual." as Descripcion, mp.Folleto_".$pais_actual." as Folleto,  mp.Imagen_".$pais_actual." as Imagen, mp.Detalle_".$pais_actual."_1 as Detalle_1, mp.Detalle_".$pais_actual."_2 as Detalle_2, mpf.Complementos_".$pais_actual." as Complementos, mpf.Titulo_Familia_".$pais_actual." as Titulo
												FROM MI_Productos mp JOIN MI_Productos_Familias mpf on mpf.Id_Familia = mp.Familia
												WHERE mpf.Familia_".$pais_actual." = %s and mp.Activo_".$pais_actual." =1 and mp.Imagen_".$pais_actual." != '' ORDER BY mp.Orden_".$pais_actual."", $familia);
		return $detalle_producto;
	}

	function buscarProductos($buscar="")
	{
		$pais_actual = $_SESSION['abreviatura'];

		$productos = null;

		$productos = DB::query("SELECT mp.Id_Producto, mpf.Id_Familia as Id_Familia, mp.Imagen_".$pais_actual." as Imagen,  mp.Producto_".$pais_actual." as Producto, mpf.Familia_".$pais_actual." as Familia, mpf.Id_Familia, mpa.Area, mpa.Id_Area
							FROM MI_Productos mp JOIN MI_Productos_Familias mpf ON mpf.Id_Familia = mp.Familia JOIN MI_Productos_Areas mpa ON mpa.Id_Area = mpf.Area
							WHERE (mp.Producto_".$pais_actual." LIKE %ss OR mp.Tag_".$pais_actual." LIKE  %ss OR mpf.Familia_".$pais_actual." LIKE %ss OR mpa.Area like %ss) and mp.Activo_".$pais_actual." = 1 and mp.Imagen_".$pais_actual." != '' AND mpa.Id_Area<4
							ORDER BY mpa.Id_Area, mp.Id_Producto  ASC", $buscar, $buscar, $buscar, $buscar);
		return $productos;
	}

	function getComplementos($complementos="")
	{
		if($complementos!="")
		{
			$pais_actual = $_SESSION['abreviatura'];

			$complementos = DB::query("SELECT Id_Producto, mp.Familia as Familia, mp.Producto_".$pais_actual." as Producto, mp.Imagen_".$pais_actual." as Imagen, mpf.Familia_".$pais_actual." as Familia, mpa.Area as Area
									From MI_Productos mp JOIN MI_Productos_Familias mpf on mp.Familia = mpf.Id_Familia JOIN MI_Productos_Areas mpa ON mpa.Id_Area = mpf.Area
									WHERE ( Id_Producto = 0 OR Id_Producto IN (".$complementos.")) and mp.Activo_".$pais_actual." = 1 and mp.Imagen_".$pais_actual." != ''
								  	ORDER BY rand() Limit 8");
			return $complementos;
		}
		else
		{
			return null;
		}

		
	}
}
?>