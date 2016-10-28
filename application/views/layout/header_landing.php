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
    
