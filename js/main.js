
// disable :hover on touch devices
// based on https://gist.github.com/4404503 
// via https://twitter.com/javan/status/284873379062890496
// + https://twitter.com/pennig/status/285790598642946048
// re http://retrogamecrunch.com/tmp/hover
// NOTE: we should use .no-touch class on CSS
// instead of relying on this JS code
function removeHoverCSSRule() {
  if ('createTouch' in document) {
    try {
      var ignore = /:hover/;
      for (var i = 0; i < document.styleSheets.length; i++) {
        var sheet = document.styleSheets[i];
        if (!sheet.cssRules) {
          continue;
        }
        for (var j = sheet.cssRules.length - 1; j >= 0; j--) {
          var rule = sheet.cssRules[j];
          if (rule.type === CSSRule.STYLE_RULE && ignore.test(rule.selectorText)) {
            sheet.deleteRule(j);
          }
        }
      }
    }
    catch(e) {
    }
  }
}

 $(".view").hover(function () {
    $(this).find(".contenidoHover").toggleClass("cambiar_hover");
    $(this).find(".botones ul").toggleClass("visible");
 });

 var $window = $(window),
     $body = $('body');

 $(window).on('resize', function () {
    if ($window.width() < 768) {
       $body.removeClass('resize');
   }else{

    $body.addClass('resize')};
 });

$(document).ready(function() {



  $(function() {
  var loc = window.location.href; // returns the full URL
  if(/productos/.test(loc)) {
    $('li.Productos').addClass('active');
  }
  if(/quienes_somos/.test(loc)) {
    $('li.Quienes').addClass('active');
  }
  if(/distribuidores/.test(loc)) {
    $('li.Distribuidores').addClass('active');
  }
  if(/sucursales/.test(loc)) {
    $('li.Sucursales').addClass('active');
  }
  if((/noticias/.test(loc)) || (/noticia/.test(loc))) {
    $('li.Noticias').addClass('active');
  }
  if(/alianzas/.test(loc)) {
    $('li.Alianzas').addClass('active');
  }
  if(/mx/.test(loc)) {
    $('a.mx-distribuidor').addClass('show');
  }
});




if ( $(window).width() > 768) {     
  //Add your javascript for large screens here

// hide our element on page load
      $('.news').css('opacity', 0);
      $('.home .merik-txt-l').css('opacity', 0);
      $('.home .merik-txt-r').css('opacity', 0);
      $('.home .h1').css('opacity', 0);
      $('.home .h3').css('opacity', 0);
      $('.detalle').css('opacity', 0);

      console.log('mas de 500');
      $('#fullpage').fullpage({
        anchors: ['home', 'conMerikEsPosible', 'nuevosProductos', 'MapadeSitio'],
        scrollOverflow: true,
        // paddingTop: '200px',
        afterLoad: function(anchorLink, index){

          if(anchorLink == 'home'){
            // $("nav").removeClass("small");
            // $('header').removeClass('smallScroll');
          }

          //section conMerikEsPosible
          if(anchorLink == 'conMerikEsPosible'){
            
            $('.h1').addClass('fadeInDown');
            $('.h3').addClass('fadeInDown');
            $('.detalle').addClass('fadeInUp');
            $('.merik-txt-l').addClass('fadeInLeft');
            $('.merik-txt-r').addClass('fadeInRight');
            // $("nav").addClass("small");
            // $('header').addClass('smallScroll');
          }

          //section nuevosProductos
          if(anchorLink == 'nuevosProductos'){
            // $("nav").addClass("small");
            // $('header').addClass('smallScroll');
            $('.news').addClass('fadeInUp');
            $('section[data-anchor="nuevosProductos"] h3').addClass('fadeInDown');
          }

          // section Footer
          if(anchorLink == 'MapadeSitio'){
            // $("nav").addClass("small");
            // $('header').addClass('smallScroll');
          }
        }
      });
}
else {
  //Add your javascript for small screens here

  // hide our element on page load
      $('.news').css('opacity', 1);
      $('.home .merik-txt-l').css('opacity', 1);
      $('.home .merik-txt-r').css('opacity', 1);
      $('.home .h1').css('opacity', 1);
      $('.home .h3').css('opacity', 1);
      $('.detalle').css('opacity', 1);
$('section[data-section-name="home"], .section[data-section-name="home"] div.fp-tableCell').css('height', window.innerHeight+'px');
$('.section[data-section-name="merik"], .section[data-section-name="merik"] div.fp-tableCell').removeAttr('style');
$('.section[data-section-name="news"], .section[data-section-name="news"] div.fp-tableCell').removeAttr('style');
$('.section[data-section-name="footer"], .section[data-section-name="footer"] div.fp-tableCell').removeAttr('style');
      

$('.fullPage').fullpage({
        //Scrolling
       
        autoScrolling: false,
        fitToSection: false,
        scrollBar: false,
    });
}



   var mouse_position;
   var animating = false;
   //GET MOUSE POSITION
   $(document).mousemove(function (e) {
       //$("body").on("mousemove", function(mouse_pointer) {
       //console.log(mouse_pointer.pageX - $(window).scrollLeft());
       //mouse_position = mouse_pointer.pageX - $(window).scrollLeft();
       if (animating) {
           return;
       }
       mouse_position = e.clientX;

       console.log(mouse_position);
       if (mouse_position <= 100) {
           //SLIDE IN MENU
           animating = true;
           $('#cms_bar').animate({
               left: 0,
               opacity: 1
           }, 200, function () {
               animating = false;
           });
           console.log('menu shown');
       } else if (mouse_position > 100) {
           animating = true;
           $('#cms_bar').animate({
               left: -100,
               opacity: 0
           }, 500, function () {
               animating = false;
           });
           console.log('menu hidden');
       }
   });
    });

// Menú

$(document).on("scroll", function() {
  if ($(document).scrollTop() > 254) {
    $("aside.sidebar").addClass("fixSidebar");
  } else {
    $("aside.sidebar").removeClass("fixSidebar");
  }

  // Sidebar sticky

$("aside.sidebar").stick_in_parent()
  .on("sticky_kit:bottom", function(e) {
    $("aside.sidebar").addClass("unstuck");
  });
});


// var $document = $(document),
//     $element = $('aside'),
//     className = 'hasScrolled';

// $document.scroll(function() {
//   if ($document.scrollTop() >= 250) {
//     // user scrolled 50 pixels or more;
//     // do stuff
//     $element.addClass(className);
//   } else {
//     $element.removeClass(className);
//   }
// });


 // var swiper = new Swiper('.swiper-container', {
 //        pagination: '.swiper-pagination',
 //        paginationClickable: true,
 //        nextButton: '.swiper-button-next',
 //        prevButton: '.swiper-button-prev',
 //        loop: true,
 //        spaceBetween: 30
 //    });

// venobox

$(document).ready(function(){

    /* default settings */
    $('.venobox').venobox(); 


    /* custom settings */
    $('.venobox_custom').venobox({
        framewidth: '',        // default: ''
        frameheight: '',       // default: ''
        border: '10px',             // default: '0'
        bgcolor: '#fff',         // default: '#fff'
        titleattr: 'data-title',    // default: 'title'
        numeratio: true,            // default: false
        infinigall: true            // default: false
    });

    /* auto-open #firstlink on page load */
    $("#firstlink").venobox().trigger('click');
});

  $('article').readmore({
  speed: 75,
  lessLink: '<a href="#">Leer menos</a>'
});

// Imágenes en banners

var upperLimit = 3;
var randomNum = Math.floor((Math.random() * upperLimit) + 1);    

$("body.INDUSTRIAL .banner").css("background-image","url('../../../img/industrial_0" + randomNum + ".png')");
$("body.AUTOTRANSPORTE .banner, body.AUTOTRASPORTE .banner").css("background-image","url('../../../img/autotransporte_0" + randomNum + ".png')");


// touch

var touch = window.ontouchstart
            || navigator.MaxTouchPoints > 0
            || navigator.msMaxTouchPoints > 0;

if (touch) { // remove all :hover stylesheets
    try { // prevent crash on browsers not supporting DOM styleSheets properly
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    stylesheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}


/**
 * Converts :hover CSS to :active CSS on mobile devices.
 * Otherwise, when tapping a button on a mobile device, the button stays in
 * the :hover state until the button is pressed. 
 *
 * Inspired by: https://gist.github.com/rcmachado/7303143
 * @author  Michael Vartan <michael@mvartan.com>
 * @version 1.0 
 * @date    2014-12-20
 */
function hoverTouchUnstick() {
  // Check if the device supports touch events
  if('ontouchstart' in document.documentElement) {
    // Loop through each stylesheet
    for(var sheetI = document.styleSheets.length - 1; sheetI >= 0; sheetI--) {
      var sheet = document.styleSheets[sheetI];
      // Verify if cssRules exists in sheet
      if(sheet.cssRules) {
        // Loop through each rule in sheet
        for(var ruleI = sheet.cssRules.length - 1; ruleI >= 0; ruleI--) {
          var rule = sheet.cssRules[ruleI];
          // Verify rule has selector text
          if(rule.selectorText) {
            // Replace hover psuedo-class with active psuedo-class
            rule.selectorText = rule.selectorText.replace(":hover", ":active");
          }
        }
      }
    }
  }
}