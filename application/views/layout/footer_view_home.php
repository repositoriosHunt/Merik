<section class="section" data-section-name="footer" id="tofooter">
   
  <a class="hidden-xs" href="#home"><i class="fa tohome fa-chevron-circle-up animated bounce nextSlideDown"></i></a>
  <a class="linktohome" href="#tohome"><i class="fa totop fa-chevron-circle-up animated bounce nextSlideDown visible-xs"></i></a>
          <footer>
            <h2 style="margin-bottom:30px;">Con Merik es posible</h2>
            <div class="container">
              <div class="col-sm-3 generales">
                <ul>
                <?php 
                  foreach ($menu_footer_array as $menu_footer)
                  {
                    echo '<li><a class="parent" href="'.$url_base.$menu_footer['URL'].'">'.$menu_footer['Menu'].'</a></li>';
                  }
                ?>
                
                </ul>
              </div>
              <?php
                foreach ($menu_familias_footer as $menu_familias_footer_array)
                  {
                    echo '<div class="col-sm-3">';
                    echo '<ul class="parent '.$menu_familias_footer_array['nombre_padre_menu'].'">';
                    echo '<li><span class="parent">'.$menu_familias_footer_array['nombre_padre_menu'].' <i class="fa fa-angle-right visible-xs"></i></span></li>';
                      foreach ($menu_familias_footer_array['array_familias'] as $familias_footer)
                      {
                        $String=$familias_footer['Familia'];
                        
                        $String = str_replace("á","a",$String);
                        $String = str_replace("í","i",$String);
                        $String = str_replace("é","e",$String);
                        $String = str_replace("ó","o",$String);
                        $String = str_replace("ú","u",$String);
                        $String = str_replace("ñ","n",$String);
                        $String = str_replace("Ý","Y",$String);
                        $String = str_replace(" ","_",$String);
                        $String = strtolower($String);
                        echo '<li class="child"><a href="'.$url_base."productos/".$menu_familias_footer_array['url_padre_menu'].$String.'" >'.$familias_footer['Familia'].'</a></li>';
                      }
                    echo '</ul>';
                    echo '</div>';
                  }

              ?>
            </div>
            <div class="col-sm-12 legales">
                <div class="container">
                  <p>Merik, S.A. de C.V. es una empresa de Grupo Merik, comprometida a formar negocios generacionales.
                  Merik®, su nombre, logotipo y todos los rasgos distintivos de la imagen, son una marca registrada de Grupo Merik bajo la Ley Industrial de la Propiedad Intelectual.</p>      
                  <div class="col-sm-12">
                    <a class="mx-distribuidor" href="http://dam.merik.com" target="_blank">Acceso a distribuidores</a> | <a href="<?php echo $url_base;?>privacidad">Aviso de Privacidad</a> | País: 
                    <form class="chooseCountry" action="" >
                      <select class="selectpicker form-control" id="opc_paises">
                        <option>Elíge tu país</option>
                        <?php 
                        foreach ($menu_paises_footer as $paises_footer) {
                          echo '<option value="'.$paises_footer['Abreviatura'].'">'.$paises_footer['Pais'].'</option>';
                        }
                        ?>
                      </select>
                    </form>
                   
                  </p>
                </div>
              </div>
          </footer>
        </section>
      </div>



    <script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>js/vendor/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.fullPage.js"></script>
    <script src="<?php echo base_url(); ?>js/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>js/swiper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/readmore.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/merik.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.galleryview-3.0-dev.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.timers-1.2.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.ba-cond.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.slitslider.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.stickem.js"></script>
    <script src="<?php echo base_url(); ?>js/cbpBGSlideshow.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.imagesloaded.min.js"></script>
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>


<script type="text/javascript">
$(function() {
        cbpBGSlideshow.init();
      });

$( ".Residencial .parent" ).click(function() {
  $( ".Residencial li.child" ).toggle();
  $(this).find("i").toggleClass("fa-angle-right fa-angle-down");
});

$( ".Industrial .parent" ).click(function() {
  $( ".Industrial li.child" ).toggle();
  $(this).find("i").toggleClass("fa-angle-right fa-angle-down");
});

$( ".Autotransporte .parent" ).click(function() {
  $( ".Autotransporte li.child" ).toggle();
  $(this).find("i").toggleClass("fa-angle-right fa-angle-down");
});

$('#go-to-top').each(function(){
    $(this).click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });
});

function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$(".linktonuevos").click(function() {
   scrollToAnchor('tonuevos');
});

 $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
    $(document).ready(function() {
      
      
        $('#showmenu').click(function() {
                $('.contenedorproductos aside').addClass('slideAsideOut');
                $('.productList').removeClass('col-md-offset-3');
                $('.productList').removeClass('col-md-9');
                $('.productList').addClass('col-md-12');
                $('#hidemenu').show();
                $('.breadcrumbs').css('padding-left','6em');
                $(this).addClass('slideAsideOut');
                $('#showmenu').css('display', 'none');

        });
        // $('#hidemenu').click(function() {
        //         $('.contenedorproductos aside').show('slide', {direction: 'left'}, 8000);
        //         $('.productList').addClass('col-md-offset-3');
        //         $('.productList').addClass('col-md-9');
        //         $('.productList').removeClass('col-md-12');
        //         $('.breadcrumbs').css('padding-left','2.5em');
        //         $('#showmenu').show();
        //         $(this).hide();

        // });
        $('#hidemenu').hover(function() {
                $('.contenedorproductos aside').addClass('slideAside');
                $('.productList').addClass('col-md-offset-3');
                $('.productList').addClass('col-md-9');
                $('.productList').removeClass('col-md-12');
                $('.breadcrumbs').css('padding-left','2.5em');
                $('#showmenu').css('display', 'block');
                // show('slide', {direction: 'left'}, 800);
                $(this).hide();

        });
    });
if ($(window).width() < 768) {
   console.log('Mobile');
}
else {
   $(window).scroll(function(){
          if ($(this).scrollTop() > 0) {
            $('.productos .banner').addClass('Fixed');
            // $('.contenedorproductos aside').addClass('Fixed');
            $('.contenedorproductos').css('margin-top','211px');
          } else {
            $('.productos .banner').removeClass('Fixed');
            // $('.contenedorproductos aside').removeClass('Fixed');
            $('.contenedorproductos').css('margin-top','0');
          }
          
      });
}
    
      $(document).ready(function() {
      $('.contenedorproductos').stickem();
    });
    </script>


    <script type="text/javascript"> 
      $(function() {
      
        var Page = (function() {

          var $navArrows = $( '#nav-arrows' ),
            $nav = $( '#nav-dots > span' ),
            slitslider = $( '#slider' ).slitslider( {
              onBeforeChange : function( slide, pos ) {

                $nav.removeClass( 'nav-dot-current' );
                $nav.eq( pos ).addClass( 'nav-dot-current' );

              }
            } ),

            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              // add navigation events
              $navArrows.children( ':last' ).on( 'click', function() {

                slitslider.next();
                return false;

              } );

              $navArrows.children( ':first' ).on( 'click', function() {
                
                slitslider.previous();
                return false;

              } );

              $nav.each( function( i ) {
              
                $( this ).on( 'click', function( event ) {
                  
                  var $dot = $( this );
                  
                  if( !slitslider.isActive() ) {

                    $nav.removeClass( 'nav-dot-current' );
                    $dot.addClass( 'nav-dot-current' );
                  
                  }
                  
                  slitslider.jump( i + 1 );
                  return false;
                
                } );
                
              } );

            };

            return { init : init };

        })();

        Page.init();
      });
    </script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-43421838-1','auto');ga('send','pageview');
        </script>
<?php 
if(isset($maps))
{
?>
<script src="http://maps.google.com/maps/api/js?libraries=places&region=mx&language=sp&sensor=false"></script>
<script type="text/javascript">
  $(function()
  { 
    var locations2 = [
  <?php
  $cadena_producto_distribuidor="";
  if(isset($producto))
  {
    $cadena_producto_distribuidor="/".$producto;
  }

  if($maps=="distribuidores" || $maps == "distribuidor")
  {
    $ida = '';
    foreach ($coordenadas as $coordenadas_array) {
      if ($coordenadas_array['Anno_IDA'] == '2015')
              $ida = '<br><img src='.base_url().'img/logo_IDA.png width=40% align=right>';
            else
              $ida = '';
              
     echo "['<table width=\"360\"; border=0><tr><td width=130px; align=center><img src=".$logo_dam." width=100px height=100px border=0></td><td align=left><br><br><font class=Bold_titulo>".$coordenadas_array['Nombre_Empresa']."</font><br>".$coordenadas_array['Zona_']."".$ida."<br><br><a href=".$url_base."contacto/".$coordenadas_array['Id_Distribuidor'].$cadena_producto_distribuidor." style=color:#666;><b>Quiero contactarlo >></b></a></td></tr></table>',".$coordenadas_array['Coordenadas_Lat'].", ".$coordenadas_array['Coordenadas_Lon'].",'".base_url()."img/punto_sucursal.png', ".$coordenadas_array['Sucursal'].", '".$coordenadas_array['Especialidad']."'],\n";
   }
  ?>
    ];

    $("#residencial").click(function(event) {
      dibujar_mapa('1');
    });
    $("#industrial").click(function(event) {
      dibujar_mapa('2');
    });
    $("#transporte").click(function(event) {
      dibujar_mapa('3');
    });
    $("#todos").click(function(event) {
      mostrar_distribuidores(locations2);
    });



    function dibujar_mapa(buscar)
    {
      var i=0;
      var res=-1;
      var locations_new=[];
      var cadena="";
      for (i = 0; i < locations2.length; i++) 
        {

          cadena=locations2[i][5];
          if(cadena!=undefined)
          {
                res=cadena.search(buscar);
              if(res!=-1)
              {
                locations_new.push(locations2[i]);
              }
          }

          
        }
        mostrar_distribuidores(locations_new);
    }

    
  <?php } 
  else
  	{ 
  		foreach ($coordenadas as $coordenadas_array) {
              
     echo "['<table width=420px; border=0><tr><td width=180px; align=center><img src=".$logo_merik." width=150px height=41px border=0></td><td align=left><font class=Bold_titulo>Sucursal ".$coordenadas_array['Sucursal']."</font><br><br><font class=Ultra_texto>".$coordenadas_array['Direccion']."<br>".$coordenadas_array['Telefono_1']."<br>".$coordenadas_array['Telefono_2']."<br>".$coordenadas_array['Email']."</font></td></tr></table>',".$coordenadas_array['Coordenadas_Lat'].", ".$coordenadas_array['Coordenadas_Lon'].",'".base_url()."img/punto_sucursal.png', ".$coordenadas_array['Id_Sucursal']."],";
   }
   
   echo "];";
  } ?>
     

      mostrar_distribuidores(locations2);


      <?php 
      if(isset($producto))
      {
        $producto_datos = explode("_", $producto);
        echo "dibujar_mapa(".$producto_datos[0].");";
      }

    ?>

     function mostrar_distribuidores(locations)
     {

       //Imagen del icono
    <?php if($maps=="distribuidores" || $maps=="distribuidor") 
    {
    	echo "var image = '".base_url()."img/punto_dam.png';";
    }
    else
    {
    	echo "var image = '".base_url()."img/punto_sucursal.png';";
    }
    ?>
    
      //Mapa
    var map_canvas = new google.maps.Map(document.getElementById('map_canvas'), 
    {
      zoom: <?php echo $coordenadas_pais['Zoom'];?>,
      center: new google.maps.LatLng(<?php echo $coordenadas_pais['Coordenadas_Lat'];?>, <?php echo $coordenadas_pais['Coordenadas_Lon'];?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
      });
        //Variable apra mostrar Info
      var infowindow = new google.maps.InfoWindow();
  
      var marker, i;



      for (i = 0; i < locations.length; i++) 
      {  
      marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map_canvas,
            icon: image
      });
    

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
          infowindow.open(map_canvas, marker);
          }
      })(marker, i));
      }

      //Punto de la persona
    marker = new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $coordenadas_pais['Coordenadas_Lat'];?>, <?php echo $coordenadas_pais['Coordenadas_Lon'];?>),
          map: map_canvas,
          icon: image = '<?php echo base_url(); ?>img/punto_usuario.png'
    });
    
    
      //Buscador de Direcciones
    var input = document.getElementById('searchTextField');         
      var autocomplete = new google.maps.places.Autocomplete(input,{
          types: ["geocode"]
        });          
    
      autocomplete.bindTo('bounds', map_canvas); 
      var infowindow = new google.maps.InfoWindow(); 

      google.maps.event.addListener(autocomplete, 'place_changed', function() {
          infowindow.close();
          var place = autocomplete.getPlace();
          if (place.geometry.viewport) {
              map_canvas.fitBounds(place.geometry.viewport);
          } else {
              map_canvas(place.geometry.location);
              map_canvas(17);  
          }
          
          /*Aqui esta la actualización*/

          moveMarker('-'+place.geometry.location+'-', place.geometry.location);
      }); 


            $("input").focusin(function () {
          $(document).keypress(function (e) {
              if (e.which == 13) {
                  infowindow.close();
                  var firstResult = $(".pac-container .pac-item:first").text();
                
                  var geocoder = new google.maps.Geocoder();
                  geocoder.geocode({"address":firstResult }, function(results, status) {
                      if (status == google.maps.GeocoderStatus.OK) {
                          var lat =   results[0].geometry.location.lat(),
                                lng = results[0].geometry.location.lng(), 
                                placeName = results[0].address_components[0].long_name,
                                  latlng = new google.maps.LatLng(lat, lng);                        
                          moveMarker(placeName, latlng);
                          $("input").val(firstResult);
                      }
                  });
              }
          });
      });


        function moveMarker(placeName, latlng)
      {
        marker.setIcon(image);  
          marker.setPosition(latlng);
          infowindow.setContent(placeName);
          infowindow.open(map, marker);
      }

     }

  }); 

  function contacto()
  {
    location.href="<?php echo $url_base; ?>contacto";
  }
  
  
  function localizar()
  {

      navigator.geolocation.getCurrentPosition(ubicacion,error);
  }
  
 
  function ubicacion(posicion)
  {
    var contenedor = document.getElementById("mapa");
 
    var latitud = posicion.coords.latitude;
    var longitud = posicion.coords.longitude;
    var precision = posicion.coords.accuracy;

    <?php if($maps=="distribuidores" || $maps == "distribuidor") 
    {
      $cadena_producto="";
      if(isset($producto))
      {
        $cadena_producto='+"/'.$producto.'"';
      }
      else if(isset($id_distribuidor))
      {
        $cadena_producto='+"/'.$id_distribuidor.'"';
      }
    	echo 'window.location="'.$url_base.'distribuidores/"+latitud+"/"+longitud'.$cadena_producto.';';
    }
    else
    {
    	echo 'window.location="'.$url_base.'sucursales/"+latitud+"/"+longitud;';
    }
    ?>

    
  }
 
  function error(error)
  {
    if(error.code == 0)
      alert("Error Desconocido");
        else 
          if(error.code == 1)
              alert("No fue posible contactarte");
          else 
            if(error.code == 2)
                alert("No hay una ubicacion disponible");
            else 
              if(error.code == 3)
                  alert("Tiempo agotado");
              else
                  alert("Error Desconocido");
  }


</script>
<?php 
}
?>
 <script type="text/javascript">
                    
  $("#opc_paises").change(function(event) {
    var val = $('#opc_paises').val();
    location.href="<?php echo $url_base; ?>to/"+val;
    });
                    
</script>


    </body>
</html>
