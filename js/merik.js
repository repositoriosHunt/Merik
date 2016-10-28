var update_admin = function () {
		if ($("#admin").is(":checked")) {
				$('#admin-sel').prop('disabled', false);
		}
		else {
				$('#admin-sel').prop('disabled', 'disabled');
		}
	};
	$(update_admin);
	$("#admin").change(update_admin);

var update_electric = function () {
		if ($("#electric").is(":checked")) {
				$('#electric-sel').prop('disabled', false);
		}
		else {
				$('#electric-sel').prop('disabled', 'disabled');
		}
	};
	$(update_electric);
	$("#electric").change(update_electric);

var update_almacen = function () {
		if ($("#almacen").is(":checked")) {
				$('#almacen-sel').prop('disabled', false);
		}
		else {
				$('#almacen-sel').prop('disabled', 'disabled');
		}
	};
	$(update_almacen);
	$("#almacen").change(update_almacen);

var update_contabilidad = function () {
		if ($("#contabilidad").is(":checked")) {
				$('#contabilidad-sel').prop('disabled', false);
		}
		else {
				$('#contabilidad-sel').prop('disabled', 'disabled');
		}
	};
	$(update_contabilidad);
	$("#contabilidad").change(update_contabilidad);

var update_personal = function () {
		if ($("#personal").is(":checked")) {
				$('#personal-sel').prop('disabled', false);
		}
		else {
				$('#personal-sel').prop('disabled', 'disabled');
		}
	};
	$(update_personal);
	$("#personal").change(update_personal);


$("#campo_buscar").hide();
$("#campo_buscar_mini").hide();
$("#campo_buscar_2").hide();

$(document).on('click', function(e) {
		if ( $(e.target).closest('#boton_buscar').length ) {
				$("#campo_buscar").toggle();
				$("#campo_buscar").focus();
		}else if ( ! $(e.target).closest('#campo_buscar').length ) {
				$('#campo_buscar').hide();
				
		}
});



$("#boton_buscar_mini").click(function(event) {
	$("#campo_buscar_mini").toggle("fast");
	$("#campo_buscar_mini").focus();
});

$("#boton_buscar_2").click(function(event) {
	$("#campo_buscar_2").toggle("fast");
	$("#campo_buscar_2").focus();
});

$("#boton_enviar").click(function(event)
{
var res_val=true;





	if($('#nombre').val()=="")
	{
		res_val=false;
		$('#nombre').addClass('error');
				document.getElementById('error_name').innerHTML = '*Campo Obligatorio';
	}
	else{
		 $('#nombre').removeClass('error');
				 document.getElementById('error_name').innerHTML = '';
	}
	if ($('#email').val()=="") {
		res_val=false;
		$('#email').addClass('error');
		document.getElementById('error_email').innerHTML = '*Campo Obligatorio';
	}else{
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if ( !expr.test($('#email').val()) )
			{
				res_val=false;
				$('#email').addClass('error');
						document.getElementById('error_email').innerHTML = '*Formato incorrecto';
			}else{
				$('#email').removeClass('error');
					document.getElementById('error_email').innerHTML = '';
			}
		
	}
	/*if ($('#telefono').val()=="") {
		res_val=false;
		$('#telefono').addClass('error');
		document.getElementById('error_telefono').innerHTML = '*Campo Obligatorio';
	}else{
		$('#telefono').removeClass('error');
				 document.getElementById('error_telefono').innerHTML = '';
	}*/
	if ($('#mensaje').val()=="") {
		res_val=false;
		$('#mensaje').addClass('error');
		document.getElementById('error_mensaje').innerHTML = '*Campo Obligatorio';
	}else{
		$('#mensaje').removeClass('error');
				 document.getElementById('error_mensaje').innerHTML = '';
	}

	if($('#nombre').val()!="" && $('#email').val()!="" && /*$('#telefono').val()!="" &&*/ $('#mensaje').val()!="" && res_val==true){

		var dataString = 'nombre='+$('#nombre').val()+'&email='+$('#email').val()+'&telefono='+$('#telefono').val()+'&ciudad='+$('#ciudad').val()+'&mensaje='+$('#mensaje').val()+'&dam='+$("#id_proveedor").val()+'&producto='+$("#id_producto").val();
		var comprueba_captcha=$("#comprueba_captcha").val();
		var redirecciona_gracias=$("#redireccionar_gracias").val();
$.ajax({
								data:  "captcha="+$("#seguridad").val(),
								url:   comprueba_captcha,
								type:  'post',
								success:  function (response) {
												
													if (response=="i") {
								$('#captcha').addClass('error');
								document.getElementById('error_captcha').innerHTML = 'Captcha no es identico';
								
							}else{
								$('#captcha').removeClass('error');
				 document.getElementById('error_captcha').innerHTML = '';
								$.ajax({
								data:  dataString,
								url:   'http://merik-internacional.com/ws/contML.php',
								type:  'post',
								beforeSend: function () {
												$("#resultado").html("Procesando, espere por favor...");
								},
								success:  function (response) {
												$("#resultado").html("Enviado Correctamente.");
												//window.location=redirecciona_gracias;
												location.href=redirecciona_gracias;

												

								}
					});
							}

								}

					});
		}
		else
		{
			alert("Error")
		}
});


$("#boton_enviar_landing").click(function(event)
{
	var res_val=true;
	if($('#nombre').val()=="")
	{
		res_val=false;
		$('#nombre').addClass('error');
		document.getElementById('error_name').innerHTML = '*Campo Obligatorio';
	}
	else
	{
		$('#nombre').removeClass('error');
		document.getElementById('error_name').innerHTML = '';
	}
	if ($('#email').val()=="")
	{
		res_val=false;
		$('#email').addClass('error');
		document.getElementById('error_email').innerHTML = '*Campo Obligatorio';
	}
	else
	{
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if ( !expr.test($('#email').val()) )
		{
			res_val=false;
			$('#email').addClass('error');
			document.getElementById('error_email').innerHTML = '*Formato incorrecto';
		}
		else
		{
			$('#email').removeClass('error');
			document.getElementById('error_email').innerHTML = '';
		}
	}

	if ($('#mensaje').val()=="")
	{
		res_val=false;
		$('#mensaje').addClass('error');
		document.getElementById('error_mensaje').innerHTML = '*Campo Obligatorio';
	}
	else
	{
		$('#mensaje').removeClass('error');
		document.getElementById('error_mensaje').innerHTML = '';
	}

	if($('#nombre').val()!="" && $('#email').val()!="" && $('#mensaje').val()!="" && res_val==true)
	{
		var dataString = 'nombre='+$('#nombre').val()+'&email='+$('#email').val()+'&telefono='+$('#telefono').val()+'&ciudad='+$('#ciudad').val()+'&mensaje='+$('#mensaje').val()+'&dam='+$("#id_proveedor").val()+'&producto='+$("#id_producto").val();
		var comprueba_captcha=$("#comprueba_captcha").val();
		var redirecciona_gracias=$("#redireccionar_gracias").val();
		var tipo_landing=$("#tipo_landing").val();

		if(tipo_landing=="safoabrir")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nXw=";
		}
		else if(tipo_landing=="porsilaslluvias")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nXo=";
		}
		else if(tipo_landing=="esdemadrugada")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nXs=";
		}
		else if(tipo_landing=="traigomuchascompras")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nnM=";
		}
		else if(tipo_landing=="confiaenlosexpertos")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nnQ=";
		}
		else if(tipo_landing=="portuseguridad")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nnU=";
		}
		else if(tipo_landing=="garantizatuentrada")
		{
			servicio_landing="http://merik-internacional.com/ws/contMS.php?ms=nnY=";
		}
		// else if(tipo_landing=="haceFrio")
		// {
		// 	servicio_landing="http://merik-internacional.com/ws/contMS.php?nuevoWebService=";
		// }
		else
		{
			servicio_landing="";
		}


		$.ajax(
		{
			data:  "captcha="+$("#seguridad").val(),
			url:   comprueba_captcha,
			type:  'post',
			success:  function (response)
			{
				if (response=="i")
				{
					$('#captcha').addClass('error');
					document.getElementById('error_captcha').innerHTML = 'Captcha no es identico';
				}
				else
				{
					$('#captcha').removeClass('error');
					document.getElementById('error_captcha').innerHTML = '';
					$.ajax(
					{
						data:  dataString,
						url:   servicio_landing,
						type:  'post',
						beforeSend: function ()
						{
							$("#resultado").html("Procesando, espere por favor...");
						},
						success: function (response) 
						{
							$("#resultado").html("Enviado Correctamente.");
							location.href=redirecciona_gracias;
						}
					});
				}
			}
		});
	}
	else
	{
		alert("Error")
	}
});

$( "#buscador" ).submit(function( event ) {
	if ( $( "#campo_buscar" ).val() != "" ) {
		var url_send = $("#url_buscar").val()+"?campo_buscar="+($( "#campo_buscar").val());
		document.location.href = url_send;
	}
	event.preventDefault();
});

$( "#buscador_2" ).submit(function( event ) {
	if ( $( "#campo_buscar_2" ).val() != "" ) {
		var url_send = $("#url_buscar").val()+"?campo_buscar="+($( "#campo_buscar_2").val());
		document.location.href = url_send;
	}
	event.preventDefault();
});

$( "#buscador_mini" ).submit(function( event ) {
	if ( $( "#campo_buscar_2" ).val() != "" ) {
		var url_send = $("#url_buscar").val()+"?campo_buscar="+($( "#campo_buscar_mini").val());
		document.location.href = url_send;
	}
	event.preventDefault();
});




$(function(){
	$('#myGallery').galleryView({
			enable_overlays: true,
			overlay_position: 'top',
			panel_animation: 'crossfade'
	});
	$('#myGalleryMobile').galleryView({
			enable_overlays: true,
			overlay_position: 'top',
			panel_width: 350,
			panel_animation: 'crossfade'
	});
});
	
