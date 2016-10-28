<?php 	
	$nombre		= basename($_GET['imagen']);
	$anchura 	= $_GET['tamano'];
	$altura 	= $_GET['tamano'];
	$datos 		= getimagesize($nombre); 
	
	if($datos[2]==1)
		$img = @imagecreatefromgif($nombre);
	if($datos[2]==2)
		$img = @imagecreatefromjpeg($nombre); 
	if($datos[2]==3)
		$img = @imagecreatefrompng($nombre);
	
	$thumb = imagecreatetruecolor($anchura,$altura); 
	imagecopyresampled($thumb, $img, 0, 0, 0, 0, $anchura, $altura, $datos[0], $datos[1]); 
	if($datos[2]==1)
	{
		header("Content-type: image/gif"); 
		imagegif($thumb);
	} 
	if($datos[2]==2)
	{
		header("Content-type: image/jpeg");
		imagejpeg($thumb);
	} 
	if($datos[2]==3)
	{
		header("Content-type: image/png");
		$rojo = imagecolorallocate($thumb, 255, 0, 0);
		$negro = imagecolorallocate($thumb, 0, 0, 0);

			// Hacer el fondo transparente
		imagecolortransparent($thumb, $negro);
		imagepng($thumb); 
	} 
	imagedestroy($thumb); 	

?> 