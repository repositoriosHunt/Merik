 <section class="scroll section" data-section-name="noticia">
  <div class="container">

 <?php 
  foreach ($noticia as $noticia_array) {        
        $titulo =$noticia_array['Titulo'];

 	echo  "<h1>$titulo</h1>
                <div class='hidden-xs'>
                <ul id='myGallery'>
                    <li>";
            foreach ($imagenes as $imagenes_array) {

            	$titulo =strip_tags($imagenes_array['Titulo']);	
				$titulo = str_replace(" ","_",$titulo);

              echo  "<img data-frame='".base_url()."img/_noticias/_galeria/".$imagenes_array['Imagen']."' src='".base_url()."img/_noticias/_galeria/".$imagenes_array['Imagen']."' title='".$titulo."' data-description='' />";
            
            }
        echo  "
                    </li>
                </ul>
                </div>

                <div class='visible-xs'>
                <ul id='myGalleryMobile'>
                    <li>";
            foreach ($imagenes as $imagenes_array) {

              $titulo =strip_tags($imagenes_array['Titulo']); 
        $titulo = str_replace(" ","_",$titulo);

              echo  "<img data-frame='".base_url()."img/_noticias/_galeria/".$imagenes_array['Imagen']."' src='".base_url()."img/_noticias/_galeria/".$imagenes_array['Imagen']."' title='".$titulo."' data-description='' />";
            
            }
        echo  "
                    </li>
                </ul>
                </div>
            "; 
 	
  ?>

  <div class="col-md-10 col-md-offset-1">
  	<?php 


        $text    =  $noticia_array['Cuerpo'];

        $text = str_replace("http://merik-internacional.com/mx/residencial/?f=6", $url_base."productos/residencial/puertas_de_garaje", $text);
        $text = str_replace("http://merik-internacional.com/mx/industrial/?f=8",$url_base."productos/industrial/puertas_automaticas",$text);
        $text = str_replace("http://merik-internacional.com/mx/industrial/?f=11#SerieUNeumatica%28BolsadeAire%29",$url_base."productos/industrial/rampas_niveladoras", $text);
        $text = str_replace("http://merik-internacional.com/mx/residencial/?f=14", $url_base."productos/residencial/control_de_accesos", $text);
		$text = str_replace("http://merik-internacional.com/mx/residencial/?f=1",$url_base."productos/residencial/abre_puertas",$text);    
		$text = str_replace("http://merik-internacional.com/mx/industrial/?f=9", $url_base."productos/industrial/puertas_de_emergencia", $text);
    	$texto = $text;

    	
    	echo $texto;  
	}
 ?>
  </div>
</div>
</section>

<section class="scroll section" data-section-name="redesSociales">
	<h3 class="h3">REDES SOCIALES</h3>

	<div class="container widgets">
    <div class="col-md-4">
      <h2>Facebook</h2>
      <div id="fb-root"></div>
            <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-page" data-href="https://www.facebook.com/Meriksadecv" data-width="280" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Meriksadecv"><a href="https://www.facebook.com/Meriksadecv">Merik, S.A. de C.V.</a></blockquote></div></div>
    </div>
    <div class="col-md-4">
      <h2>Twitter</h2>
      <div id="twitter">
        <a class="twitter-timeline" href="https://twitter.com/Meriksadecv" data-widget-id="648387578530426880">Tweets por el @Meriksadecv.</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>      
    </div>
    <div class="col-md-4 pinterest">
      <h2>Pinterest</h2>
      <a data-pin-do="embedUser" data-pin-lang="es" data-pin-board-width="600" data-pin-scale-height="500" data-pin-scale-width="80" href="https://es.pinterest.com/meriksacv/"></a>
      <!-- Please call pinit.js only once per page -->
      <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
    </div>

    
  </div>
</section>