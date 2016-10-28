<section class="scroll section" data-section-name="Contacto">
  <div class="col-sm-12">
    <h2 class="subtitulo">Ponte en contacto con nosotros</h2>
  </div>
<div class="row">
  <div class="col-md-6 col-md-offset-3 contactForm">
  <div id="resultado"></div>
    <form class="contacto" action="">
      <div class="col-md-6">
<div class="form-group">
  <label for="nombre">* Nombre:</label>
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
<div class="form-group">
  <label class="captcha-label" for="seguridad">* Código de Seguridad:</label>

  <img src="<?php echo $url_base; ?>/imgCaptcha" class="captcha-img">
  <input type="text" id="seguridad" name="captcha" class="captcha-input form-control" required>
  <label class="etq_error" id="error_captcha"></label>
</div>
      </div>
      <div class="col-md-12">
      	 <input class="btn btn-default btn-lg btn-block enviar" type="button" id="boton_enviar" value="ENVIAR"/>
      </div>
    </form>
  </div>
</div>

<div class="row datosContacto">
  <div class="col-md-6 col-md-offset-3">
    <div class="phone">
      <i class="fa fa-phone"></i> <span>PARA MÁS INFORMACIÓN LLAMA AL</span> <strong><a href="tel:+018005009300" class="tel">01 800 500 9300</a></strong>
    </div>
    <div class="email">
      <a href="mailto:informes@merik.com.mx">informes@merik.com.mx</a>
    </div>

    <div class="redes">
      <p class="text">Síguenos en nuestras redes sociales:</p>
      <p class="redesIcons">
        <a href="https://www.facebook.com/Meriksadecv" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <a href="https://twitter.com/Meriksadecv" target="_blank"><i class="fa fa-twitter-square"></i></a> 
        <a href="https://www.youtube.com/user/meriksadecv" target="_blank"><i class="fa fa-youtube-square"></i> </a>
        <a href="https://www.linkedin.com/in/meriksadecv" target="_blank"><i class="fa fa-linkedin-square"></i></a> 
        <a href="https://www.pinterest.com/meriksacv/" target="_blank"><i class="fa fa-pinterest-square"></i></a> 
      </p>
    </div>
  </div>
</div>
</section>