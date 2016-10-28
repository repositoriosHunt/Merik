<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Con Merik es Posible</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/merik.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/swiper.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/venobox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.galleryview-3.0-dev.css" type="text/css" media="screen" />

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1514424592188029');
        fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1514424592188029&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TNMDFT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TNMDFT');</script>
		<!-- End Google Tag Manager -->

        <script type="text/javascript">
            adroll_adv_id = "2LFTHALIURHAPNVBR22USP";
            adroll_pix_id = "LP5RGLUHAZG73OFB6AG4NL";
            /* OPTIONAL: provide email to improve user identification */
            /* adroll_email = "username@example.com"; */
            (function () {
                var _onload = function(){
                    if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
                    if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
                    var scr = document.createElement("script");
                    var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                    scr.setAttribute('async', 'true');
                    scr.type = "text/javascript";
                    scr.src = host + "/j/roundtrip.js";
                    ((document.getElementsByTagName('head') || [null])[0] ||
                        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                };
                if (window.addEventListener) {window.addEventListener('load', _onload, false);}
                else {window.attachEvent('onload', _onload)}
            }());
        </script>      

        <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php
        if (false !== strpos($_SERVER['REQUEST_URI'], 'quienes_somos')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/9964b24d1a90b519';new Image().src = ssaUrl;</script>";
        }
        if (false !== strpos($_SERVER['REQUEST_URI'], 'distribuidores')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/9964b24d1a90b519';new Image().src = ssaUrl;</script>";
        }
        if (false !== strpos($_SERVER['REQUEST_URI'], 'sucursales')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/0d3a7017a347b2ba';new Image().src = ssaUrl;</script>";
        }
        if (false !== strpos($_SERVER['REQUEST_URI'], 'noticias')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/ca585b1dc412fe9a';new Image().src = ssaUrl;</script>";
        }
        if (false !== strpos($_SERVER['REQUEST_URI'], 'ida')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/21935002b92b58a4';new Image().src = ssaUrl;</script>";
        }
        if (false !== strpos($_SERVER['REQUEST_URI'], 'contacto')) {
          echo "<script type='text/javascript'>var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel.sitescout.com/iap/27d61b73c21c99b5';new Image().src = ssaUrl;</script>";
        }
        ?>
    </head>
    <body class="secciones">
    	<div class="wrap" >
        <header>
            <div class="container">
              <div class="col-sm-4">
                <a href="<?php echo $url_base;?>contacto" class="contact hidden-xs"><i class="fa fa-envelope-o"></i><span>CONTÁCTANOS</span></a>
              </div>
              <div class="col-sm-4 logo hidden-xs">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logoBlco.jpg" height="69" width="254" alt="Merik"></a>
              </div>
              <div class="col-sm-4 search">
                <form action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador" ><input type="hidden" id="url_buscar" value="<?php echo $url_base."buscador";?>"><input type="text" name="campo_buscar" id="campo_buscar" placeholder="Palabra a buscar" /> <i class="fa fa-search" id="boton_buscar"></i></form>
              </div>
            </div>
          </header>
        
        <nav class="navbar navbar-default">
      <div class="container-fluid container menu">
           <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="visible-xs navbarLogo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logoBlco.jpg" height="69" width="254" alt="Merik"></a>
          </div>
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
              <form class="navbar-form visible-xs" role="search" action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador_2" placeholder="Palabra a buscar"><input type="text" name="campo_buscar" id="campo_buscar_2" placeholder="Palabra a buscar" /> <i class="fa fa-search" id="boton_buscar_2"></i></form>
               <div class="minicontact">
                 <a href="<?php echo $url_base;?>contacto"><i class="fa fa-envelope-o"></i></a>
              </div>

              <div class="minisearch">
                <form action="<?php echo $url_base; ?>buscador" method="post" name="buscador" id="buscador_mini"><input type="text" name="campo_buscar" id="campo_buscar_mini" placeholder="Palabra a buscar" /> <i class="fa fa-search" id="boton_buscar_mini"></i></form>
              </div>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav> 
        <div id=""> 
