<?php

class noticias_model extends CI_Model {

	public function getNoticia($id=0){
		$result = DB::query("Select * From MI_Noticias Where Id_Noticia =%i",$id);
			return $result;
	}

	public function getNoticias(){
		$result = DB::query("Select * From MI_Noticias Where (Pais = 1 or Pais = 0) and Activo = 1 Order by Fecha desc");
		return $result;
	}

	public function buscarNoticias($buscar=""){
		$result = DB::query("SELECT * FROM MI_Noticias WHERE (Pais = 1 OR Pais = 0) AND ( Titulo LIKE %ss OR Titulo_Interno LIKE %ss OR Cuerpo LIKE %ss ) AND Activo = 1 ORDER BY Fecha DESC", $buscar, $buscar, $buscar);
		return $result;
	}

	public function getGaleria($id=0){
		$result = DB::query("Select MI_Noticia_Galeria.*, MI_Noticias.Titulo From MI_Noticia_Galeria Left Join MI_Noticias on MI_Noticias.Id_Noticia = MI_Noticia_Galeria.Noticia Where Noticia = ".$id." and MI_Noticia_Galeria.Activo = 1");
		return $result;
	}
}

?>