<section class="scroll section" data-section-name="ida">
	
	<div class="col-sm-8 col-sm-offset-2">
		<h1 class="h1 animated">¿Te interesa estar con los mejores?</h1>
		<p class="text-center">Trabaja con los pioneros en la innovación de accesos automáticos, somos líderes del ramo en México y Latinoamérica con <strong>25 años de experiencia</strong>. Encuentra en <strong>Merik</strong> la oportunidad para construir carrera y tener el crecimiento laboral que buscas, envíanos tu currículum para que podamos conocerte.</p>
		<br><br>
	</div>
	<?php if(validation_errors() || isset($upload_error)){ ?>
	<div class="col-sm-12">
  		<?php echo (validation_errors()) ? validation_errors()."<br>" : ''; ?>
  		<?php echo (isset($upload_error)) ? $upload_error."<br>" : ''; ?>
	</div>
	<?php } ?>
	<div class="col-sm-12 formularioBolsa">
		<div class="col-md-6 col-md-offset-3 contactForm">
			<form action="<?=$url_base?>atraccion_talento" method="post" enctype="multipart/form-data">
				<div class="col-sm-6">
					<label for="Nombre">Nombre</label>
					<input class="form-control" type="text" id="Nombre" name="nombre" placeholder="Ej: Jesús Mendoza" required>
					
					<label class="control-label">Fecha de Nacimiento:</label>
					<?php 
						if(isset($datos['fecha_nacimiento']))
						{
							$fecha_nacimiento = explode("-", $datos['fecha_nacimiento']);
							$dia_nacimiento = $fecha_nacimiento[2];
							$mes_nacimiento = $fecha_nacimiento[1];
							$ano_nacimiento = $fecha_nacimiento[0];
						}
						else
						{
							$dia_nacimiento = 0;
							$mes_nacimiento = 0;
							$ano_nacimiento = 0;
						}
						
					?>
					<div class="form-group">
				        
				        <div class="col-xs-4 combo">
				            <select class="form-control" id="dia_nacimiento" name="dia_nacimiento" required>
				                <option value="">Día</option>
				                <option value="01" <?php  echo ($dia_nacimiento=="01") ? "selected":""; ?>>01</option>
								<option value="02" <?php  echo ($dia_nacimiento=="02") ? "selected":""; ?>>02</option>
								<option value="03" <?php  echo ($dia_nacimiento=="03") ? "selected":""; ?>>03</option>
								<option value="04" <?php  echo ($dia_nacimiento=="04") ? "selected":""; ?>>04</option>
								<option value="05" <?php  echo ($dia_nacimiento=="05") ? "selected":""; ?>>05</option>
								<option value="06" <?php  echo ($dia_nacimiento=="06") ? "selected":""; ?>>06</option>
								<option value="07" <?php  echo ($dia_nacimiento=="07") ? "selected":""; ?>>07</option>
								<option value="08" <?php  echo ($dia_nacimiento=="08") ? "selected":""; ?>>08</option>
								<option value="09" <?php  echo ($dia_nacimiento=="09") ? "selected":""; ?>>09</option>
								<option value="10" <?php  echo ($dia_nacimiento=="10") ? "selected":""; ?>>10</option>
								<option value="11" <?php  echo ($dia_nacimiento=="11") ? "selected":""; ?>>11</option>
								<option value="12" <?php  echo ($dia_nacimiento=="12") ? "selected":""; ?>>12</option>
								<option value="13" <?php  echo ($dia_nacimiento=="13") ? "selected":""; ?>>13</option>
								<option value="14" <?php  echo ($dia_nacimiento=="14") ? "selected":""; ?>>14</option>
								<option value="15" <?php  echo ($dia_nacimiento=="15") ? "selected":""; ?>>15</option>
								<option value="16" <?php  echo ($dia_nacimiento=="16") ? "selected":""; ?>>16</option>
								<option value="17" <?php  echo ($dia_nacimiento=="17") ? "selected":""; ?>>17</option>
								<option value="18" <?php  echo ($dia_nacimiento=="18") ? "selected":""; ?>>18</option>
								<option value="19" <?php  echo ($dia_nacimiento=="19") ? "selected":""; ?>>19</option>
								<option value="20" <?php  echo ($dia_nacimiento=="20") ? "selected":""; ?>>20</option>
								<option value="21" <?php  echo ($dia_nacimiento=="21") ? "selected":""; ?>>21</option>
								<option value="22" <?php  echo ($dia_nacimiento=="22") ? "selected":""; ?>>22</option>
								<option value="23" <?php  echo ($dia_nacimiento=="23") ? "selected":""; ?>>23</option>
								<option value="24" <?php  echo ($dia_nacimiento=="24") ? "selected":""; ?>>24</option>
								<option value="25" <?php  echo ($dia_nacimiento=="25") ? "selected":""; ?>>25</option>
								<option value="26" <?php  echo ($dia_nacimiento=="26") ? "selected":""; ?>>26</option>
								<option value="27" <?php  echo ($dia_nacimiento=="27") ? "selected":""; ?>>27</option>
								<option value="28" <?php  echo ($dia_nacimiento=="28") ? "selected":""; ?>>28</option>
								<option value="29" <?php  echo ($dia_nacimiento=="29") ? "selected":""; ?>>29</option>
								<option value="30" <?php  echo ($dia_nacimiento=="30") ? "selected":""; ?>>30</option>
								<option value="31" <?php  echo ($dia_nacimiento=="31") ? "selected":""; ?>>31</option>
				            </select>
				        </div>
				        <div class="col-xs-4 combo">
				            <select class="form-control" id="mes_nacimiento" name="mes_nacimiento" required>
				                <option value="">Mes</option>
				                <option value="01" <?php  echo ($mes_nacimiento=="01") ? "selected":""; ?>>Enero</option>
								<option value="02" <?php  echo ($mes_nacimiento=="02") ? "selected":""; ?>>Febrero</option>
								<option value="03" <?php  echo ($mes_nacimiento=="03") ? "selected":""; ?>>Marzo</option>
								<option value="04" <?php  echo ($mes_nacimiento=="04") ? "selected":""; ?>>Abril</option>
								<option value="05" <?php  echo ($mes_nacimiento=="05") ? "selected":""; ?>>Mayo</option>
								<option value="06" <?php  echo ($mes_nacimiento=="06") ? "selected":""; ?>>Junio</option>
								<option value="07" <?php  echo ($mes_nacimiento=="07") ? "selected":""; ?>>Julio</option>
								<option value="08" <?php  echo ($mes_nacimiento=="08") ? "selected":""; ?>>Agosto</option>
								<option value="09" <?php  echo ($mes_nacimiento=="09") ? "selected":""; ?>>Septiembre</option>
								<option value="10" <?php  echo ($mes_nacimiento=="10") ? "selected":""; ?>>Octubre</option>
								<option value="11" <?php  echo ($mes_nacimiento=="11") ? "selected":""; ?>>Noviembre</option>
								<option value="12" <?php  echo ($mes_nacimiento=="12") ? "selected":""; ?>>Diciembre</option>
				            </select>
				        </div>
				        <div class="col-xs-4 combo">
				            <select class="form-control" id="anio_nacimiento" name="anio_nacimiento" required>
				                <option value="">Año</option>
				                <?php 
									$anio=date(Y)-16;
									while(1930<=$anio)
									{
										$selected = ($ano_nacimiento==$anio) ? "selected":"";
										echo '<option value="'.$anio.'" '.$selected.'>'.$anio.'</option>';
										$anio--;
									}

								?>
				            </select>
				        </div>
				    </div>
								
					<label for="Escolaridad">Nivel de estudios</label>
					<select class="form-control" id="nivel_estudios" name="nivel_estudios" required>
						<option value="1">Posgrado</option>
						<option value="2">Licenciatura</option>
						<option value="3">Bachillerato</option>
						<option value="4">Otro</option>
					</select>
					<label for="Experiencia">Experiencia</label>
					    

					
				</div>
			
				<div class="col-sm-6">
					
			
					<label for="">Especialidad</label>
					<select name="especialidad" id="especialidad" class="form-control" required>
						<option value="1">Manufactura</option>
						<option value="2">Comercializadora</option>
					</select>
								
					<label for="Pretensiones">Pretensiones económicas</label>
					<select name="pretensiones" id="pretensiones" class="form-control" required>
						<option value="1">hasta $5,000.00</option>
						<option value="2">$5,000.00 a $10,000.00</option>
						<option value="3">$10,000.00 a $20,000.00</option>
						<option value="4">$20,000.00 o más</option>
					</select>
								
					<label for="Lugar">Estado de residencia</label>
					
					<select class="form-control" name="ciudad" id="ciudad" required>
						<?php 
						  foreach ($menu_ciudades as $menu_ciudades_array) {
						    echo '<option value="'.$menu_ciudades_array['Id_Geo_Ciudad'].'">'.$menu_ciudades_array['Ciudad'].'</option>';
						  }
						?>
						    
						    <option value="523">Baja California</option>
						    <option value="524">Baja California Sur</option>
						    <option value="525">Campeche</option>
						    <option value="526">Chiapas</option>
						    <option value="527">Chihuahua</option>
						    <option value="528">Coahuila de Zaragoza</option>
						    <option value="529">Colima</option>
						    <option value="530">Distrito Federal</option>
						    <option value="531">Durango</option>
						    <option value="532">Guanajuato</option>
						    <option value="533">Guerrero</option>
						    <option value="534">Hidalgo</option>
						    <option value="535">Jalisco</option>
						    <option value="536">Estado de México</option>
						    <option value="537">Michoacán de Ocampo</option>
						    <option value="538">Morelos</option><option value="539">Nayarit</option>
						    <option value="540">Nuevo León</option>
						    <option value="541">Oaxaca</option>
						    <option value="542">Puebla</option>
						    <option value="543">Querétaro</option>
						    <option value="544">Quintana Roo</option>
						    <option value="545">San Luis Potosí</option>
						    <option value="546">Sinaloa</option>
						    <option value="547">Sonora</option>
						    <option value="548">Tabasco</option>
						    <option value="549">Tamaulipas</option>
						    <option value="550">Tlaxcala</option>
						    <option value="551">Veracruz de Ignacio de la Llave</option>
						    <option value="552">Yucatán</option>
						    <option value="553">Zacatecas</option>                            
						</select>


					
					
				</div>

				<div class="col-sm-12">
					        	<div class="col-xs-12 col-sm-10 col-md-9">
						          <div class="checkbox">
						          	<label>
						          	  <input type="checkbox" id="admin" name="admin" value="Administración">
						          	  <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Administración
						          	</label>
						          </div>
					      		</div>
					          <div class="col-xs-12 col-sm-2 col-md-3">
					          	<select id="admin-sel" name="admin_sel" class="form-control">
					          									<option value="1">1-5 años</option>
					          									<option value="2">5-10 años</option>
					          									<option value="3">10 o más años</option>
					          								</select>
					          </div>
					        
					        <div class="col-xs-12 col-sm-10 col-md-9">
					        	<div class="checkbox">
					        	  <label>
					        	    <input type="checkbox" id="electric" name="electric" value="Equipos electrónicos">
					        	    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Equipos electrónicos
					        	  </label>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-2 col-md-3">
					          	<select id="electric-sel" name="electric_sel" class="form-control">
					          									<option value="1">1-5 años</option>
					          									<option value="2">5-10 años</option>
					          									<option value="3">10 o más años</option>
					          								</select>
					          </div>
					        <div class="col-xs-12 col-sm-10 col-md-9">
					        	<div class="checkbox">
					        	  <label>
					        	    <input type="checkbox" id="almacen" name="almacen" value="Almacenes">
					        	    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Almacenes
					        	  </label>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-2 col-md-3">
					          	<select id="almacen-sel" name="almacen_sel" class="form-control">
					          									<option value="1">1-5 años</option>
					          									<option value="2">5-10 años</option>
					          									<option value="3">10 o más años</option>
					          								</select>
					          </div>
					        <div class="col-xs-12 col-sm-10 col-md-9">
					        	<div class="checkbox">
					        	  <label>
					        	    <input type="checkbox" id="contabilidad" name="contabilidad" value="Contabilidad">
					        	    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Contabilidad
					        	  </label>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-2 col-md-3">
					          	<select id="contabilidad-sel" name="contabilidad_sel" class="form-control">
					          									<option value="1">1-5 años</option>
					          									<option value="2">5-10 años</option>
					          									<option value="3">10 o más años</option>
					          								</select>
					          </div>
					        <div class="col-xs-12 col-sm-10 col-md-9">
					        	<div class="checkbox">
					        	  <label>
					        	    <input type="checkbox" id="personal" name="personal" value="Administración de personal">
					        	    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Administración de personal
					        	  </label>
					        	</div>
					        </div>
					        <div class="col-xs-12 col-sm-2 col-md-3">
					          	<select id="personal-sel" name="personal_sel" class="form-control">
					          									<option value="1">1-5 años</option>
					          									<option value="2">5-10 años</option>
					          									<option value="3">10 o más años</option>
					          								</select>
					          </div>
					    </div>
					    <div class="col-xs-12">
					    	<label class="control-label">Subir CV</label>
					<input id="cv" name="cv" type="file" multiple=true class="file-loading" required>
					<script>
					$(document).on('ready', function() {
					    $("#cv").fileinput({showCaption: false});
					});
					</script>
					<br>
					    </div>
					    <div class="col-xs-12">
					    	<input type="submit" class="btn btn-default btn-lg btn-block enviar" name="btn_enviar" value="Enviar">
					    </div>

			</form>
		</div>
	</div>
<div class="row">
	
</div>
<div class="detalle animated"></div>
<div class="clearfix"></div>
</section>