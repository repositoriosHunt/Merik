<?php

class img_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getImagenesHome()
	{
		return DB::query("SELECT * FROM imagenes_home");
	}


}
?>