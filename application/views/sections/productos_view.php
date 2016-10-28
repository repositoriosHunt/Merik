      <section class="scroll section" data-section-name="productos">
       <div class="banner">
          <div class="liston"></div>
        </div>
      <div class="submenuMobile visible-xs">
        <select name="Submenu" class="form-control" id="dynamic_select">
          <option value="">Línea de productos</option>
          <?php
         $nombre_familia_actual="";
         $id_familia_actual=0;
         $submenuactual=$sub_menu['URL'];

            $String=$familia_actual;
            
            $String = str_replace("á","a",$String);
            $String = str_replace("í","i",$String);
            $String = str_replace("é","e",$String);
            $String = str_replace("ó","o",$String);
            $String = str_replace("ú","u",$String);
            $String = str_replace("ñ","n",$String);
            $String = str_replace("Ý","Y",$String);
            $String = str_replace(" ","_",$String);
            $String = strtolower($String);
            $familia_actual=$String;
         
         foreach ($menu_lateral as $menu_lateral_array) {
            //filtro
            $String=$menu_lateral_array['Familia'];
            
            $String = str_replace("á","a",$String);
            $String = str_replace("í","i",$String);
            $String = str_replace("é","e",$String);
            $String = str_replace("ó","o",$String);
            $String = str_replace("ú","u",$String);
            $String = str_replace("ñ","n",$String);
            $String = str_replace("Ý","Y",$String);
            $String = str_replace(" ","_",$String);
            $String = strtolower($String);
            //filtro
            if(str_replace(" ", "_", $familia_actual)==$String)
            {
              $nombre_familia_actual=$menu_lateral_array['Familia'];
              $id_familia_actual=$menu_lateral_array['Id_Familia'];
            }

            echo '<option value="'.$url_base.'productos/'.$sub_menu['URL'].$String.'">'.$menu_lateral_array['Familia'].'</option>';
         }
         ?>
        </select>
      </div>
      <div class="row contenedorproductos">
        <div id="hidemenu" style="display:none"><i class="fa fa-chevron-right"></i></div>
        
        <aside class="col-md-3 sidebar stickem hidden-xs">
          <div id="showmenu"><i class="fa fa-times"></i></div>
        <div class="section<?php echo strtoupper($sub_menu['Menu_Sub']);?>">
          <?php echo strtoupper($sub_menu['Menu_Sub']);?>
        </div>
         <ul>
         <?php
         $nombre_familia_actual="";
         $id_familia_actual=0;
         $submenuactual=$sub_menu['URL'];

            $String=$familia_actual;
            
            $String = str_replace("á","a",$String);
            $String = str_replace("í","i",$String);
            $String = str_replace("é","e",$String);
            $String = str_replace("ó","o",$String);
            $String = str_replace("ú","u",$String);
            $String = str_replace("ñ","n",$String);
            $String = str_replace("Ý","Y",$String);
            $String = str_replace(" ","_",$String);
            $String = strtolower($String);
            $familia_actual=$String;
         
         foreach ($menu_lateral as $menu_lateral_array) {
            //filtro
            $String=$menu_lateral_array['Familia'];
            
            $String = str_replace("á","a",$String);
            $String = str_replace("í","i",$String);
            $String = str_replace("é","e",$String);
            $String = str_replace("ó","o",$String);
            $String = str_replace("ú","u",$String);
            $String = str_replace("ñ","n",$String);
            $String = str_replace("Ý","Y",$String);
            $String = str_replace(" ","_",$String);
            $String = strtolower($String);
            //filtro
            if(str_replace(" ", "_", $familia_actual)==$String)
            {
              $nombre_familia_actual=$menu_lateral_array['Familia'];
              $id_familia_actual=$menu_lateral_array['Id_Familia'];
            }

            echo '<li><a href="'.$url_base.'productos/'.$sub_menu['URL'].$String.'">'.$menu_lateral_array['Familia'].'</a></li>';
         }
         ?>
         </ul>
       </aside>
        
      <div class="col-md-9 productList col-md-offset-3">
        <div class="breadcrumbs">
          Productos <span class="arrow">></span> <span><?php echo strtoupper($sub_menu['Menu_Sub']);?></span> <span class="arrow">></span> <span class="actual"><?php echo strtoupper($nombre_familia_actual);?></span>
        </div>
        <?php 
          foreach ($productos as $productos_array) {
        ?>
          <div class="col-md-3 product">
          <article>
            <div class="view view-more">  
              <div class="imghover">
                <img src="<?php echo base_url(); ?>img/_productos/<?php echo $productos_array['Imagen']; ?>" alt="" class="img-responsive">
                <div class="titulo">
                  <h2 class="productName hidden-xs"><?php echo $productos_array['Producto']; ?></h2>
                </div>
              </div>

              <div class="contenidoHover hidden-xs">
                <h2><?php echo $productos_array['Producto']; ?></h2>
                <p>
                  <?php 
                  $detalle_corto=strip_tags($productos_array['Descripcion']);
                  
                  echo $detalle_corto;
                  ?>
                </p>

                <div class="producto">
                  <a data-gall="productosDos" href="<?php echo base_url(); ?>producto/detalle/<?php echo $productos_array['Id_Producto']; ?>" class="venobox info" data-type="ajax"><i class="fa fa-plus-circle"></i> Leer más</a>
                </div>

                <div class="botones">
                    <ul>
                     <li class="compartir"><a href="#"><i class="fa fa-share"></i></a></li>
                     <li class="comprar"><a href="<?php echo $url_base; ?>distribuidores/<?php echo $id_seccion_actual; ?>_<?php echo $productos_array['Id_Producto']; ?>"><i class="fa fa-usd"></i></a></li>
                     <li class="folleto"><a href="<?php echo base_url(); ?>folletos/<?php echo $productos_array['Folleto']; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i></a></li>
                   </ul>   
                </div>

              </div>
              <div class="visible-xs infoProductoM">
                 <h2><?php echo $productos_array['Producto']; ?></h2>
               <p>
                <?php 
                $detalle_corto=strip_tags($productos_array['Detalle_2']);
                $detalle_corto=substr($detalle_corto, 0, 200)."...";
                echo $detalle_corto;
                ?></p>
                 
               <div class="producto">
                  <a href="<?php echo base_url(); ?>producto/detalle/<?php echo $productos_array['Id_Producto']; ?>" class="venobox info" data-gall="productos" data-type="ajax"><i class="fa fa-plus-circle"></i> Leer más</a>
               </div>
              <div class="botones">
                  <p>
                   <!-- <li class="compartir"><a href="#"><i class="fa fa-share"></i></a></li> -->
                   <span class="comprar"><a href="<?php echo $url_base; ?>distribuidores/<?php echo $id_seccion_actual; ?>_<?php echo $productos_array['Id_Producto']; ?>"><i class="fa fa-usd"></i></a></span>
                   <span class="folleto"><a href="<?php echo base_url(); ?>folletos/<?php echo $productos_array['Folleto']; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i></a></span>
                 </p>  
               
               </div>
               </div>
               
            </div> 
          </article>
        </div>
        <?php
          }

        ?>
      </div>
      </div>

      <div class="clearfix"></div>
      </section>
      <?php if($complementos!=null) { ?>
       <section class="scroll complementos" data-section-name="complementos">
        <div class="container">
          <h1>ENCUENTRA MÁS COMPLEMENTOS</h1>
          <?php 

          foreach ($complementos  as $complementos_array) {
            //filtro
            $String=$complementos_array['Familia'];
            
            $String = str_replace("á","a",$String);
            $String = str_replace("í","i",$String);
            $String = str_replace("é","e",$String);
            $String = str_replace("ó","o",$String);
            $String = str_replace("ú","u",$String);
            $String = str_replace("ñ","n",$String);
            $String = str_replace("Ý","Y",$String);
            $String = str_replace(" ","_",$String);
            $String = strtolower($String);
            //filtro

            echo '<div class="col-sm-3 complemento">
            <a href="'.base_url().'producto/detalle/'.$complementos_array['Id_Producto'].'" class="venobox info" data-gall="productos3" data-type="ajax"><img src="'.base_url().'img/_productos/'.$complementos_array['Imagen'].'" class="img-responsive" alt=""></a>
            
            <div class="link">
              <a href="'.base_url().'producto/detalle/'.$complementos_array['Id_Producto'].'" class="venobox info" data-gall="productos4" data-type="ajax">'.$complementos_array['Producto'].'<a>
              <a href="'.$url_base.'productos/'.$submenuactual.$String.'">'.$complementos_array['Familia'].'</a>
            </div>
            
          </div>';
          }


          ?>
          
        </div>
      </section>
      <?php } ?>

