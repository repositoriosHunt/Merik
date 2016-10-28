</section>
        <section class="scroll section" data-section-name="buscar">
          <div class="col-sm-12">
            <div class="container">
              <h1 class="h1 animated">BUSCAR</h1>
              <h3>Resultados relacionados con: <span class="busqueda">"<?php echo htmlspecialchars($campo_buscar); ?>"</span></h3>
              <center><?php if($error_cadena_buscar != "") { echo $error_cadena_buscar; } ?></center>
            </div>
          </div>
        <div class="row">
          <div class="container">
          <?php
          $familia_actual="";
          if($productos!=null || $noticias!=null || $distribuidores != null || $distribuidoresTM != null)
          {
            if($productos!=null)
            {
              foreach ($productos as $productos_array)
              {
                if($familia_actual!=strtolower($productos_array['Area']))
                {
                  $familia_actual=strtolower($productos_array['Area']);
                  echo '<div class="col-xs-12 '.$familia_actual.' categoria">
                        <h3><span class="icon-'.$familia_actual.'"> '.ucwords($familia_actual).'</span></h3>
                        </div>';
                } 

                $String=$productos_array['Familia'];
                
                $busca= array("á","é","í","ó","ú","ñ","ý","Á","É","Í","Ó","Ú","Ñ","Ý"," ");
                $reemplaza  = array("a","e","i","o","u","n","y","A","E","I","O","U","N","Y","_",);
                $String = str_replace($busca,$reemplaza,$String);
                $String = strtolower($String);
                        
            ?>

            
              <div class="col-md-3 col-sm-4 col-xs-12 news-search">
                <img src="<?php echo base_url(); ?>img/_productos/<?php echo $productos_array['Imagen']?>" class="img-responsive" alt="">
                <div class="family"><a href="<?php echo $url_base; ?>productos/<?php echo $familia_actual; ?>/<?php echo $String; ?>"><?php echo $productos_array['Familia']?></a></div>
                <div class="producto"><a href="<?php echo base_url(); ?>producto/detalle/<?php echo $productos_array['Id_Producto']; ?>" class="venobox info" data-gall="productos" data-type="ajax"><?php echo $productos_array['Producto']?></a></div>
              </div>

            <?php
              }  
            }

            if($noticias!=null)
            {
              echo '<div class="col-xs-12 residencial categoria">
                      <h3><span class="icon-residencial"> Noticias </span></h3>
                      </div>';
              foreach ($noticias as $noticias_array)
              {
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
                      <img class="img-responsive" src="'.base_url().'img/_noticias/'.$noticias_array['Imagen_Chica'].'" alt="">
                    </div>
                    <div class="titulo">'.$noticias_array['Titulo'].'</div>
                    <div class="fecha">'.$array_fecha['2']." de ".$meses[$array_fecha['1']-1]. " del ".$array_fecha['0'].'</div>
                  </div>
                </div>';
              }  
            }

            if($distribuidoresTM!=null)
            {
              echo '<div class="col-xs-12 residencial categoria">
                      <h3><span class="icon-residencial"> Tiendas Merik </span></h3>
                      </div>';
              foreach ($distribuidoresTM as $distribuidoresTM_array)
              {
                
                
                echo '
                  <div class="col-md-4">
                  <div class="nota">
                    <div class="thumb">
                      <a href="'.$url_base.'ver_tienda_merik/'.$distribuidoresTM_array['Id_Distribuidor'].'">
                      <img class="img-responsive" src="'.base_url().'img/Logo_distribuidor.png" alt="">
                    </div>
                    <div class="titulo">'.$distribuidoresTM_array['Nombre_Empresa'].'</div>
                    
                  </div>
                </div>';
              }  
            }

            if($distribuidores!=null)
            {
              echo '<div class="col-xs-12 residencial categoria">
                      <h3><span class="icon-residencial"> Distribuidores </span></h3>
                      </div>';
              foreach ($distribuidores as $distribuidores_array)
              {
                
                
                echo '
                  <div class="col-md-4">
                  <div class="nota">
                    <div class="thumb">
                      <a href="'.$url_base.'ver_distribuidor/'.$distribuidores_array['Id_Distribuidor'].'">
                      <img class="img-responsive" src="'.base_url().'img/Logo_distribuidor.png" alt="">
                    </div>
                    <div class="titulo">'.$distribuidores_array['Nombre_Empresa'].'</div>
                    
                  </div>
                </div>';
              }  
            }

          }
          else
          {
            echo '<div class="container">
                    <h3><span class="busqueda">"No se encontraron resultados"</span></h3>
                  </div>';
          }

          ?>

          </div>
        </div>
        </section>