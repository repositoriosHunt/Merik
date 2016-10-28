<header>
        <div class="container">
          <div class="col-sm-4">
            <a href="<?php echo $url_base;?>contacto" class="contact hidden-xs"><i class="fa fa-envelope-o"></i><span>CONTÁCTANOS</span></a>
          </div>
          <div class="col-sm-4 logo">
            <img src="<?php echo base_url(); ?>img/logoBlco.jpg" height="69" width="254" alt="Merik">
          </div>
          <div class="col-sm-4 search">
            <form action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador" ><input type="text" name="campo_buscar" id="campo_buscar" placeholder="Palabra a buscar" /> <i class="fa fa-search" id="boton_buscar"></i></form>
          </div>
        </div>
      </header>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid container menu">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
  
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav">
           <?php
                    $ciclos = 0;
                    $submenu = '<li class="residencial"><a href="'.$url_base.'tiendas_merik">Tiendas Merik</a></li>';;
                    foreach ($menu_principal as $menu)
                    {

                      if($menu['id_menu']=='3' || $menu['id_menu']=='6' )
                      {
                        if($ciclos==0)
                        {
                          echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dónde Comprar <span class="caret"></span></a>';
                          
                          echo '<ul class="dropdown-menu">';
                        }
                          $submenu .= '<li class="residencial"><a href="'.$url_base.$menu['url'].'">'.$menu['menu'].'</a></li>';
                        if($ciclos==1)
                        {
                          echo $submenu;
                          echo '</ul></li>';
                        }
                        $ciclos++;

                      }
                      else
                      {
                        
                        if($menu['submenu']!=null)
                        {
                          echo '<li class="dropdown"><a href="'.$url_base.$menu['url'].'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$menu['menu'].' <span class="caret"></span></a>';
                          echo '<ul class="dropdown-menu">';
                          foreach ($menu['submenu'] as $sub_menu)
                          {
                            echo '<li class="'.$sub_menu['Menu_Sub'].'"><a href="'.$url_base.'productos/'.$sub_menu['URL'].'">'.$sub_menu['Menu_Sub'].'</a></li>';
                          }
                          echo '</ul></li>';
                        }
                        else
                        {
                          echo '<li class="'.$menu['menu'].'"><a href="'.$url_base.$menu['url'].'">'.$menu['menu'].'</a></li>';
                        }
                      }
                      
                    }
                  ?>
            
          </ul>
          <form class="navbar-form visible-xs" role="search" action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador" ><input type="text" name="campo_buscar" id="campo_buscar" placeholder="Palabra a buscar" /> <i class="fa fa-search" id="boton_buscar"></i></form>
  
           <div class="minicontact">
            <a href="<?php echo $url_base;?>contacto"><i class="fa fa-envelope-o"></i></a>
          </div>
  
          <div class="minisearch">
            <form action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador"><input type="text" name="campo_buscar" id="campo_buscar_mini" placeholder="Buscar" /> <i class="fa fa-search" id="boton_buscar_mini"></i></form>
          </div>
  
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div id="fullpage" class="scrollFullpage">
  <section class="section" data-section-name="home">
    
      <div id="slider" class="sl-slider-wrapper ">
        <a class="hidden-xs" href="#conMerikEsPosible"><i class="fa fa-chevron-circle-down animated bounce nextSlideDown"></i></a>
        <div class="sl-slider">
        
          <!-- <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1" style="margin-top:188px;"></div>
              <div class="copy">
                <div class="title">Bienvenido en automático.</div>
                
              </div>
            </div>
          </div> -->

          <!-- <div class="sl-slide bg-0" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-0"></div>
              <div class="copy">
                <div class="title">Bienvenido en automático</div>
                
              </div>

            </div>
          </div> -->

          <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <div class="copy">
                <div class="title">Bienvenido en automático</div>
                
              </div>

            </div>
          </div>

          <div class="sl-slide bg-2" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <div class="copy">
                <div class="title">Brindamos seguridad a lo que más quieres</div>
                
              </div>

            </div>
          </div>
          
          <div class="sl-slide bg-3" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <div class="copy">
                <div class="title">Abrimos la puerta a la comodidad de tu casa</div>
                
              </div>

            </div>
          </div>
          
          <div class="sl-slide bg-4" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <div class="copy">
                <div class="title">Proporcionamos seguridad en la transportación y conservación de tu carga</div>
                
              </div>
            </div>
          </div>

          <div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="25" data-slice2-rotation="3" data-slice1-scale="1.5" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <div class="copy">
                <div class="title">Eficientamos la logística de carga y descarga para la nave industrial</div>
                
              </div>
            </div>
          </div>
          
          
        </div><!-- /sl-slider -->
        
        <nav id="nav-arrows" class="nav-arrows">
          <span class="nav-arrow-prev">Previous</span>
          <span class="nav-arrow-next">Next</span>
        </nav>

        <!-- <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
        </nav> -->

      </div>
    </section>
    <section class="section" data-section-name="merik">
      
      <div class="col-sm-12">
        <h1 class="h1 animated">CON MERIK ES POSIBLE</h1>
      </div>
      <a class="hidden-xs" href="#nuevosProductos"><i class="fa fa-chevron-circle-down animated bounce nextSlideDown posible"></i></a>
    <div class="row">
      <div class="col-sm-4 col-sm-offset-2 merik-txt-l animated">
        <p><strong>Merik, S.A. de C.V.</strong> 
        es la empresa mexicana innovadora del concepto de Puertas Automáticas en México desde 1962.</p>
    
        <p>Le ofrecemos todo el concepto de 
        soluciones integrales a través de 
        nuestras áreas comerciales: </p>
      </div>
      <div class="col-sm-4 merik-txt-r animated">
        <p><strong>Puertas Automáticas, Puertas & 
          Herrajes, Manejo de Materiales y 
          Autotransportes.</strong></p>
    
        <p>Empresa pionera, lider y de prestigio en 
        la industria, contamos con <strong>27 sucursales en México y 10 en Centro y Sudamérica.</strong></p>
      </div>
    </div>
    <div class="detalle animated"></div>
    </section>
    <section class="section" data-section-name="news">
      <a class="hidden-xs" href="#MapadeSitio"><i class="fa fa-chevron-circle-down animated bounce nextSlideDown nuevos"></i></a>
      <h2 class="animated">NUEVOS PRODUCTOS</h2>
      <div class="container">
        <div class="row">
  
        <?php 
          foreach ($productos_nuevos as $productos_nuevos_array) {
        ?>
            
            <div class="col-md-3 col-sm-4 col-xs-12 news animated">
          <div class="view view-more">
                        <a href="<?php echo base_url(); ?>producto/detalle/<?php echo $productos_nuevos_array['Id_Producto']; ?>" class="venobox" data-gall="productos-img" data-type="ajax"><img src="<?php echo base_url(); ?>img/_Productos/<?php echo $productos_nuevos_array['Imagen']; ?>" class="img-responsive" alt=""></a>
            <div class="family"><?php echo $productos_nuevos_array['Familia']; ?></div>
            <div class="producto"><a href="<?php echo base_url(); ?>producto/detalle/<?php echo $productos_nuevos_array['Id_Producto']; ?>" class="venobox" data-gall="productos" data-type="ajax"><?php echo $productos_nuevos_array['Producto']; ?></a></div>
          </div>
          </div>
  
        <?php
          }
        ?>
        </div>
      </div>
    </section>

