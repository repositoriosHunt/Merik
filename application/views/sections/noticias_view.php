<section class="scroll section" data-section-name="noticias">
	<div class="col-sm-12">
		<h1 class="h1 animated">NOTICIAS</h1>
	</div>
	<div class="container">
	<div class="row notas">
<?php
		foreach ($noticias as $noticias_array) {

		$s=strip_tags($noticias_array['Titulo']);	
		

				$s = str_replace(array('á','à','â','ã','ª'),"a",$s);
			 $s = str_replace(array('Á','À','Â','Ã'),"A",$s);
			 $s = str_replace(array('é','è','ê'),"e",$s);
			 $s = str_replace(array('É','È','Ê'),"E",$s);
			 $s = str_replace(array('í','ì','î'),"i",$s);
			 $s = str_replace(array('Í','Ì','Î'),"I",$s);
			 $s = str_replace(array('ó','ò','ô','õ','º'),"o",$s);
			 $s = str_replace(array('Ó','Ò','Ô','Õ'),"O",$s);
			 $s = str_replace(array('ú','ù','û'),"u",$s);
			 $s = str_replace(array('Ú','Ù','Û'),"U",$s);
			 $s = str_replace(" ","_",$s);
			 $s = str_replace("ñ","n",$s);
			 $s = str_replace("Ñ","N",$s);
			 
			 /*Simbolos*/
			 $s = str_replace("/","_",$s);
			 $s = str_replace(",","_",$s);
			 $s = str_replace("-","_",$s);
			 $s = str_replace("_","_",$s);
			 $s = str_replace("*","_",$s);
			 $s = str_replace("?","_",$s);
			 $s = str_replace("¿","_",$s);
			 $s = str_replace("!","_",$s);
			 $s = str_replace("¡","_",$s);
			 $s = str_replace("+","_",$s);
			 $s = str_replace("º","_",$s);
			 $s = str_replace(".","",$s);
			 $titulo=$s;
			$array_fecha=explode ( "-" , $noticias_array['Fecha']);
			$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		echo '
			<div class="col-md-4">
			<div class="nota">
				<div class="thumb">
					<a href="'.$url_base.'noticia/'.$titulo.'/'.$noticias_array['Id_Noticia'].'">
					<img class="img-responsive" src="'.base_url().'img/_noticias/'.$noticias_array['Imagen_Chica'].'" alt=""></a>
				</div>
				<div class="titulo">'.$noticias_array['Titulo'].'</div>
				<div class="fecha">'.$array_fecha['2']." de ".$meses[$array_fecha['1']-1]. " del ".$array_fecha['0'].'</div>
			</div>
		</div>';
}?>
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
      <div class="pinterestWDGT">
      	<a data-pin-do="embedUser" href="http://es.pinterest.com/meriksacv/" data-pin-scale-width="80" data-pin-scale-height="500" data-pin-board-width="280">Visit Merik, S.A. de C.V.'s profile on Pinterest.</a>
      			<!-- Please call pinit.js only once per page -->
      			<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
      </div>

    </div>

		
	</div>
</section>