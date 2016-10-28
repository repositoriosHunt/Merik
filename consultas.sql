/**Consulta para sacar menú por país**/
$consulta 	= "Select *	From  MI_Menu Where Activo = 1 and Paises like '%,1,%' and Menu = 'Contacto' Order by Orden asc";

$consulta 	= "Select *	From  MI_Menu Where Activo = 1 and Paises like '%,1,%' Order by Orden asc";

$consulta_menu_sub 	= "	Select * From MI_Menu_Sub Where Activo = 1 and Paises like '%,1,%'	and Padre_Menu = ".$fila_menu['Id_Menu']." Order by Orden asc ";

$consulta   = ' Select * From Geo_Ciudad Where Pais = '.$Pais.'';

/*Consulta para saber si esta o no el dato*/
$consulta   = " Select Id_Familia, Area, Familia_".$abreviatura.", Descripcion_".$abreviatura.", Imagen_".$abreviatura.", Activo_".$abreviatura."From MI_Productos_Familias Where Area = ".$area." and Id_Familia = ".$id." and Activo_".$abreviatura." = 1 Order by Id_Familia";

/*Consulta para determinar el primero de cada familia activo*/
$consulta   = " Select Id_Familia From MI_Productos_Familias Where Area = ".$area." and Activo_".$abreviatura." = 1 Order by Orden_".$abreviatura." Limit 1";

$consulta   = " Select Familia_".$abreviatura." as Familia, Titulo_Familia_".$abreviatura." as Titulo , Complementos_".$abreviatura." as Complementos From MI_Productos_Familias Where Id_Familia = ".$id." ";


$consulta   =  "Select MI_Productos.Familia as Familia, MI_Productos.Producto_".$abreviatura." as Producto, MI_Productos.Imagen_".$abreviatura." as Imagen, MI_Productos_Areas.Area as Area From MI_Productos Left Join MI_Productos_Familias on MI_Productos.Familia = MI_Productos_Familias.Id_Familia Left Join MI_Productos_Areas    on MI_Productos_Areas.Id_Area = MI_Productos_Familias.Area Where ( Id_Producto = 0 or ";

$consulta   = " Select Id_Producto,Detalle_".$abreviatura."_2 as Detalle_2,Producto_".$abreviatura." as Producto,Imagen_".$abreviatura." as Imagen,Folleto_".$abreviatura." as Folleto, Detalle_".$abreviatura."_1 as Detalle_1 From MI_Productos Where Familia = ".$id." and Activo_".$abreviatura." = 1 and Imagen_".$abreviatura." != '' Order By Id_Producto,Orden_".$abreviatura." asc";

$consulta1  = " Select * FROM MI_Productos Where Familia = ".$id." and Activo_".$abreviatura." = 1 and Id_Producto > ".$fila['Id_Producto']." Order by Id_Producto ASC Limit 1";

$consulta2  = "Select * FROM MI_Productos Where Familia = ".$id." and Activo_".$abreviatura." = 1 and Id_Producto < ".$fila['Id_Producto']." Order by Id_Producto DESC Limit 1";

$consulta   = " Select Id_Producto,Producto_".$abreviatura." as Producto,Imagen_".$abreviatura." as Imagen, Galeria_".$abreviatura." as Galeria, Comprar_".$abreviatura." as Comprar, MI_Productos.Descripcion_".$abreviatura." as Descripcion From MI_Productos Where Familia = ".$id." and Activo_".$abreviatura." = 1 and Imagen_".$abreviatura." != '' Order By Orden_".$abreviatura." asc";

$consulta   = " Select Familia_".$abreviatura." as Familia, Titulo_Familia_".$abreviatura." as Titulo , Complementos_".$abreviatura." as Complementos From MI_Productos_FamiliasWhere Id_Familia = ".$id."";

$consulta   = " Select Id_Producto,Producto_".$abreviatura." as Producto,Imagen_".$abreviatura." as Imagen From MI_Productos Where Nuevos_".$abreviatura." = 1 and Activo_".$abreviatura." = 1 and Imagen_".$abreviatura." != '' Order By Orden_".$abreviatura." asc";

$consulta   = "Select Id_Producto,Producto_".$abreviatura." as Producto,Imagen_".$abreviatura." as Imagen From MI_Productos Where Nuevos_".$abreviatura." = 1 and Activo_".$abreviatura." = 1 and Imagen_".$abreviatura." != '' Order By Familia asc";

$consulta   = " Select * From MI_Noticias Where Id_Noticia = ".$id."";

$consulta   = " Select MI_Noticia_Galeria.*, MI_Noticias.Titulo From MI_Noticia_Galeria Left Join MI_Noticias on MI_Noticias.Id_Noticia = MI_Noticia_Galeria.Noticia Where Noticia = ".$id." and MI_Noticia_Galeria.Activo = 1";

$consulta   = " Select MI_Paises_Home.Pais,MI_Paises.Abreviatura From MI_Paises_Home Left Join  MI_Paises on MI_Paises.Id_Pais = MI_Paises_Home.Direccion";

$consulta   = "  Select * From Mk_Mailing Where Id_Mailing = ".$id."";

$consulta_datos     = "  Select Id_Envio,Vista_".$envio." as Vista, Fecha_Visto_".$envio." as Fecha_Vista From ".$tabla." Where Id_Envio = ".$fil."";

$consulta_update = " Update ".$tabla." Set Vista_".$envio."= '".$update_vista."', Fecha_Visto_".$envio."  = '".$update_fecha."' Where Id_Envio = ".$fila_datos['Id_Envio']." ";

$consulta   = 'Select Id_Producto, Producto_'.$abreviatura.' as Producto,MI_Productos_Familias.Id_Familia as Familia, MI_Productos_Areas.Area as Area From MI_Productos Left Join MI_Productos_Familias on MI_Productos_Familias.Id_Familia = MI_Productos.Familia Left Join MI_Productos_Areas on MI_Productos_Familias.Area = MI_Productos_Areas.Id_Area Where MI_Productos.Activo_'.$abreviatura.' = 1 and MI_Productos.Imagen_'.$abreviatura.' != "" ';

/*Productos*/
$consulta   = "Select MI_Productos.Id_Producto, MI_Productos_Familias.Id_Familia as Id_Familia  ,MI_Productos.Imagen_".$abreviatura." as Imagen,  MI_Productos.Producto_".$abreviatura." as Producto, MI_Productos_Familias.Familia_".$abreviatura." as Familia, MI_Productos_Areas.Area From MI_Productos Left Join MI_Productos_Familias on MI_Productos_Familias.Id_Familia = MI_Productos.Familia Left Join MI_Productos_Areas on MI_Productos_Areas.Id_Area = MI_Productos_Familias.Area Where (MI_Productos.Producto_".$abreviatura." like '%".$palabra."%' or MI_Productos.Tag_".$abreviatura." like '%".$palabra."%' or MI_Productos_Familias.Familia_".$abreviatura." like '%".$palabra."%' or MI_Productos_Areas.Area like '%".$palabra."%') and MI_Productos.Activo_".$abreviatura." = 1 and MI_Productos.Imagen_".$abreviatura." != ''  Order by MI_Productos_Areas.Id_Area,MI_Productos.Id_Producto  asc  ";

$consulta   = ' Select *  From Mi_Paises Where Activo = 1 ';

$consulta = "Select * From Query_APP Where Id_Query = ".$s." ";

$cadena = " Select Id_Familia,Id_Area,Id_Producto, Producto_mx as Producto, Detalle_mx_1 as Detalle_Inf, Detalle_mx_1 as Detalle_Der, Folleto_mx as Folleto, MI_Productos.Imagen_mx as Imagen, Familia_mx as Familia, MI_Productos_Areas.Area as Area From MI_Productos Left Join MI_Productos_Familias on MI_Productos_Familias.Id_Familia = MI_Productos.Familia Left Join MI_Productos_Areas on MI_Productos_Areas.Id_Area =  MI_Productos_Familias.Area Where Familia = ".$f." and MI_Productos.Activo_mx = 1 and MI_Productos.Imagen_mx != ''  Order By MI_Productos.Orden_mx asc";

/*consulta lightbox*/
$consulta 	= " Select MI_Productos.Producto_".$abreviatura." as Producto, MI_Productos.Descripcion_".$abreviatura." as Descripcion, MI_Productos.Folleto_".$abreviatura." as Folleto,  MI_Productos.Imagen_".$abreviatura." as Imagen, MI_Productos.Detalle_".$abreviatura."_1 as Detalle_1, MI_Productos.Detalle_".$abreviatura."_2 as Detalle_2, MI_Productos_Familias.Titulo_Familia_".$abreviatura." as Titulo From MI_Productos Left Join MI_Productos_Familias on MI_Productos_Familias.Id_Familia = MI_Productos.Familia Where Id_Producto = ".$id_producto." and MI_Productos.Activo_".$abreviatura."  =1";

/*carrucel familia 1*/
$consulta 	= "	Select Id_Familia,Area, Familia_".$pais->abreviatura." as Familia , Descripcion_".$pais->abreviatura." as Descripcion, Imagen_".$pais->abreviatura." as Imagen From MI_Productos_Familias Where Area = '1' and Imagen_".$pais->abreviatura." != ''  and Activo_".$pais->abreviatura." = 1 Order by Id_Familia ";


/*galerias.php*/
$consulta 	= " Select Imagen_".$abreviatura." as Imagen From MI_Galeria Where Producto = ".$id_producto." and Activo_".$abreviatura." = 1 Order by rand() Limit 8";

/*nichos_listado*/
$consulta 	= '	Select * From MI_Folletos_Nichos Where Activo = 1 and Area = '.$area_nicho.' Order by Fecha desc ';




