<?php
class distribuidor_model extends CI_Model {

	function getCoordenadas(){
		$result = DB::query("Select * From MI_Sucursales Where Activo =1 and Coordenadas_Lat != '' and Coordenadas_Lon != ''");
			return $result;
	}

	function getCoordenadasByIdPais($id_pais=0)
	{
		$result = DB::queryFirstRow("SELECT Coordenadas_Lat, Coordenadas_Lon, Zoom FROM MI_Paises WHERE Id_Pais =%i ",$id_pais);
		return $result;
	}

	function getDistribuidores()
	{
		$result = DB::query("SELECT md.*, mdz.Zona AS Zona_, mi.Anno AS Anno_IDA
								FROM MI_Grupo_Lealtad_Merik mglm Left JOIN MI_Distribuidores md ON md.Id_Distribuidor = mglm.DAM Left JOIN MI_Distribuidores_Zonas mdz ON mdz.Id_Zona = md.Zona Left JOIN MI_IDA mi ON mi.DAM = md.Id_Distribuidor
								WHERE mglm.Anno = '2015' AND Coordenadas_Lat != '' AND Coordenadas_Lon != '' AND md.Activo = 1 AND md.Tienda_Merik=0");
		return $result;
	}

	function getDistribuidoresTM()
	{
		$result = DB::query("SELECT md.*, mdz.Zona AS Zona_, mi.Anno AS Anno_IDA
								FROM MI_Grupo_Lealtad_Merik mglm
								Left JOIN MI_Distribuidores md ON md.Id_Distribuidor = mglm.DAM
								Left JOIN MI_Distribuidores_Zonas mdz ON mdz.Id_Zona = md.Zona
								Left JOIN MI_IDA mi ON mi.DAM = md.Id_Distribuidor
								JOIN MI_Tiendas_Merik mtm ON mtm.DAM= md.Id_Distribuidor
								WHERE mglm.Anno = '2015' AND Coordenadas_Lat != '' AND Coordenadas_Lon != '' AND md.Activo = 1");
		return $result;
	}

	function getDistribuidoresById($id=0)
	{
		$result = DB::query("SELECT md.*, mdz.Zona AS Zona_, mi.Anno AS Anno_IDA
								FROM MI_Grupo_Lealtad_Merik mglm Left JOIN MI_Distribuidores md ON md.Id_Distribuidor = mglm.DAM Left JOIN MI_Distribuidores_Zonas mdz ON mdz.Id_Zona = md.Zona Left JOIN MI_IDA mi ON mi.DAM = md.Id_Distribuidor
								WHERE md.Id_Distribuidor = %i AND mglm.Anno = '2015' AND Coordenadas_Lat != '' AND Coordenadas_Lon != '' AND md.Activo = 1", $id);
		return $result;
	}

	function buscarDistribuidores($buscar="")
	{
		$result = DB::query("SELECT md.Id_Distribuidor, md.Nombre_Empresa, md.Direccion
								FROM MI_Grupo_Lealtad_Merik mglm LEFT JOIN MI_Distribuidores md ON md.Id_Distribuidor = mglm.DAM 
								WHERE mglm.Anno = '2015' AND ( md.Nombre_Empresa LIKE %ss OR md.Razon_Social LIKE %ss AND md.Direccion LIKE %ss) AND Coordenadas_Lat != '' AND Coordenadas_Lon != '' AND md.Activo = 1 AND md.Tienda_Merik=0", $buscar, $buscar, $buscar);
		return $result;
	}

	function buscarDistribuidoresTM($buscar="")
	{
		$result = DB::query("SELECT md.Id_Distribuidor, md.Nombre_Empresa, md.Direccion
								FROM MI_Grupo_Lealtad_Merik mglm 
								LEFT JOIN MI_Distribuidores md ON md.Id_Distribuidor = mglm.DAM
								JOIN MI_Tiendas_Merik mtm ON mtm.DAM= md.Id_Distribuidor
								WHERE mglm.Anno = '2015' AND ( md.Nombre_Empresa LIKE %ss OR md.Razon_Social LIKE %ss AND md.Direccion LIKE %ss) AND Coordenadas_Lat != '' AND Coordenadas_Lon != '' AND md.Activo = 1", $buscar, $buscar, $buscar);
		return $result;
	}

	function getSucursales()
	{
		$result = DB::query("SELECT * FROM MI_Sucursales WHERE Activo = 1 AND Coordenadas_Lat != '' AND Coordenadas_Lon != ''");
		return $result;
	}
}

?>