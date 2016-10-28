<body class="landing">
    	<div class="wrap" >
        <header class="landingPage">
            <div class="slider">
            	<div class="title">Siéntete con la seguridad de mantener a tu familia protegida a toda hora,<br> por eso nada mejor que una puerta automática MERIK</div>
				<div class="background safoabrir"></div>
				<div class="logoLP">
					<img src="<?php echo base_url(); ?>img/logoBlco.jpg" height="69" width="254" alt="Merik">
					<h2>con Merik es posible</h2>

          <i class="fa fa-chevron-circle-down animated bounce nextSlideDown LP"></i>
				</div>	
            </div>
              
            
          </header>
        <div id=""> 

      <section class="section distribuidoresLP" data-section-name="distribuidores">
      <div class="centerLP"><h1 class="bloquesLP sin"><span class="icon-home"></span> El automatismo se abre para ti a toda hora ¡Visita nuestra página!</h1></div>
  <div class="centerLP"><h1 class="bloquesLP"><span class="icon-mail"></span> Sin importar la hora, estamos para ti. ¡Contáctanos!</h1></div>

  <div class="row">
  <a name="formulario"></a>
  <div class="col-md-6 col-md-offset-3 contactForm">

  <div id="resultado"></div>
    <form class="contacto" action="">
      <div class="col-md-6">
<div class="form-group">
  <label for="nombre">* Nombre:</label>
  <input type="hidden" id="tipo_landing" value="esdemadrugada">
  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Jesús Mendoza" required pattern="[a-zA-Z]*" >
  <input type="hidden" name="id_proveedor" id="id_proveedor" value="<?php if(isset($proveedor_seleccionado)) echo $proveedor_seleccionado; ?>">
  <input type="hidden" name="id_producto" id="id_producto" value="<?php if(isset($producto_seleccionado[1])) echo $producto_seleccionado[1]; ?>" >
  <input type="hidden" name="comprueba_captcha" id="comprueba_captcha" value="<?php echo $url_base."recibe"; ?>" >
  <input type="hidden" name="redireccionar_gracias" id="redireccionar_gracias" value="<?php echo $url_base."gracias"; ?>" >

  <label class="etq_error" id="error_name"></label>
</div>
<div class="form-group">
  <label for="email">* Email:</label>
  <input type="email" class="form-control" id="email" name="email"placeholder="Ej: nombre@dominio.com" required >
  <label class="etq_error" id="error_email"></label>
</div>
<div class="form-group">
  <label for="phone">Teléfono:</label>
  <input type="text"  class="form-control" id="telefono" name="telefono"placeholder="Ej: 01 (55) 5555 5555">
  
</div>
<div class="form-group">
  <label for="ciudad">Estado</label>

  <select class="form-control" name="ciudad" id="ciudad">
<?php 
  foreach ($menu_ciudades as $menu_ciudades_array) {
    echo '<option value="'.$menu_ciudades_array['Id_Geo_Ciudad'].'">'.$menu_ciudades_array['Ciudad'].'</option>';
  }
?>
    
    <option value="523">Baja California</option>
    <option value="524">Baja California Sur</option>
    <option value="525">Campeche</option>
    <option value="526">Chiapas</option>
    <option value="527">Chihuahua</option>
    <option value="528">Coahuila de Zaragoza</option>
    <option value="529">Colima</option>
    <option value="530">Distrito Federal</option>
    <option value="531">Durango</option>
    <option value="532">Guanajuato</option>
    <option value="533">Guerrero</option>
    <option value="534">Hidalgo</option>
    <option value="535">Jalisco</option>
    <option value="536">Estado de México</option>
    <option value="537">Michoacán de Ocampo</option>
    <option value="538">Morelos</option><option value="539">Nayarit</option>
    <option value="540">Nuevo León</option>
    <option value="541">Oaxaca</option>
    <option value="542">Puebla</option>
    <option value="543">Querétaro</option>
    <option value="544">Quintana Roo</option>
    <option value="545">San Luis Potosí</option>
    <option value="546">Sinaloa</option>
    <option value="547">Sonora</option>
    <option value="548">Tabasco</option>
    <option value="549">Tamaulipas</option>
    <option value="550">Tlaxcala</option>
    <option value="551">Veracruz de Ignacio de la Llave</option>
    <option value="552">Yucatán</option>
    <option value="553">Zacatecas</option>                            
</select>

</div>
      </div>
      
      <div class="col-md-6">
<div class="form-group">
  <label for="mensaje">Mensaje:</label>
  <textarea id="mensaje" name="mensaje" class="form-control" rows="5"></textarea>
  <label class="etq_error" id="error_mensaje"></label>
</div>
<div class="form-group captcha">
  <label class="captcha-label" for="seguridad">* Código de Seguridad:</label>

  <img src="<?php echo $url_base; ?>/imgCaptcha" class="captcha-img">
  <input type="text" id="seguridad" name="captcha" class="captcha-input form-control" required>
  <label class="etq_error" id="error_captcha"></label>
</div>
<div class="form-group proveedor">
  <label for="dam_seleccionado">Has seleccionado:</label>
  <input type="text" id="dam_seleccionado_nombre" name="dam_select" class="form-control" required>
</div>
      </div>
      <div class="col-md-12">
         <input class="btn btn-default btn-lg btn-block enviar" type="button" id="boton_enviar_landing" value="ENVIAR"/>
      </div>
    </form>
  </div>
</div>

<div class="centerLP"><h1 class="bloquesLP"><span class="icon-mexico"></span>	Tenemos distribuidores por todas partes. Encuentra el más cercano a ti en automático</h1></div>
  <div class="container buscaDistribuidor">
    <div class="col-md-12">
      <p><strong>¿Qué tipo de productos buscas?</strong></p>
    </div>
    <div class="col-md-12 btnsFiltro">
      <button class="btn col-xs-6 col-sm-3 btn-default btn-lg todos" type="button" id="todos"><i class="fa fa-globe"></i><br>Todos</button>
      <button class="btn col-xs-6 col-sm-3 btn-default btn-lg residencial" type="button" id="residencial"><span class="icon-residencial"></span><br>Residencial</button>
      <button class="btn col-xs-6 col-sm-3 btn-default btn-lg industrial" type="button" id="industrial"><span class="icon-industrial"></span><br>Industrial</button>
      <button class="btn col-xs-6 col-sm-3 btn-default btn-lg autotransporte" type="button" id="transporte"><span class="icon-autotransporte"></span><br>Autotransporte</button>
    </div>
    <div class="col-md-12">
      <p><strong>¿Dónde quieres instalar el equipo?</strong></p>
      <div id="map_canvas" class="mapa" style="width: 100%; height: 300px; margin: 10px 0;"></div>
    </div>
      
    
    <div class="col-md-12">
      
      <button class="ubicacion col-xs-12 col-sm-2" onClick="localizar()">Mi Ubicación</button>
      <input id="searchTextField" type="text" class="col-xs-12 col-sm-10">
      <span class="recomendacion col-sm-12 col-sm-offset-2">Recomendación de búsqueda: (Colonia, Municipio)</span>
    </div>

    <div class="col-xs-12">
      
    </div>
  </div>
</section>

