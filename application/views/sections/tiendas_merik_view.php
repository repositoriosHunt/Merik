<section class="section" data-section-name="distribuidores">
	<h1 class="h1">Busca una Tienda Merik</h1>
	<p class="text-center">Sólo en nuestras tiendas podrás encontrar productos certificados y exclusivos 100% Merik. <br><strong>¡Te invitamos a conocerlas!</strong></p>

	<div class="container buscaDistribuidor">
		<div class="col-md-12">
			<p><strong>¿Qué tipo de productos buscas?</strong></p>
		</div>
		<div class="col-md-12 btnsFiltro">
			<button class="btn col-xs-6 col-sm-3 btn-default btn-lg todos" type="button" id="todos"><i class="fa fa-globe"></i><br>Todos</button>
			<button class="btn col-xs-6 col-sm-3 btn-default btn-lg residencial" type="button" id="residencial"><span class="icon-residencial"></span><br>Residencial</button>
			<button class="btn col-xs-6 col-sm-3 btn-default btn-lg industrial" type="button" id="industrial"><span class="icon-industrial"></span><br>Industrial</button>
			<button class="btn col-xs-6 col-sm-3 btn-default btn-lg autotransporte" type="button" id="transporte"><span class="icon-autotransporte"></span><br>Autotransporte</button>
		</div>
		<div class="col-md-12">
			<p><strong>¿Dónde quieres instalar el equipo?</strong></p>
			<div id="map_canvas" class="mapa" style="width: 100%; height: 300px; margin: 10px 0;"></div>
		</div>
			
		
		<div class="col-md-12">
			
			<button class="ubicacion col-xs-12 col-sm-2" onClick="localizar()">Mi Ubicación</button>
			<input id="searchTextField" type="text" class="col-xs-12 col-sm-10">
			<span class="recomendacion col-sm-12 col-sm-offset-2">Recomendación de búsqueda: (Colonia, Municipio)</span>
		
			<button class="btn col-xs-12 col-sm-12 btn-default btn-lg contacto" onClick="contacto()">Quiero que me contacten</button>
		</div>
	</div>

</section>

