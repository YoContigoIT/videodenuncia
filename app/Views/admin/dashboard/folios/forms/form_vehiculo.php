<div class="row">

	<div class="col-12">
		<p class="font-weight-bold text-center mt-3">GENERALES</p>
	</div>
	<hr>

	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="tipo_placas_vehiculo" class="form-label font-weight-bold">Tipo de placas:</label>
		<select class="form-control" id="tipo_placas_vehiculo" name="tipo_placas_vehiculo">
			<option selected disabled value="">Selecciona el tipo de placas</option>
			<option value="N">NACIONAL</option>
			<option value="F">FRONTERIZO</option>
			<option value="E">EXTRANJERO</option>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="placas_vehiculo" class="form-label font-weight-bold">Placas:</label>
		<input type="text" class="form-control" id="placas_vehiculo" name="placas_vehiculo">
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="estado_vehiculo" class="form-label font-weight-bold">Estado de origen:</label>
		<select class="form-control" id="estado_vehiculo_ad" name="estado_vehiculo_ad">
			<option selected disabled value="">Selecciona el estado</option>
			<?php foreach ($body_data->estados as $index => $estado) { ?>
				<option value="<?= $estado->ESTADOID ?>"> <?= $estado->ESTADODESCR ?></option>
			<?php } ?>
		</select>
		<select class="form-control" id="estado_extranjero_vehiculo_ad" name="estado_extranjero_vehiculo_ad" style="display: none;">
			<option selected disabled value="">Selecciona el estado</option>
			<?php foreach ($body_data->estadosExtranjeros as $index => $estado_extranjero) { ?>
				<option value="<?= $estado_extranjero->ESTADOEXTRANJEROID ?>"> <?= $estado_extranjero->ESTADOEXTRANJERODESCR ?></option>
			<?php } ?>
		</select>
		<!-- <input type="text" class="form-control" id="estado_vehiculo" name="estado_vehiculo"> -->
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="serie_vehiculo" class="form-label font-weight-bold">No. Serie:</label>
		<input type="text" class="form-control" id="serie_vehiculo" name="serie_vehiculo">
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="tipo_vehiculo" class="form-label font-weight-bold">Tipo de vehículo:</label>
		<select class="form-control" id="tipo_vehiculo" name="tipo_vehiculo">
			<option selected disabled value="">Selecciona el tipo de vehículo</option>
			<?php foreach ($body_data->tipoVehiculo as $index => $tipo_vehiculo) { ?>
				<option value="<?= $tipo_vehiculo->VEHICULOTIPOID ?>"> <?= $tipo_vehiculo->VEHICULOTIPODESCR ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="color_vehiculo" class="form-label font-weight-bold">Color:</label>
		<select class="form-control" id="color_vehiculo" name="color_vehiculo">
			<option selected disabled value="">Selecciona el color</option>
			<?php foreach ($body_data->colorVehiculo as $index => $color_vehiculo) { ?>
				<option value="<?= $color_vehiculo->VEHICULOCOLORID ?>"> <?= $color_vehiculo->VEHICULOCOLORDESCR ?> </option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="color_tapiceria_vehiculo" class="form-label font-weight-bold">Color tapiceria:</label>
		<select class="form-control" id="color_tapiceria_vehiculo" name="color_tapiceria_vehiculo">
			<option selected disabled value="">Selecciona el color de tapiceria</option>
			<?php foreach ($body_data->colorVehiculo as $index => $color_vehiculo) { ?>
				<option value="<?= $color_vehiculo->VEHICULOCOLORID ?>"> <?= $color_vehiculo->VEHICULOCOLORDESCR ?> </option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="num_chasis_vehiculo" class="form-label font-weight-bold">No. Chasis:</label>
		<input type="text" class="form-control" id="num_chasis_vehiculo" name="num_chasis_vehiculo">
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="transmision_vehiculo" class="form-label font-weight-bold ">Caja / Transmisión:</label>
		<select class="form-control" id="transmision_vehiculo" name="transmision_vehiculo">
		<option selected  value="A">Automática</option>
		<option selected  value="M">Manual</option>
		<option selected  value="D">Dual</option>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="traccion_vehiculo" class="form-label font-weight-bold ">Tracción:</label>
		<select class="form-control" id="traccion_vehiculo" name="traccion_vehiculo">
		<option selected  value="D">Doble</option>
		<option selected  value="S">Sencilla</option>
		<option selected  value="O">Dual</option>
		</select>
	</div>
	<div class="col-12 mb-3">
		<label for="description_vehiculo" class="form-label font-weight-bold">Otras características que permitan identificar el vehiculo:</label>
		<textarea class="form-control" id="description_vehiculo" name="description_vehiculo" rows="10" oninput="mayuscTextarea(this)"></textarea>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="foto_vehiculo" class="form-label font-weight-bold">Fotografía del vehículo:</label>
		<a class="btn btn-primary btn-block mb-4 font-weight-bold" id="downloadImage" download="">Descargar imagen</a>
		<img class="img-fluid mb-3" id="foto_vehiculo" name="foto_vehiculo" src="" alt="">
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="doc_vehiculo" class="form-label font-weight-bold">Documento del vehículo:</label>
		<a class="btn btn-primary btn-block mb-4 font-weight-bold" id="downloadDoc" download="">Descargar documento</a>
		<img class="img-fluid mb-3" id="doc_vehiculo" name="doc_vehiculo" src="" alt="">
	</div>
	
	<div class="col-12">
		<p class="font-weight-bold text-center mt-3">FABRICANTE</p>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="distribuidor_vehiculo" class="form-label font-weight-bold">Distribuidor:</label>
		<select class="form-control" id="distribuidor_vehiculo_ad" name="distribuidor_vehiculo_ad">
			<option selected disabled value="">Selecciona el distribuidor</option>
			<?php foreach ($body_data->distribuidorVehiculo as $index => $distribuidor_vehiculo) { ?>
				<option value="<?= $distribuidor_vehiculo->VEHICULODISTRIBUIDORID?>"> <?= $distribuidor_vehiculo->VEHICULODISTRIBUIDORDESCR ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="marca_ad" class="form-label font-weight-bold">Marca:</label>
		<select class="form-control" id="marca_ad" name="marca_ad">
			<option selected disabled value="">Selecciona la marca</option>
			<?php foreach ($body_data->marcaVehiculo as $index => $marca) { ?>
				<option value="<?= $marca->VEHICULODISTRIBUIDORID ?> <?= $marca->VEHICULOMARCAID ?>"> <?= $marca->VEHICULOMARCADESCR ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="linea_vehiculo" class="form-label font-weight-bold">Modelo:</label>
		<select class="form-control" id="linea_vehiculo_ad" name="linea_vehiculo_ad">
			<option selected disabled value="">Selecciona el modelo</option>
			<?php foreach ($body_data->lineaVehiculo as $index => $linea_vehiculo) { ?>
				<option value="<?= $linea_vehiculo->VEHICULODISTRIBUIDORID ?> <?= $linea_vehiculo->VEHICULOMARCAID ?> <?= $linea_vehiculo->VEHICULOMODELOID ?>"> <?= $linea_vehiculo->VEHICULOMODELODESCR ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="version_vehiculo" class="form-label font-weight-bold">Versión:</label>
		<select class="form-control" id="version_vehiculo_ad" name="version_vehiculo_ad">
			<option selected disabled value="">Selecciona la versión</option>
			<?php foreach ($body_data->versionVehiculo as $index => $version_vehiculo) { ?>
				<option value="<?= $version_vehiculo->VEHICULODISTRIBUIDORID ?> <?= $version_vehiculo->VEHICULOMARCAID ?> <?= $version_vehiculo->VEHICULOMODELOID ?> <?= $version_vehiculo->VEHICULOVERSIONID ?>"> <?= $version_vehiculo->VEHICULOVERSIONDESCR ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="servicio_vehiculo" class="form-label font-weight-bold">Servicio:</label>
		<select class="form-control" id="servicio_vehiculo_ad" name="servicio_vehiculo_ad">
			<option selected disabled value="">Selecciona el servicio</option>
			<?php foreach ($body_data->servicioVehiculo as $index => $servicio_vehiculo) { ?>
				<option value="<?= $servicio_vehiculo->VEHICULOSERVICIOID ?>"> <?= $servicio_vehiculo->VEHICULOSERVICIODESCR ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="modelo_vehiculo" class="form-label font-weight-bold">Año:</label>
		<input class="form-control" name="modelo_vehiculo" id="modelo_vehiculo">

	</div>
	<div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-3">
		<label for="seguro_vigente_vehiculo" class="form-label font-weight-bold ">¿Cuenta con seguro vigente?</label>
		<select class="form-control" id="seguro_vigente_vehiculo" name="seguro_vigente_vehiculo">
		<option selected  value="S">Si</option>
		<option selected  value="N">No</option>
		<option selected  value="D">Se desconoce</option>
		</select>
		
	</div>

</div>
