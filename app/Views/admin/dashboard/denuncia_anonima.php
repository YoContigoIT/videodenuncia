<?= $this->extend('admin/templates/dashboard_template') ?>
<?= $this->section('title') ?>
<?php echo $header_data->title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
<?php include 'modals_denuncia_anonima/insert_persona_victima_modal.php' ?>
<?php include 'modals_denuncia_anonima/insert_persona_imputado_modal.php' ?>
<?php include 'modals_denuncia_anonima/form_asignar_fisfis_insert.php' ?>
<?php include 'modals_denuncia_anonima/insert_objetos_involucrados_modal.php' ?>
<?php include 'modals_denuncia_anonima/salida_modal_denuncia_anonima.php' ?>
<?php include 'modals_denuncia_anonima/insert_vehiculo_modal.php' ?>
<?php include 'modals_denuncia_anonima/form_denuncia.php' ?>
<?php include 'modals_denuncia_anonima/persona_modal_da.php' ?>
<?php include 'modals_denuncia_anonima/vehiculo_modal_da.php' ?>
<?php include 'modals_denuncia_anonima/agregar_archivos_anonima_modal.php' ?>

<?php include 'modals_denuncia_anonima/objetos_involucrados_modal_update.php' ?>




<div class="row">
	<div class="col-12">
		<div class="card rounded bg-white shadow">
			<div class="card-body">
				<h1 class="text-center font-weight-bold">DENUNCIA ANÓNIMA</h1>
				<input type="text" class="form-control" id="folio" name="folio" disabled hidden>
				<br>

				<input type="text" class="form-control" id="year" name="year" disabled hidden>

				<div class="row" id="foliodiv" name="foliodiv">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">INFORMACIÓN DEL HECHO</h3>
					</div>
					<form id="form_folio" action="" method="post" class="row p-0 m-0 needs-validation">

						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="fecha" class="form-label font-weight-bold">Fecha del delito:</label>
							<input type="date" class="form-control" id="fecha" name="fecha" max="<?= date("Y-m-d") ?>" required>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="hora" class="form-label font-weight-bold">Hora del delito:</label>
							<input type="time" class="form-control" id="hora" name="hora" required>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<div class="form-group">
								<label for="municipio" class="form-label font-weight-bold">Municipio:</label>
								<select class="form-control" id="municipio" name="municipio" required>
									<option selected disabled value="">Elige el municipio</option>
									<?php foreach ($body_data->municipios as $index => $municipio) { ?>
										<option value="<?= $municipio->MUNICIPIOID ?>"> <?= $municipio->MUNICIPIODESCR ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<div class="form-group">
								<label for="localidad" class="form-label font-weight-bold">Localidad:</label>
								<select class="form-control" id="localidad" name="localidad" required>
									<option selected disabled value="">Selecciona la localidad</option>

								</select>
							</div>
						</div>

						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<div class="form-group">
								<label for="colonia" class="form-label font-weight-bold">Colonia:</label>
								<select class="form-control" id="colonia_select" name="colonia_select" required>
									<option selected disabled value="">Selecciona la colonia</option>
								</select>
								<input type="text" class="form-control d-none" id="colonia" name="colonia" maxlength="50">
							</div>
						</div>

						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="calle" class="form-label font-weight-bold">Calle o avenida:</label>
							<input type="text" class="form-control" id="calle" name="calle" maxlength="50" required>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="exterior" class="form-label font-weight-bold">No. exterior:</label>
							<input type="text" class="form-control" id="exterior" name="exterior" maxlength="10" required>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="interior" class="form-label font-weight-bold">No. interior:</label>
							<input type="text" class="form-control" id="interior" name="interior" maxlength="10">
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="referencias" class="form-label font-weight-bold">Referencias</label>
							<input type="text" class="form-control" id="referencias" name="referencias" maxlength="300">
						</div>
						<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="narracion" class="form-label font-weight-bold">Narración del delito</label>
							<input type="text" class="form-control" id="narracion" name="narracion" maxlength="300">
						</div> -->

						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<div class="form-group">
								<label for="lugar" class="form-label font-weight-bold">Lugar:</label>
								<select class="form-control" id="lugar" name="lugar" required>
									<option selected disabled value="">Elige el lugar del delito</option>
									<?php foreach ($body_data->lugares as $index => $lugar) { ?>
										<option value="<?= $lugar->HECHOLUGARID ?>"> <?= $lugar->HECHODESCR ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>

						<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="armas" class="form-label font-weight-bold">Armas:</label>
							<textarea class="form-control" id="armas" name="armas" row="10" oninput="mayuscTextarea(this)"></textarea>
						</div> -->

						<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
							<label for="notas_denuncia" class="form-label font-weight-bold">Notas:</label>
							<textarea class="form-control" id="notas_denuncia" name="notas_denuncia" row="10" oninput="mayuscTextarea(this)" onkeyup="contarCaracteresDa(this)" maxlength="1000"></textarea>
							<small id="numCaracterDa">1000 caracteres restantes</small>
						</div>


						<div class="col-12 mb-3 text-center">
							<button type="submit" id="insertFolio" name="insertFolio" class="btn btn-primary font-weight-bold btn-lg">AGREGAR FOLIO</button>
						</div>
					</form>
				</div>
				<div id="optmain" name="optmain" style="display: none;">
					<div class="row m-2">
						<div class="col-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<button type="button" style="min-height:80px;" class="btn btn-primary font-weight-bold btn-lg  w-100" id="btn_update_folio">
									Actualizar hecho
								</button>

							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
								<button type="button" title="Pulsa este botón en caso de emergencia o folios de suma importancia." style="min-height:80px;" class="btn btn-primary font-weight-bold btn-lg  w-100" id="enviar_alertas_da">
									<i class="fas fa-exclamation-triangle"></i> ALERTA
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row card rounded shadow" id="personasInvolucradas" name="personasInvolucradas" style="display: none;">

					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">PERSONAS INVOLUCRADAS</h3>
					</div>
					<div class="row p-0 m-0">
						<div class="col-12 col-sm-6 mb-3">
							<div class="form-group">
								<label for="victima_conocido" class="form-label font-weight-bold">¿Se conoce a la victima?</label>
								<select class="form-control" id="victima_conocido" name="victima_conocido" required>
									<option selected disabled value=""></option>
									<option value="1">Si </option>
									<option value="2">No </option>
								</select>
							</div>
						</div>

						<div class="col-12 col-sm-6 mb-3">
							<div class="form-group">
								<label for="imputado_conocido" class="form-label font-weight-bold">¿Se conoce al imputado?</label>
								<select class="form-control" id="imputado_conocido" name="imputado_conocido" required disabled>
									<option selected disabled value=""></option>
									<option value="1">Si </option>
									<option value="2">No </option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-victima" name="habilitar-victima" disabled>Agregar personas</button>
						</div>
					</div>

					<div class="table-responsive">
						<table id="table-personas" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white" id="nombreP" name="nombreP">NOMBRE</th>
								<th class="text-center bg-primary text-white" id="calidadP" name="calidadP">CALIDAD JURÍDICA</th>
								<th class="text-center bg-primary text-white"></th>

							</tr>
						</table>
					</div>
				</div>
				<div class="row card rounded shadow" id="roboVehiculo" name="roboVehiculo" style="display: none;">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">VEHÍCULOS INVOLUCRADOS</h3>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-vehiculos" name="habilitar-vehiculos" disabled>Agregar vehículo</button>
						</div>
					</div>
					<div class="table-responsive">
						<table id="table-vehiculos" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white">PLACAS</th>
								<th class="text-center bg-primary text-white">SERIE</th>
								<th class="text-center bg-primary text-white"></th>

							</tr>
						</table>
					</div>
				</div>
				<div class="row card rounded shadow" id="objetosInvolucrados" name="objetosInvolucrados" style="display: none;">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">OBJETOS INVOLUCRADOS</h3>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-objetos-involucrados" name="habilitar-objetos-involucrados" disabled>Agregar objetos involucrados</button>
						</div>
					</div>
					<div class="table-responsive">
						<table id="table-objetos-involucrados" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white" id="objeto" name="objeto">CLASIFICACIÓN</th>
								<th class="text-center bg-primary text-white" id="clasificacion" name="clasificacion">SUBCLASIFICACIÓN</th>
								<th class="text-center bg-primary text-white"></th>
								<th class="text-center bg-primary text-white"></th>

							</tr>
						</table>
					</div>
				</div>
				<div class="row card rounded shadow" id="archivosExternos" name="archivosExternos" style="display: none;">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">ARCHIVOS EXTERNOS</h3>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div id="loading_archivos" name="loading_archivos" class="text-center d-none" style="min-height:50px;">
							<div class="justify-content-center">
								<div class="spinner-border text-primary" role="status">
								</div>
							</div>
						</div>
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-archivo" name="habilitar-archivo" disabled>Agregar archivo</button>

						</div>
					</div>
					<div class="table-responsive">
						<table id="table-archivo" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white">DESCRIPCIÓN</th>
								<th class="text-center bg-primary text-white">DOCUMENTO</th>
								<th class="text-center bg-primary text-white"></th>
							</tr>
						</table>
					</div>
				</div>

				<div class="row card rounded shadow" id="delitosInvolucrados" name="delitosInvolucrados" style="display: none;">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">DELITOS COMETIDOS</h3>
					</div>

					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-delito" name="habilitar-delito" disabled>Agregar arbol delictual</button>
						</div>
					</div>
					<div class="table-responsive">
						<table id="table-delito-cometidos" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white" id="nombreImputado" name="nombreImputado">IMPUTADO</th>
								<th class="text-center bg-primary text-white" id="delitoCometido" name="delitoCometido">DELITO COMETIDO</th>

							</tr>
						</table>
					</div>
				</div>

				<div class="row card rounded shadow" id="fisfis" name="fisfis" style="display: none;">
					<div class="col-12 pt-5">
						<h3 class="font-weight-bold text-center text-blue pb-3">ÁRBOL DELICTIVO</h3>
					</div>

					<div class="table-responsive">
						<table id="table-delitos-arbol" class="table table-bordered table-hover table-striped table-light">
							<tr>
								<th class="text-center bg-primary text-white" id="nombreImputado" name="nombreImputado">IMPUTADO</th>
								<th class="text-center bg-primary text-white" id="delitoCometido" name="delitoCometido">DELITO COMETIDO</th>
								<th class="text-center bg-primary text-white" id="nombreVictima" name="nombreVictima">VÍCTIMA / OFENDIDO</th>
								<th class="text-center bg-primary text-white"></th>
							</tr>
						</table>
					</div>
				</div>

				<div class="row" id="salida" name="salida" style="display: none;">
					<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
						<div class="form-group">
							<br>
							<button class="btn btn-primary font-weight-bold btn-lg" id="habilitar-salida" name="habilitar-salida" disabled>Dar salida</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	(function() {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function(form) {
				form.addEventListener('submit', function(event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	})()
</script>
<script>
	var inputsText = document.querySelectorAll('input[type="text"]');
	var inputsEmail = document.querySelectorAll('input[type="email"]');
	var btn_agregar_victima = document.getElementById('habilitar-victima');
	var btn_agregar_objetos = document.getElementById('habilitar-objetos-involucrados');
	var btn_salida = document.getElementById('habilitar-salida');
	var btn_update_folio = document.getElementById('btn_update_folio');
	var btn_enviar_alertas = document.querySelector('#enviar_alertas_da');
	var btnSubirArchivosA = document.querySelector('#btnSubirArchivosAnonima');


	var btn_vehiculo = document.getElementById('habilitar-vehiculos');
	var notas_caso_mp = document.getElementById('notas_denuncia');
	var btn_archivo = document.getElementById('habilitar-archivo');
	var btn_arbol = document.getElementById('habilitar-delito');
	var form_folio = document.getElementById('form_folio');
	var div_personasInvolucradas = document.getElementById('personasInvolucradas');
	var div_optmain = document.getElementById('optmain');
	var form_persona_fisica = document.getElementById('persona_fisica_form_insert_denunciaA');
	var form_objetosinvolucrados = document.querySelector('#form_objetos_involucrados');
	var form_fis_fis = document.querySelector('#form_fisfis_insert');
	var form_vehiculo = document.querySelector('#form_vehiculo_da_da');
	var form_update_vehiculo = document.querySelector('#form_vehiculo_da');
	var form_update_folio = document.querySelector('#update_denuncia_form_da');

	var inputFolio = document.querySelector('#folio');
	var year_select = document.querySelector('#year');

	var form_persona_fisica_update = document.querySelector('#persona_fisica_form_da');
	var form_objetosinvolucrados_update = document.querySelector('#form_objetos_involucrados_update');
	var form_persona_fisica_domicilio = document.querySelector('#persona_fisica_domicilio_form_da');
	var form_media_filiacion = document.querySelector('#form_media_filiacion_da');

	var select_victima = document.getElementById('victima_conocido');
	var select_imputado = document.getElementById('imputado_conocido');
	var charRemain;


	$('#delito_cometido').select2({
		theme: "bootstrap"
	});

	$('#lugar').select2({
		theme: "bootstrap"
	});
	$('#ocupacion_pf_da').select2({
		theme: "bootstrap"
	});
	$('#ocupacion_new_da').select2({
		theme: "bootstrap"
	});

	document.querySelector('#ocupacion_pf_da').addEventListener('change', (e) => {
		let select_ocupacion = document.querySelector('#ocupacion_pf_da');
		let input_ocupacion = document.querySelector('#ocupacion_pf_da_m');

		if (e.target.value === '999') {
			input_ocupacion.classList.remove('d-none');
			input_ocupacion.value = "";
			input_ocupacion.focus();
		} else {
			input_ocupacion.classList.add('d-none');
			input_ocupacion.value = '';
		}
	});
	document.querySelector('#fecha_nacimiento_pf_da').addEventListener('blur', (e) => {
		let fecha = e.target.value;
		let hoy = new Date();
		let cumpleanos = new Date(fecha);
		let edad = hoy.getFullYear() - cumpleanos.getFullYear();
		let m = hoy.getMonth() - cumpleanos.getMonth();

		if (m < 0 || (m === 0 && hoy.getDate() <= cumpleanos.getDate())) {
			edad--;
		}
		document.querySelector('#edad_pf_da').value = edad;

	});
	document.querySelector('#victima_conocido').addEventListener('change', (e) => {
		if (e.target.value == 1) {
			$('#insert_persona_victima_modal_denuncia').modal('show');
			document.querySelector('#calidad_juridica_new_da').value = 1;
			select_victima.disabled = true;
			btn_agregar_victima.disabled = false;
			btn_agregar_objetos.disabled = false;
			btn_salida.disabled = false;
			btn_arbol.disabled = false;
			btn_vehiculo.disabled = false;
			btn_archivo.disabled = false;
			select_imputado.disabled = false;

			$("#insert_persona_victima_modal_denuncia").one("hidden.bs.modal", function() {
				agregarPersonaFisica();
			});

		} else {
			// btn_agregar_victima.disabled = true;
			select_victima.disabled = true;
			btn_agregar_victima.disabled = false;
			btn_agregar_objetos.disabled = false;
			btn_salida.disabled = false;
			btn_arbol.disabled = false;
			btn_vehiculo.disabled = false;
			btn_archivo.disabled = false;

			select_imputado.disabled = false;

			document.querySelector('#calidad_juridica_new_da').value = 1;
			agregarPersonaFisica();


		}
	});
	form_persona_fisica_update.addEventListener('submit', (event) => {
		if (!form_persona_fisica_update.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
			form_persona_fisica_update.classList.add('was-validated')
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_persona_fisica_update.classList.remove('was-validated')
			actualizarPersona();
		}
	}, false);
	form_persona_fisica_domicilio.addEventListener('submit', (event) => {
		if (!form_persona_fisica_domicilio.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
			form_persona_fisica_domicilio.classList.add('was-validated')
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_persona_fisica_domicilio.classList.remove('was-validated')
			actualizarDomicilio();
		}
	}, false);
	form_media_filiacion.addEventListener('submit', (event) => {
		if (!form_media_filiacion.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
			form_media_filiacion.classList.add('was-validated')
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_media_filiacion.classList.remove('was-validated')
			let id_personafisica = document.querySelector('#pf_id_da').value;
			actualizarPersonaMediaAfiliacion(id_personafisica);
		}
	}, false);
	form_objetosinvolucrados_update.addEventListener('submit', (event) => {
		if (!form_objetosinvolucrados_update.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
			form_objetosinvolucrados_update.classList.add('was-validated')
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_objetosinvolucrados_update.classList.remove('was-validated')
			let objeto_id = document.querySelector('#objeto_id').value;

			actualizarObjetosInvolucrados(objeto_id);
		}
	}, false);

	document.querySelector('#imputado_conocido').addEventListener('change', (e) => {
		if (e.target.value == 1) {
			$('#insert_persona_victima_modal_denuncia').modal('show');
			document.querySelector('#calidad_juridica_new_da').value = 2;
			select_imputado.disabled = true;
			btn_agregar_victima.disabled = false;
			btn_agregar_objetos.disabled = false;
			btn_salida.disabled = false;
			btn_arbol.disabled = false;
			$("#insert_persona_victima_modal_denuncia").one("hidden.bs.modal", function() {
				agregarPersonaFisica();
			});

		} else {
			select_imputado.disabled = true;
			btn_agregar_victima.disabled = false;
			btn_agregar_objetos.disabled = false;
			btn_salida.disabled = false;
			btn_arbol.disabled = false;

			document.querySelector('#calidad_juridica_new_da').value = 2;
			agregarPersonaFisica();
		}
	});
	//desactivar selectores que estan vacios hasta el momento
	document.querySelector('#marca_ad').disabled = true;
	document.querySelector('#linea_vehiculo_ad').disabled = true;
	document.querySelector('#version_vehiculo_ad').disabled = true;

	document.querySelector('#distribuidor_vehiculo_ad').addEventListener('change', (e) => {

		let select_marca = document.querySelector('#marca_ad');
		let select_linea = document.querySelector('#linea_vehiculo_ad');
		let select_version = document.querySelector('#version_vehiculo_ad');

		clearSelect(select_marca);
		clearSelect(select_linea);
		clearSelect(select_version);

		select_marca.disabled = true;
		select_linea.disabled = true;
		select_version.disabled = true;

		let data = {
			'distribuidor_vehiculo': e.target.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-marca-by-dist') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let marcaVehiculo = response.data;
				marcaVehiculo.forEach(marca_vehiculo => {
					let option = document.createElement("option");
					option.text = marca_vehiculo.VEHICULOMARCADESCR;
					option.value = marca_vehiculo.VEHICULOMARCAID;
					select_marca.add(option);
				});
				select_marca.value = '1';
				var option_otro = document.createElement("option");
				option_otro.text = 'OTRO';
				option_otro.value = '00';
				select_marca.add(option_otro);
				select_marca.disabled = false;

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});


	document.querySelector('#marca_ad').addEventListener('change', (e) => {
		let select_linea = document.querySelector('#linea_vehiculo_ad');
		let select_version = document.querySelector('#version_vehiculo_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_ad');

		clearSelect(select_linea);
		clearSelect(select_version);

		// select_linea.value = '';
		// select_version.value = '';

		// select_version.classList.remove('d-none');

		select_linea.disabled = true;
		select_version.disabled = true;

		let data = {
			'marca': e.target.value,
			'dist': select_distribuidor.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-modelo-by-marca') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let lineaVehiculo = response.data;

				lineaVehiculo.forEach(linea_vehiculo => {
					var option = document.createElement("option");
					option.text = linea_vehiculo.VEHICULOMODELODESCR;
					option.value = linea_vehiculo.VEHICULOMODELOID;
					select_linea.add(option);
				});
				select_linea.disabled = false;

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});

	document.querySelector('#linea_vehiculo_ad').addEventListener('change', (e) => {
		let select_version = document.querySelector('#version_vehiculo_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_ad');
		let select_marca = document.querySelector('#marca_ad');

		clearSelect(select_version);

		select_version.disabled = true;

		let data = {
			'linea_vehiculo': e.target.value,
			'dist': select_distribuidor.value,
			'marca': select_marca.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-version-by-modelo') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let versionVehiculo = response.data;

				versionVehiculo.forEach(version_vehiculo => {
					var option = document.createElement("option");
					option.text = version_vehiculo.VEHICULOVERSIONDESCR;
					option.value = version_vehiculo.VEHICULOVERSIONID;
					select_version.add(option);
				});
				select_version.disabled = false;

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});


	document.querySelector('#distribuidor_vehiculo_da_ad').addEventListener('change', (e) => {

		let select_marca = document.querySelector('#marca_ad_da');
		let select_linea = document.querySelector('#linea_vehiculo_da_ad');
		let select_version = document.querySelector('#version_vehiculo_da_ad');

		clearSelect(select_marca);
		clearSelect(select_linea);
		clearSelect(select_version);

		select_marca.disabled = false;
		select_linea.disabled = false;
		select_version.disabled = false;

		let data = {
			'distribuidor_vehiculo': e.target.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-marca-by-dist') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let marcaVehiculo = response.data;
				marcaVehiculo.forEach(marca_vehiculo => {
					let option = document.createElement("option");
					option.text = marca_vehiculo.VEHICULOMARCADESCR;
					option.value = marca_vehiculo.VEHICULOMARCAID;
					select_marca.add(option);
				});
				select_marca.value = '1';
				var option_otro = document.createElement("option");
				option_otro.text = 'OTRO';
				option_otro.value = '00';
				select_marca.add(option_otro);
				select_marca.disabled = false;

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});


	document.querySelector('#marca_ad_da').addEventListener('change', (e) => {
		let select_linea = document.querySelector('#linea_vehiculo_ad');
		let select_version = document.querySelector('#version_vehiculo_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_da_ad');
		clearSelect(select_linea);
		clearSelect(select_version);

		// select_linea.value = '';
		// select_version.value = '';

		// select_version.classList.remove('d-none');

		let data = {
			'marca': e.target.value,
			'dist': select_distribuidor.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-modelo-by-marca') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let lineaVehiculo = response.data;

				lineaVehiculo.forEach(linea_vehiculo => {
					var option = document.createElement("option");
					option.text = linea_vehiculo.VEHICULOMODELODESCR;
					option.value = linea_vehiculo.VEHICULOMODELOID;
					select_linea.add(option);
				});
				select_linea.disabled = false;
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});

	document.querySelector('#linea_vehiculo_da_ad').addEventListener('change', (e) => {
		let select_version = document.querySelector('#version_vehiculo_da_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_da_ad');
		let select_marca = document.querySelector('#marca_ad_da');

		clearSelect(select_version);

		let data = {
			'linea_vehiculo': e.target.value,
			'dist': select_distribuidor.value,
			'marca': select_marca.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-version-by-modelo') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let versionVehiculo = response.data;

				versionVehiculo.forEach(version_vehiculo => {
					var option = document.createElement("option");
					option.text = version_vehiculo.VEHICULOVERSIONDESCR;
					option.value = version_vehiculo.VEHICULOVERSIONID;
					select_version.add(option);
				});
				select_version.disabled = false;
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});
	btn_enviar_alertas.addEventListener('click', (event) => {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/email-alerts') ?>",
			method: "POST",
			dataType: "json",
			beforeSend: function() {
				document.querySelector('#enviar_alertas_da').disabled = true;;

			},
			success: function(response) {
				document.querySelector('#enviar_alertas_da').disabled = false;;

				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Se ha enviado la alerta correctamente',
						timer: 3000,
					});
				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se enviaron las alertas',
						timer: 3000,
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				document.querySelector('#enviar_alertas_da').disabled = false;;
				console.log(textStatus);
			}
		});
	}, false);
	btn_agregar_victima.addEventListener('click', (event) => {
		$('#insert_persona_victima_modal_denuncia').modal('show');
	}, false);
	btn_salida.addEventListener('click', (event) => {
		$('#salida_modal_denuncia_anonima').modal('show');
	}, false);
	btn_update_folio.addEventListener('click', (event) => {
		$.ajax({
			data: {
				'folio': document.querySelector('#folio').value,
				'year': document.querySelector('#year').value,
			},
			url: "<?= base_url('/data/get-folio-information-denuncia') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				//DENUNCIA
				const folio = response.folio;
				document.querySelector('#municipio_delito_da').value = folio.HECHOMUNICIPIOID;
				if (folio.HECHOLOCALIDADID) {
					let data = {
						'estado_id': 2,
						'municipio_id': folio.HECHOMUNICIPIOID
					};

					$.ajax({
						data: data,
						url: "<?= base_url('/data/get-localidades-by-municipio') ?>",
						method: "POST",
						dataType: "json",
						success: function(response) {
							let localidades = response.data;
							let select_localidad = document.querySelector('#localidad_delito_da');

							localidades.forEach(localidad => {
								var option = document.createElement("option");
								option.text = localidad.LOCALIDADDESCR;
								option.value = localidad.LOCALIDADID;
								select_localidad.add(option);
							});

							select_localidad.value = folio.HECHOLOCALIDADID;
						},
						error: function(jqXHR, textStatus, errorThrown) {}
					});
				} else {
					document.querySelector('#localidad_delito_da').value = '';
				}

				if (folio.HECHOCOLONIAID) {
					document.querySelector('#colonia_delito_da').classList.add('d-none');
					document.querySelector('#colonia_delito_select_da').classList.remove('d-none');
					let data = {
						'estado_id': 2,
						'municipio_id': folio.HECHOMUNICIPIOID,
						'localidad_id': folio.HECHOLOCALIDADID
					};
					$.ajax({
						data: data,
						url: "<?= base_url('/data/get-colonias-by-estado-municipio-localidad') ?>",
						method: "POST",
						dataType: "json",
						success: function(response) {
							let select_colonia = document.querySelector('#colonia_delito_select_da');
							let input_colonia = document.querySelector('#colonia_delito_da');
							let colonias = response.data;

							colonias.forEach(colonia => {
								var option = document.createElement("option");
								option.text = colonia.COLONIADESCR;
								option.value = colonia.COLONIAID;
								select_colonia.add(option);
							});

							var option = document.createElement("option");
							option.text = 'OTRO';
							option.value = '0';
							select_colonia.add(option);

							select_colonia.value = folio.HECHOCOLONIAID;
							input_colonia.value = '-';
						},
						error: function(jqXHR, textStatus, errorThrown) {

						}
					});
				} else {
					document.querySelector('#colonia_delito_da').classList.remove('d-none');
					document.querySelector('#colonia_delito_select_da').classList.add('d-none');
					var option = document.createElement("option");
					option.text = 'OTRO';
					option.value = '0';
					document.querySelector('#colonia_delito_select_da').add(option);
					document.querySelector('#colonia_delito_select_da').value = '0';
					document.querySelector('#colonia_delito_da').value = folio.HECHOCOLONIADESCR;
				}
				document.querySelector('#calle_delito_da').value = folio.HECHOCALLE;
				document.querySelector('#exterior_delito_da').value = folio.HECHONUMEROCASA;
				document.querySelector('#interior_delito_da').value = folio.HECHONUMEROCASAINT;
				document.querySelector('#lugar_delito_da').value = folio.HECHOLUGARID;
				document.querySelector('#hora_delito_da').value = folio.HECHOHORA;
				document.querySelector('#fecha_delito_da').value = folio.HECHOFECHA;
				document.querySelector('#notas_da').value = folio.NOTASAGENTE;

			}
		});
		$('#update_denuncia').modal('show');
	}, false);
	btn_agregar_objetos.addEventListener('click', (event) => {
		$('#insert_objetos_modal_denuncia').modal('show');
	}, false);

	btn_vehiculo.addEventListener('click', (event) => {
		$('#insert_vehiculo_modal_denuncia').modal('show');
	}, false);
	btn_archivo.addEventListener('click', (event) => {
		$('#agregar_archivos_modal_anonima').modal('show');
	}, false);
	btn_arbol.addEventListener('click', (event) => {
		$('#insert_fisfis_modal_denuncia').modal('show');
	}, false);

	btnSubirArchivosA.addEventListener('click', (e) => {
		e.preventDefault();
		crearArchivos();

	});
	form_folio.addEventListener('submit', (event) => {
		if (!form_folio.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_folio.classList.remove('was-validated')
			agregarFolio();
		}
	}, false);
	form_persona_fisica.addEventListener('submit', (event) => {
		if (!form_persona_fisica.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_persona_fisica.classList.remove('was-validated')
			agregarPersonaFisica();
		}
	}, false);

	form_update_folio.addEventListener('submit', (event) => {
		if (!form_update_folio.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_update_folio.classList.remove('was-validated')
			updateFolio();
		}
	}, false);
	form_fis_fis.addEventListener('submit', (event) => {
		if (!form_fis_fis.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_fis_fis.classList.remove('was-validated')
			insertarRelacionIDO();
			insertar_impdelito();
		}
	}, false);
	form_objetosinvolucrados.addEventListener('submit', (event) => {
		if (!form_objetosinvolucrados.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_objetosinvolucrados.classList.remove('was-validated')
			agregarObjetosInvolucrados();
		}
	}, false);
	form_vehiculo.addEventListener('submit', (event) => {
		if (!form_vehiculo.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_vehiculo.classList.remove('was-validated')
			agregarVehiculosInvolucrados();
		}
	}, false);

	form_update_vehiculo.addEventListener('submit', (event) => {
		if (!form_update_vehiculo.checkValidity()) {
			event.preventDefault();
			event.stopPropagation();
		} else {
			event.preventDefault();
			event.stopPropagation();
			form_update_vehiculo.classList.remove('was-validated')
			actualizarVehiculo();
		}
	}, false);
	inputsText.forEach((input) => {
		input.addEventListener('input', (event) => {
			event.target.value = clearText(event.target.value).toUpperCase();
		}, false)
	});

	inputsEmail.forEach((input) => {
		input.addEventListener('input', (event) => {
			event.target.value = clearText(event.target.value).toLowerCase();
		}, false)
	});


	function mayuscTextarea(e) {
		e.value = e.value.toUpperCase();
	}

	function clearSelect(select_element) {
		for (let i = select_element.options.length; i >= 1; i--) {
			select_element.remove(i);
		}
	}

	function pulsar(e) {
		if (e.which === 13 && !e.shiftKey) {
			e.preventDefault();
			return false;
		}
	}

	function clearGuion(e) {
		e.target.value = e.target.value.replace(/-/g, "");
	}

	function clearText(text) {
		return text
			.normalize('NFD')
			.replaceAll(/([^n\u0300-\u036f]|n(?!\u0303(?![\u0300-\u036f])))[\u0300-\u036f]+/gi, "$1")
			.normalize()
			.replaceAll('´', '');
	}

	document.querySelector('#localidad').disabled = true;
	document.querySelector('#colonia_select').disabled = true;

	document.querySelector('#municipio').addEventListener('change', (e) => {
		let select_localidad = document.querySelector('#localidad');
		let select_colonia = document.querySelector('#colonia_select');

		let estado = 2;
		let municipio = e.target.value;

		clearSelect(select_localidad);
		clearSelect(select_colonia);

		select_colonia.value = '';
		select_localidad.value = '';

		select_localidad.disabled = true;
		select_colonia.disabled = true;

		let data = {
			'estado_id': estado,
			'municipio_id': municipio
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-localidades-by-municipio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let localidades = response.data;
				clearSelect(select_localidad);
				localidades.forEach(localidad => {
					var option = document.createElement("option");
					option.text = localidad.LOCALIDADDESCR;
					option.value = localidad.LOCALIDADID;
					select_localidad.add(option);
				});
				select_localidad.disabled = false;
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});

	});
	document.querySelector('#localidad').addEventListener('change', (e) => {
		let select_colonia = document.querySelector('#colonia_select');
		let input_colonia = document.querySelector('#colonia');

		let estado = 2;
		let municipio = document.querySelector('#municipio').value;
		let localidad = e.target.value;
		clearSelect(select_colonia);
		select_colonia.value = '';
		input_colonia.value = '';
		select_colonia.disabled = true;
		input_colonia.disabled = true;
		let data = {
			'estado_id': estado,
			'municipio_id': municipio,
			'localidad_id': localidad
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-colonias-by-estado-municipio-localidad') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				clearSelect(select_colonia);
				let colonias = response.data;
				colonias.forEach(colonia => {
					var option = document.createElement("option");
					option.text = colonia.COLONIADESCR;
					option.value = colonia.COLONIAID;
					select_colonia.add(option);
				});

				var option = document.createElement("option");
				option.text = 'OTRO';
				option.value = '0';
				select_colonia.add(option);
				select_colonia.disabled = false;
				input_colonia.disabled = false;
				input_colonia.classList.add('d-none');
				select_colonia.classList.remove('d-none');

			},
			error: function(jqXHR, textStatus, errorThrown) {

			}
		});

	});
	document.querySelector('#colonia_select').addEventListener('change', (e) => {
		let select_colonia = document.querySelector('#colonia_select');
		let input_colonia = document.querySelector('#colonia');

		if (e.target.value === '0') {
			select_colonia.classList.add('d-none');
			input_colonia.classList.remove('d-none');
			input_colonia.focus();
		} else {
			input_colonia.classList.add('d-none');
			select_colonia.classList.remove('d-none');
			input_colonia.value = e.target.value;
		}
	});
	document.querySelector('#municipio_delito_da').addEventListener('change', (e) => {
		let select_localidad = document.querySelector('#localidad_delito_da');
		let select_colonia = document.querySelector('#colonia_delito_select_da');

		let estado = 2;
		let municipio = e.target.value;

		clearSelect(select_localidad);

		let data = {
			'estado_id': estado,
			'municipio_id': municipio
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-localidades-by-municipio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let localidades = response.data;
				clearSelect(select_localidad);
				clearSelect(select_colonia);

				localidades.forEach(localidad => {
					var option = document.createElement("option");
					option.text = localidad.LOCALIDADDESCR;
					option.value = localidad.LOCALIDADID;
					select_localidad.add(option);
				});
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});

	});
	document.querySelector('#localidad_delito_da').addEventListener('change', (e) => {
		document.querySelector('#colonia_delito_da').classList.add('d-none');
		document.querySelector('#colonia_delito_select_da').classList.remove('d-none');
		let select_colonia = document.querySelector('#colonia_delito_select_da');
		let input_colonia = document.querySelector('#colonia_delito_da');

		let estado = 2;
		let municipio = document.querySelector('#municipio_delito_da').value;
		let localidad = e.target.value;
		clearSelect(select_colonia);
		select_colonia.value = '';
		input_colonia.value = '';
		let data = {
			'estado_id': estado,
			'municipio_id': municipio,
			'localidad_id': localidad
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-colonias-by-estado-municipio-localidad') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				clearSelect(select_colonia);
				let colonias = response.data;
				colonias.forEach(colonia => {
					var option = document.createElement("option");
					option.text = colonia.COLONIADESCR;
					option.value = colonia.COLONIAID;
					select_colonia.add(option);
				});

				var option = document.createElement("option");
				option.text = 'OTRO';
				option.value = '0';
				select_colonia.add(option);
			},
			error: function(jqXHR, textStatus, errorThrown) {

			}
		});

	});
	document.querySelector('#colonia_delito_select_da').addEventListener('change', (e) => {
		let select_colonia = document.querySelector('#colonia_delito_select_da');
		let input_colonia = document.querySelector('#colonia_delito_da');

		if (e.target.value === '0') {
			select_colonia.classList.add('d-none');
			input_colonia.classList.remove('d-none');
			input_colonia.focus();
		} else {
			input_colonia.value = e.target.value;
		}
	});
	document.querySelector('#distribuidor_vehiculo_da_ad').addEventListener('change', (e) => {

		let select_marca = document.querySelector('#marca_ad_da');
		let select_linea = document.querySelector('#linea_vehiculo_da_ad');
		let select_version = document.querySelector('#version_vehiculo_da_ad');

		clearSelect(select_marca);
		clearSelect(select_linea);
		clearSelect(select_version);


		let data = {
			'distribuidor_vehiculo': e.target.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-marca-by-dist') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let marcaVehiculo = response.data;
				marcaVehiculo.forEach(marca_vehiculo => {
					let option = document.createElement("option");
					option.text = marca_vehiculo.VEHICULOMARCADESCR;
					option.value = marca_vehiculo.VEHICULOMARCAID;
					select_marca.add(option);
				});
				select_marca.value = '1';

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});

	});
	document.querySelector('#estado_pfd_da').addEventListener('change', (e) => {
		let select_municipio = document.querySelector('#municipio_pfd_da');
		select_municipio.disabled = true;
		clearSelect(select_municipio);
		select_municipio.value = '';
		let data = {
			'estado_id': e.target.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-municipios-by-estado') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let municipios = response.data;

				municipios.forEach(municipio => {
					var option = document.createElement("option");
					option.text = municipio.MUNICIPIODESCR;
					option.value = municipio.MUNICIPIOID;
					select_municipio.add(option);
				});
				select_municipio.disabled = false;
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});
	document.querySelector('#municipio_pfd_da').addEventListener('change', (e) => {
		let select_localidad = document.querySelector('#localidad_pfd_da');
		let select_colonia = document.querySelector('#colonia_pfd_da_select');
		let input_colonia = document.querySelector('#colonia_pfd_da');

		let estado = document.querySelector('#estado_pfd_da').value;
		let municipio = e.target.value;

		clearSelect(select_localidad);
		clearSelect(select_colonia);

		select_localidad.value = '';

		let data = {
			'estado_id': estado,
			'municipio_id': municipio
		};

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-localidades-by-municipio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let localidades = response.data;

				localidades.forEach(localidad => {
					var option = document.createElement("option");
					option.text = localidad.LOCALIDADDESCR;
					option.value = localidad.LOCALIDADID;
					select_localidad.add(option);
				});
				select_localidad.disabled = false;
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});

	document.querySelector('#localidad_pfd_da').addEventListener('change', (e) => {
		let select_colonia = document.querySelector('#colonia_pfd_da_select');
		let input_colonia = document.querySelector('#colonia_pfd_da');

		let estado = document.querySelector('#estado_pfd_da').value;
		let municipio = document.querySelector('#municipio_pfd_da').value;
		let localidad = e.target.value;

		clearSelect(select_colonia);
		select_colonia.value = '';

		let data = {
			'estado_id': estado,
			'municipio_id': municipio,
			'localidad_id': localidad
		};


		if (estado == 2) {
			select_colonia.classList.remove('d-none');
			input_colonia.classList.add('d-none');
			input_colonia.value = '';
			$.ajax({
				data: data,
				url: "<?= base_url('/data/get-colonias-by-estado-municipio-localidad') ?>",
				method: "POST",
				dataType: "json",
				success: function(response) {
					let colonias = response.data;

					colonias.forEach(colonia => {
						var option = document.createElement("option");
						option.text = colonia.COLONIADESCR;
						option.value = colonia.COLONIAID;
						select_colonia.add(option);
					});
					select_colonia.disabled = false;

					var option = document.createElement("option");
					option.text = 'OTRO';
					option.value = '0';
					select_colonia.add(option);
				},
				error: function(jqXHR, textStatus, errorThrown) {

				}
			});

		} else {
			var option = document.createElement("option");
			option.text = 'OTRO';
			option.value = '0';
			select_colonia.add(option);
			select_colonia.value = '0';
			input_colonia.value = '';
			select_colonia.classList.add('d-none');
			input_colonia.classList.remove('d-none');
		}
	});
	document.querySelector('#colonia_pfd_da_select').addEventListener('change', (e) => {
		let select_colonia = document.querySelector('#colonia_pfd_da_select');
		let input_colonia = document.querySelector('#colonia_pfd_da');

		if (e.target.value === '0') {
			select_colonia.classList.add('d-none');
			input_colonia.classList.remove('d-none');
			input_colonia.value = '';
			input_colonia.focus();
		} else {
			input_colonia.value = '-';
		}
	});
	document.querySelector('#marca_ad_da').addEventListener('change', (e) => {
		let select_linea = document.querySelector('#linea_vehiculo_da_ad');
		let select_version = document.querySelector('#version_vehiculo_da_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_da_ad');

		clearSelect(select_linea);
		clearSelect(select_version);

		// select_linea.value = '';
		// select_version.value = '';

		// select_version.classList.remove('d-none');

		let data = {
			'marca': e.target.value,
			'dist': select_distribuidor.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-modelo-by-marca') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let lineaVehiculo = response.data;

				lineaVehiculo.forEach(linea_vehiculo => {
					var option = document.createElement("option");
					option.text = linea_vehiculo.VEHICULOMODELODESCR;
					option.value = linea_vehiculo.VEHICULOMODELOID;
					select_linea.add(option);
				});

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});

	document.querySelector('#linea_vehiculo_da_ad').addEventListener('change', (e) => {
		let select_version = document.querySelector('#version_vehiculo_da_ad');
		let select_distribuidor = document.querySelector('#distribuidor_vehiculo_da_ad');
		let select_marca = document.querySelector('#marca_ad_da');

		clearSelect(select_version);

		let data = {
			'linea_vehiculo': e.target.value,
			'dist': select_distribuidor.value,
			'marca': select_marca.value,
		}

		$.ajax({
			data: data,
			url: "<?= base_url('/data/get-version-by-modelo') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let versionVehiculo = response.data;

				versionVehiculo.forEach(version_vehiculo => {
					var option = document.createElement("option");
					option.text = version_vehiculo.VEHICULOVERSIONDESCR;
					option.value = version_vehiculo.VEHICULOVERSIONID;
					select_version.add(option);
				});

			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});
	});

	function agregarFolio() {
		const data = {
			// 'delito_cometido': document.querySelector('#delito_cometido_folio').value,
			'municipio_delito': document.querySelector('#municipio').value,
			'localidad_delito': document.querySelector('#localidad').value,
			'colonia_delito': document.querySelector('#colonia').value,
			'colonia_delito_select': document.querySelector('#colonia_select').value,
			'calle_delito': document.querySelector('#calle').value,
			'exterior_delito': document.querySelector('#exterior').value,
			'interior_delito': document.querySelector('#interior').value,
			'lugar_delito': document.querySelector('#lugar').value,
			'fecha_delito': document.querySelector('#fecha').value,
			'hora_delito': document.querySelector('#hora').value,
			'referencia_delito': document.querySelector('#referencias').value,
			'notas': document.querySelector('#notas_denuncia').value,
		};

		$.ajax({
			data: data,
			url: "<?= base_url('/data/create-folio-denuncia-anonima') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					// if (document.querySelector('#delito_cometido_folio').value == "ROBO DE VEHÍCULO") {
					document.getElementById("roboVehiculo").style.display = "block";
					// }
					document.getElementById("personasInvolucradas").style.display = "block";
					document.getElementById("personasInvolucradas").style.backgroundColor = "#E7E7E7";

					document.getElementById("optmain").style.display = "block";

					document.getElementById("foliodiv").style.display = "none";
					document.getElementById('folio').value = response.folio;
					document.getElementById('folio').disabled = true;

					document.getElementById('year').value = response.year;
					document.getElementById('year').disabled = true;
					document.getElementById("objetosInvolucrados").style.display = "block";
					document.getElementById("objetosInvolucrados").style.backgroundColor = "#E7E7E7";

					document.getElementById("archivosExternos").style.display = "block";

					document.getElementById("delitosInvolucrados").style.display = "block";
					document.getElementById("delitosInvolucrados").style.backgroundColor = "#E7E7E7";

					document.getElementById("roboVehiculo").style.display = "block";

					document.getElementById("fisfis").style.display = "block";

					document.getElementById("salida").style.display = "block";
					Swal.fire({
						icon: 'success',
						text: 'Denuncia agregada correctamente',
						confirmButtonColor: '#bf9b55',
					});

				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó la denuncia',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				Swal.fire({
					icon: 'error',
					text: 'No se agregó la denuncia',
					confirmButtonColor: '#bf9b55',
				});
			}
		});
	}

	function agregarPersonaFisica() {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'nombre': document.querySelector('#nombre_new_da').value,
			'primer_apellido': document.querySelector('#apellido_paterno_new_da').value,
			'segundo_apellido': document.querySelector('#apellido_materno_new_da').value,
			'fecha_nacimiento': document.querySelector('#fecha_nacimiento_new_da').value,
			'edad': document.querySelector('#edad_new_da').value,
			'sexo': document.querySelector('#sexo_new_da').checked ? document.querySelector('#sexo_new_da').value : null,
			'codigo_pais_pfc': document.querySelector('#codigo_pais_new_da').value,
			'codigo_pais_pfc_2': document.querySelector('#codigo_pais_2_new_da').value,
			'calidad_juridica': document.querySelector('#calidad_juridica_new_da').value,
			'municipio_origen': document.querySelector('#municipio_select_origen_new_da').value,
			'telefono': document.querySelector('#telefono_new_da').value,
			'nacionalidad_origen': document.querySelector('#nacionalidad_new_da').value,
			'estado_origen': document.querySelector('#estado_select_origen_new_da').value,
			'idioma': document.querySelector('#idioma_new_da').value,
			'pais_actual': document.querySelector('#pais_select_new_da').value,
			'estado_actual': document.querySelector('#estado_select_new_da').value,
			'municipio_actual': document.querySelector('#municipio_select_new_da').value,
			'localidad_actual': document.querySelector('#localidad_select_new_da').value,
			'colonia_actual': document.querySelector('#colonia_select_new_da').value,
			'colonia_actual_descr': document.querySelector('#colonia_new_da').value,
			'codigo_postal': document.querySelector('#cp_new_da').value,
			'calle': document.querySelector('#calle_new_da').value,
			'num_exterior': document.querySelector('#exterior_new_da').value,
			'num_interior': document.querySelector('#interior_new_da').value,
			'identificacion': document.querySelector('#identificacion_new_da').value,
			'numero_identificacion': document.querySelector('#numero_ide_new_da').value,
			'estado_civil': document.querySelector('#e_civil_new_da').value,
			'escolaridad': document.querySelector('#escolaridad_new_da').value,
			'ocupacion': document.querySelector('#ocupacion_new_da').value,
			'ocupacion_descr': document.querySelector('#ocupacion_descr_new_da').value,

			'discapacidad': document.querySelector('#discapacidad_new_da').value,
			'leer': document.querySelector('#leer_new_da').value,
			'escribir': document.querySelector('#escribir_new_da').value,
			'facebook': document.querySelector('#facebook_new_da').value,
			'twitter': document.querySelector('#twitter_new_da').value,
			'instagram': document.querySelector('#instagram_new_da').value,
			'correo': document.querySelector('#correo_new_da').value,
			'desaparecida': document.querySelector('#desaparecida_new_da').value,
			'victima_conocido': document.querySelector('#victima_conocido').value,
			'imputado_conocido': document.querySelector('#imputado_conocido').value,

			'ocupacion_mf': document.querySelector('#ocupacion_mf1_da').value,
			'estatura_mf': document.querySelector('#estatura_mf1_da').value,
			'peso_mf': document.querySelector('#peso_mf1_da').value,
			'senas_mf': document.querySelector('#senas_mf1_da').value,
			'colortez_mf': document.querySelector('#colortez_mf1_da').value,
			'complexion_mf': document.querySelector('#complexion_mf1_da').value,
			'contextura_ceja_mf': document.querySelector('#contextura_ceja_mf1_da').value,
			'cara_forma_mf': document.querySelector('#cara_forma_mf1_da').value,
			'cara_tamano_mf': document.querySelector('#cara_tamano_mf1_da').value,
			'caratez_mf': document.querySelector('#caratez_mf1_da').value,
			'lobulo_mf': document.querySelector('#lobulo_mf1_da').value,
			'forma_oreja_mf': document.querySelector('#forma_oreja_mf1_da').value,
			'tamano_oreja_mf': document.querySelector('#tamano_oreja_mf1_da').value,
			'colorC_mf': document.querySelector('#colorC_mf1_da').value,
			'formaC_mf': document.querySelector('#formaC_mf1_da').value,
			'tamanoC_mf': document.querySelector('#tamanoC_mf1_da').value,
			'peculiarC_mf': document.querySelector('#peculiarC_mf1_da').value,
			'cabello_descr_mf': document.querySelector('#cabello_descr_mf1_da').value,
			'frente_altura_mf': document.querySelector('#frente_altura_mf1_da').value,
			'frente_anchura_ms': document.querySelector('#frente_anchura_mf1_da').value,
			'tipoF_mf': document.querySelector('#tipoF_mf1_da').value,
			'frente_peculiar_mf': document.querySelector('#frente_peculiar_mf1_da').value,
			'colocacion_ceja_mf': document.querySelector('#colocacion_ceja_mf1_da').value,
			'ceja_mf': document.querySelector('#ceja_mf1_da').value,
			'tamano_ceja_mf': document.querySelector('#tamano_ceja_mf1_da').value,
			'grosor_ceja_mf': document.querySelector('#grosor_ceja_mf1_da').value,
			'colocacion_ojos_mf': document.querySelector('#colocacion_ojos_mf1_da').value,
			'forma_ojos_mf': document.querySelector('#forma_ojos_mf1_da').value,
			'tamano_ojos_mf': document.querySelector('#tamano_ojos_mf1_da').value,
			'colorO_mf': document.querySelector('#colorO_mf1_da').value,
			'peculiaridad_ojos_mf': document.querySelector('#peculiaridad_ojos_mf1_da').value,
			'nariz_tipo_mf': document.querySelector('#nariz_tipo_mf1_da').value,
			'nariz_tamano_mf': document.querySelector('#nariz_tamano_mf1_da').value,
			'nariz_base_mf': document.querySelector('#nariz_base_mf1_da').value,
			'nariz_peculiar_mf': document.querySelector('#nariz_peculiar_mf1_da').value,
			'nariz_descr_mf': document.querySelector('#nariz_descr_mf1_da').value,
			'bigote_forma_mf': document.querySelector('#bigote_forma_mf1_da').value,
			'bigote_tamaño_mf': document.querySelector('#bigote_tamaño_mf1_da').value,
			'bigote_grosor_mf': document.querySelector('#bigote_grosor_mf1_da').value,
			'bigote_peculiar_mf': document.querySelector('#bigote_peculiar_mf1_da').value,
			'bigote_descr_mf': document.querySelector('#bigote_descr_mf1_da').value,
			'boca_tamano_mf': document.querySelector('#boca_tamano_mf1_da').value,
			'boca_peculiar_mf': document.querySelector('#boca_peculiar_mf1_da').value,
			'labio_longitud_mf': document.querySelector('#labio_longitud_mf1_da').value,
			'labio_posicion_mf': document.querySelector('#labio_posicion_mf1_da').value,
			'labio_peculiar_mf': document.querySelector('#labio_peculiar_mf1_da').value,
			'labio_grosor_mf': document.querySelector('#labio_grosor_mf1_da').value,
			'dientes_tamano_mf': document.querySelector('#dientes_tamano_mf1_da').value,
			'dientes_tipo_mf': document.querySelector('#dientes_tipo_mf1_da').value,
			'dientes_peculiar_mf': document.querySelector('#dientes_peculiar_mf1_da').value,
			'dientes_descr_mf': document.querySelector('#dientes_descr_mf1_da').value,
			'barbilla_forma_mf': document.querySelector('#barbilla_forma_mf1_da').value,
			'barbilla_tamano_mf': document.querySelector('#barbilla_tamano_mf1_da').value,
			'barbilla_inclinacion_mf': document.querySelector('#barbilla_inclinacion_mf1_da').value,
			'barbilla_peculiar_mf': document.querySelector('#barbilla_peculiar_mf1_da').value,
			'barbilla_descr_mf': document.querySelector('#barbilla_descr_mf1_da').value,
			'barba_tamano_mf': document.querySelector('#barba_tamano_mf1_da').value,
			'barba_peculiar_mf': document.querySelector('#barba_peculiar_mf1_da').value,
			'barba_descr_mf': document.querySelector('#barba_descr_mf1_da').value,
			'cuello_tamano_mf': document.querySelector('#cuello_tamano_mf1_da').value,
			'cuello_grosor_mf': document.querySelector('#cuello_grosor_mf1_da').value,
			'cuello_peculiar_mf': document.querySelector('#cuello_peculiar_mf1_da').value,
			'cuello_descr_mf': document.querySelector('#cuello_descr_mf1_da').value,
			'hombro_posicion_mf': document.querySelector('#hombro_posicion_mf1_da').value,
			'hombro_tamano_mf': document.querySelector('#hombro_tamano_mf1_da').value,
			'hombro_grosor_mf': document.querySelector('#hombro_grosor_mf1_da').value,
			'estomago_mf': document.querySelector('#estomago_mf1_da').value,
			'escolaridad_mf': document.querySelector('#escolaridad_mf1_da').value,
			'etnia_mf': document.querySelector('#etnia_mf1_da').value,
			'estomago_descr_mf': document.querySelector('#estomago_descr_mf1_da').value,
			'discapacidad_mf': document.querySelector('#discapacidad_mf1_da').value,
			'diaDesaparicion': document.querySelector('#diaDesaparicion1_mf1_da').value,
			'lugarDesaparicion': document.querySelector('#lugarDesaparicion_mf1_da').value,
			'vestimenta_mf': document.querySelector('#vestimenta_mf1_da').value,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/create-persona_fisica-by-denuncia-anonima') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Persona fisica agregada correctamente',
						confirmButtonColor: '#bf9b55',
					});
					const delitosModalidadFiltro = response.delitosModalidadFiltro;
					const imputados = response.imputados;
					const victimas = response.victimas;
					const personas = response.personas;
					$('#victima_ofendido').empty();
					let select_victima_ofendido = document.querySelector("#victima_ofendido")
					victimas.forEach(victima => {
						const option = document.createElement('option');
						option.value = victima.PERSONAFISICAID;
						option.text = victima.NOMBRE + ' ' + victima.PRIMERAPELLIDO;
						select_victima_ofendido.add(option, null);
					});

					$('#imputado_arbol').empty();
					let select_imputado_mputado = document.querySelector("#imputado_arbol")
					imputados.forEach(imputado => {
						const option = document.createElement('option');
						option.value = imputado.PERSONAFISICAID;
						option.text = imputado.NOMBRE + ' ' + imputado.PRIMERAPELLIDO;
						select_imputado_mputado.add(option, null);

					});
					$('#propietario_update').empty();
					let select_propietario_update = document.querySelector("#propietario_update");
					personas.forEach(persona => {
						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' ' + persona.PRIMERAPELLIDO;
						select_propietario_update.add(option, null);
					});
					let tabla_personas = document.querySelectorAll('#table-personas tr');
					tabla_personas.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaPersonas(response.personas);

					$('#propietario').empty();
					let select_propietario = document.querySelector("#propietario");
					const option_vacio_pro = document.createElement('option');
					option_vacio_pro.value = '';
					option_vacio_pro.text = '';
					option_vacio_pro.disabled = true;
					option_vacio_pro.selected = true;
					select_propietario.add(option_vacio_pro, null);

					personas.forEach(persona => {
						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' ' + persona.PRIMERAPELLIDO;
						select_propietario.add(option, null);
					});

					$('#propietario_vehiculo_da').empty();
					let select_propietario_vehiculo_da = document.querySelector("#propietario_vehiculo_da");
					const option_vacio_pro_da = document.createElement('option');
					option_vacio_pro_da.value = '';
					option_vacio_pro_da.text = '';
					option_vacio_pro_da.disabled = true;
					option_vacio_pro_da.selected = true;
					select_propietario_vehiculo_da.add(option_vacio_pro_da, null);

					personas.forEach(persona => {
						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' ' + persona.PRIMERAPELLIDO;
						select_propietario_vehiculo_da.add(option, null);
					});
					$('#propietario_vehiculo_den').empty();
					let select_propietario_vehiculo_den = document.querySelector("#propietario_vehiculo_den");
					const option_vacio_pro_den = document.createElement('option');
					option_vacio_pro_den.value = '';
					option_vacio_pro_den.text = '';
					option_vacio_pro_den.disabled = true;
					option_vacio_pro_den.selected = true;
					select_propietario_vehiculo_den.add(option_vacio_pro_den, null);

					personas.forEach(persona => {
						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' ' + persona.PRIMERAPELLIDO;
						select_propietario_vehiculo_den.add(option, null);
					});
					$('#insert_persona_victima_modal_denuncia').modal('hide');
					document.getElementById("persona_fisica_form_insert_denunciaA").reset();

				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó la información de la persona fisica',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function clearInputPhone(e) {
		e.target.value = e.target.value.replace(/-/g, "");
		if (e.target.value.length > e.target.maxLength) {
			e.target.value = e.target.value.slice(0, e.target.maxLength);
		};
	}

	function agregarObjetosInvolucrados() {

		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'situacion': document.querySelector('#situacion_objeto').value,
			'clasificacionid': document.querySelector('#objeto_clasificacion').value,
			'subclasificacionid': document.querySelector('#objeto_subclasificacion').value,
			'marca': document.querySelector('#marca_objeto').value,
			'numserie': document.querySelector('#serie_objeto').value,
			'cantidad': document.querySelector('#cantidad_objeto').value,
			'valor': document.querySelector('#valor_objeto').value,
			'moneda': document.querySelector('#tipo_moneda').value,
			'descripciondetallada': document.querySelector('#descripcion_detallada').value,
			'propietario': document.querySelector('#propietario').value,
			'participaestado': document.querySelector('#participa_estado_objeto').value,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/create-objeto-involucrado-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				const objetos = response.objetos;
				const personas = response.personas;
				if (response.status == 1) {


					Swal.fire({
						icon: 'success',
						text: 'Objeto añadido correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_objetos_involucrados = document.querySelectorAll('#table-objetos-involucrados tr');
					tabla_objetos_involucrados.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaObjetosInvolucrados(response.objetos);
					$('#insert_objetos_modal_denuncia').modal('hide');
					document.getElementById("form_objetos_involucrados").reset();
					$('#objeto_subclasificacion').empty();
					$('#propietario').empty();
					let select_propietario = document.querySelector("#propietario");
					const option_vacio = document.createElement('option');
					option_vacio.value = "";
					option_vacio.text = "";
					option_vacio.disabled = true;
					option_vacio.selected = true;
					select_propietario.add(option_vacio, null);
					personas.forEach(persona => {
						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' ' + persona.PRIMERAPELLIDO;
						select_propietario.add(option, null);
					});

				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó el objeto involucrado',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function insertarRelacionIDO() {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'victima': document.querySelector('#victima_ofendido').value,
			'delito': document.querySelector('#delito_cometido').value,
			'imputado': document.querySelector('#imputado_arbol').value,
			'tentativa': document.querySelector('#tentativa').checked ? document.querySelector('#tentativa').value : null,
			'conviolencia': document.querySelector('#conviolencia').checked ? document.querySelector('#conviolencia').value : null,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/create-relacion_ido-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 3) {
					Swal.fire({
						icon: 'error',
						text: 'Esta relación de delito ya existe',
						confirmButtonColor: '#bf9b55',
					});
				} else if (response.status == 1) {

					Swal.fire({
						icon: 'success',
						text: 'Delito agregado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_relacion_fis_fis = document.querySelectorAll('#table-delitos-arbol tr');
					tabla_relacion_fis_fis.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaFisFis(response.relacionFisFis);


				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó el delito.',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function insertar_impdelito() {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'delito': document.querySelector('#delito_cometido').value,
			'imputado': document.querySelector('#imputado_arbol').value,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/create-fisimpdelito-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {

				if (response.status == 3) {
					Swal.fire({
						icon: 'error',
						text: 'Este delito ya existe en este folio',
						confirmButtonColor: '#bf9b55',
					});
				}
				if (response.status == 1) {
					let tabla_fisimpdelito = document.querySelectorAll('#table-delito-cometidos tr');
					tabla_fisimpdelito.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaImpDel(response.fisicaImpDelito);
					Swal.fire({
						icon: 'success',
						text: 'Relacion IMPUTADO-DELITO ingresado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					$('#insert_fisfis_modal_denuncia').modal('hide');
					document.getElementById("form_fisfis_insert").reset();

				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó la información de la relacion',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}
	//funcion para subir archivos externos
	async function crearArchivos() {
		document.getElementById('archivo_content').classList.add('d-none');
		document.getElementById('documentos_anexar_spinner').classList.remove('d-none');
		let documento;
		let nombre_documento;
		//se comprime el archivo
		if ($("#documentoArchivo")[0].files && $("#documentoArchivo")[0].files[0]) {
			if ($("#documentoArchivo")[0].files[0].type == "image/jpeg" || $("#documentoArchivo")[0].files[0].type == "image/png" || $("#documentoArchivo")[0].files[0].type == "image/jpg") {
				nombre_documento = $("#documentoArchivo")[0].files[0].name;
				documento = await comprimirImagen($("#documentoArchivo")[0].files[0], 50);
				console.log(documento);
			} else {
				nombre_documento = $("#documentoArchivo")[0].files[0].name;
				documento = $("#documentoArchivo")[0].files[0];
			}
		} else {
			document.getElementById('archivo_content').classList.remove('d-none');
			document.getElementById('documentos_anexar_spinner').classList.add('d-none');
			Swal.fire({
				icon: 'error',
				text: 'Debes seleccionar un documento.',
				showConfirmButton: false,
				timer: 1000
			});
			return
		}
		var packetData = new FormData();
		packetData.append("documentoArchivo", documento);
		packetData.append("folio", document.querySelector('#folio').value);
		packetData.append("year", document.querySelector('#year').value);
		packetData.append("nombreDocumento", nombre_documento);

		$.ajax({
			url: "<?= base_url('/data/create_archivos_admin') ?>",
			method: "POST",
			dataType: 'json',
			contentType: false,
			data: packetData,
			processData: false,
			cache: false,
			success: function(response) {
				const archivos = response.archivos.archivosexternos;
				console.log(response);
				document.getElementById('archivo_content').classList.remove('d-none');
				document.getElementById('documentos_anexar_spinner').classList.add('d-none');
				if (response.status == 1) {
					$('#agregar_archivos_modal_anonima').modal('hide');

					Swal.fire({
						icon: 'success',
						text: 'Documento agregado correctamente.',
						showConfirmButton: false,
						timer: 1000
					});

					let preview = document.querySelector('#viewDocumentoArchivo');

					document.getElementById('documentoArchivo').value = '';
					preview.setAttribute('src', '');
					//actualiza la tabla de archivos externos
					let tabla_archivos = document.querySelectorAll(
						'#table-archivos tr');
					tabla_archivos.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaArchivosExternos(archivos);

				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se subio el documento.',
						showConfirmButton: false,
						timer: 1000
					});
				} else if (response.status == 2) {
					Swal.fire({
						icon: 'error',
						text: 'Debes seleccionar un documento.',
						showConfirmButton: false,
						timer: 1000
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
				document.getElementById('archivo_content').classList.remove('d-none');
				document.getElementById('documentos_anexar_spinner').classList.add('d-none');
				Swal.fire({
					icon: 'error',
					text: 'No se subio el documento.',
					showConfirmButton: false,
					timer: 1000
				});
			}
		});

	}

	//Funcion para comprimir las imagenes dado a un porcentaje
	function comprimirImagen(imagenComoArchivo, porcentajeCalidad) {
		return new Promise((resolve, reject) => {
			const $canvas = document.createElement("canvas");
			const imagen = new Image();
			imagen.onload = () => {
				$canvas.width = imagen.width;
				$canvas.height = imagen.height;
				$canvas.getContext("2d").drawImage(imagen, 0, 0);
				$canvas.toBlob(
					(blob) => {
						if (blob === null) {
							return reject(blob);
						} else {
							resolve(blob);
						}
					},
					"image/jpeg", porcentajeCalidad / 100
				);
			};
			imagen.src = URL.createObjectURL(imagenComoArchivo);
		});
	};

	function agregarVehiculosInvolucrados() {
		var packetData = new FormData();

		packetData.append("subirDoc", $("#subirDoc")[0].files[0]);
		packetData.append("subirFotoV", $("#subirFotoV")[0].files[0]);


		packetData.append("folio", document.querySelector('#folio').value);
		packetData.append("year", document.querySelector('#year').value);

		packetData.append("tipo_vehiculo", document.querySelector('#tipo_vehiculo').value);
		packetData.append("color_vehiculo", document.querySelector('#color_vehiculo').value);
		packetData.append("tipo_placas_vehiculo", document.querySelector('#tipo_placas_vehiculo').value);
		packetData.append("placas_vehiculo", document.querySelector('#placas_vehiculo').value);
		packetData.append("estado_vehiculo_ad", document.querySelector('#estado_vehiculo_ad').value);
		packetData.append("estado_extranjero_vehiculo_ad", document.querySelector('#estado_extranjero_vehiculo_ad').value);
		packetData.append("serie_vehiculo", document.querySelector('#serie_vehiculo').value);
		packetData.append("num_chasis_vehiculo", document.querySelector('#num_chasis_vehiculo').value);
		packetData.append("distribuidor_vehiculo_ad", document.querySelector('#distribuidor_vehiculo_ad').value);
		packetData.append("marca_ad", document.querySelector('#marca_ad').value);
		packetData.append("linea_vehiculo_ad", document.querySelector('#linea_vehiculo_ad').value);
		packetData.append("version_vehiculo_ad", document.querySelector('#version_vehiculo_ad').value);
		packetData.append("transmision_vehiculo", document.querySelector('#transmision_vehiculo').value);
		packetData.append("traccion_vehiculo", document.querySelector('#traccion_vehiculo').value);
		packetData.append("seguro_vigente_vehiculo", document.querySelector('#seguro_vigente_vehiculo').value);
		packetData.append("servicio_vehiculo_ad", document.querySelector('#servicio_vehiculo_ad').value);
		packetData.append("description_vehiculo", document.querySelector('#description_vehiculo').value);
		packetData.append("modelo_vehiculo", document.querySelector('#modelo_vehiculo').value);
		packetData.append("color_tapiceria_vehiculo", document.querySelector('#color_tapiceria_vehiculo').value);
		packetData.append("marca_exacta", document.querySelector('#marca_ad_exacta').value);
		packetData.append("propietario_vehiculo", document.querySelector('#propietario_vehiculo_da').value);
		packetData.append("situacion", document.querySelector('#situacion_vehiculo_da').value);

		$.ajax({
			data: packetData,
			url: "<?= base_url('/data/create-vehiculo-by-id') ?>",
			method: "POST",
			dataType: "json",
			processData: false,
			cache: false,
			contentType: false,
			success: function(response) {
				if (response.status == 1) {
					const vehiculos = response.vehiculos;
					Swal.fire({
						icon: 'success',
						text: 'Vehículo agregado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_vehiculo = document.querySelectorAll('#table-vehiculos tr');
					tabla_vehiculo.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaVehiculos(vehiculos);
					$('#insert_vehiculo_modal_denuncia').modal('hide');
					document.querySelector('#doc_vehiculo').setAttribute('src', '');
					document.querySelector('#foto_vehiculo').setAttribute('src', '');

					document.getElementById("form_vehiculo_da_da").reset();
				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó la información del vehículo',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function actualizarDomicilio() {

		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'pf_id': document.querySelector('#pf_id_da').value,
			'pfd_id': document.querySelector('#pfd_id_da').value,
			'pais_pfd': document.querySelector('#pais_pfd_da').value,
			'estado_pfd': document.querySelector('#estado_pfd_da').value,
			'municipio_pfd': document.querySelector('#municipio_pfd_da').value,
			'localidad_pfd': document.querySelector('#localidad_pfd_da').value,
			'colonia_pfd_select': document.querySelector('#colonia_pfd_da_select').value,
			'colonia_pfd': document.querySelector('#colonia_pfd_da').value,
			'cp_pfd': document.querySelector('#cp_pfd_da').value,
			'calle_pfd': document.querySelector('#calle_pfd_da').value,
			'exterior_pfd': document.querySelector('#exterior_pfd_da').value,
			'interior_pfd': document.querySelector('#interior_pfd_da').value,
			'referencia_pfd': document.querySelector('#referencia_pfd_da').value,
		};

		$.ajax({
			data: data,
			url: "<?= base_url('/data/update-persona-fisica-domicilio-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Domicilio actualizado correctamente',
						confirmButtonColor: '#bf9b55',
					});
				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se actualizó el domicilio',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				Swal.fire({
					icon: 'error',
					text: 'No se actualizó el domicilio',
					confirmButtonColor: '#bf9b55',
				});
			}
		});
	}

	function actualizarPersonaMediaAfiliacion(id) {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'pf_id': id,
			'ocupacion_mf': document.querySelector('#ocupacion_mf_da').value != null ? document.querySelector('#ocupacion_mf_da').value : (document.querySelector('#ocupacion_mf1_da').value ? document.querySelector('#ocupacion_mf1_da').value : ''),
			'estatura_mf': document.querySelector('#estatura_mf_da').value != null ? document.querySelector('#estatura_mf_da').value : (document.querySelector('#estatura_mf1_da').value ? document.querySelector('#estatura_mf1_da').value : ''),
			'peso_mf': document.querySelector('#peso_mf_da').value != null ? document.querySelector('#peso_mf_da').value : (document.querySelector('#peso_mf1_da').value ? document.querySelector('#peso_mf1_da').value : ''),
			'senas_mf': document.querySelector('#senas_mf_da').value != null ? document.querySelector('#senas_mf_da').value : (document.querySelector('#senas_mf1_da').value ? document.querySelector('#senas_mf1_da').value : ''),
			'colortez_mf': document.querySelector('#colortez_mf_da').value != null ? document.querySelector('#colortez_mf_da').value : (document.querySelector('#colortez_mf1_da').value ? document.querySelector('#colortez_mf1_da').value : ''),
			'complexion_mf': document.querySelector('#complexion_mf_da').value != null ? document.querySelector('#complexion_mf_da').value : (document.querySelector('#complexion_mf1_da').value ? document.querySelector('#complexion_mf1_da').value : ''),
			'contextura_ceja_mf': document.querySelector('#contextura_ceja_mf_da').value != null ? document.querySelector('#contextura_ceja_mf_da').value : (document.querySelector('#contextura_ceja_mf1_da').value ? document.querySelector('#contextura_ceja_mf1_da').value : ''),
			'cara_forma_mf': document.querySelector('#cara_forma_mf_da').value != null ? document.querySelector('#cara_forma_mf_da').value : (document.querySelector('#cara_forma_mf1_da').value ? document.querySelector('#cara_forma_mf1_da').value : ''),
			'cara_tamano_mf': document.querySelector('#cara_tamano_mf_da').value != null ? document.querySelector('#cara_tamano_mf_da').value : (document.querySelector('#cara_tamano_mf1_da').value ? document.querySelector('#cara_tamano_mf1_da').value : ''),
			'caratez_mf': document.querySelector('#caratez_mf_da').value != null ? document.querySelector('#caratez_mf_da').value : (document.querySelector('#caratez_mf1_da').value ? document.querySelector('#caratez_mf1_da').value : ''),
			'lobulo_mf': document.querySelector('#lobulo_mf_da').value != null ? document.querySelector('#lobulo_mf_da').value : (document.querySelector('#lobulo_mf1_da').value ? document.querySelector('#lobulo_mf1_da').value : ''),
			'forma_oreja_mf': document.querySelector('#forma_oreja_mf_da').value != null ? document.querySelector('#forma_oreja_mf_da').value : (document.querySelector('#forma_oreja_mf1_da').value ? document.querySelector('#forma_oreja_mf1_da').value : ''),
			'tamano_oreja_mf': document.querySelector('#tamano_oreja_mf_da').value != null ? document.querySelector('#tamano_oreja_mf_da').value : (document.querySelector('#tamano_oreja_mf1_da').value ? document.querySelector('#tamano_oreja_mf1_da').value : ''),
			'colorC_mf': document.querySelector('#colorC_mf_da').value != null ? document.querySelector('#colorC_mf_da').value : (document.querySelector('#colorC_mf1_da').value ? document.querySelector('#colorC_mf1_da').value : ''),
			'formaC_mf': document.querySelector('#formaC_mf_da').value != null ? document.querySelector('#formaC_mf_da').value : (document.querySelector('#formaC_mf1_da').value ? document.querySelector('#formaC_mf1_da').value : ''),
			'tamanoC_mf': document.querySelector('#tamanoC_mf_da').value != null ? document.querySelector('#tamanoC_mf_da').value : (document.querySelector('#tamanoC_mf1_da').value ? document.querySelector('#tamanoC_mf1_da').value : ''),
			'peculiarC_mf': document.querySelector('#peculiarC_mf_da').value != null ? document.querySelector('#peculiarC_mf_da').value : (document.querySelector('#peculiarC_mf1_da').value ? document.querySelector('#peculiarC_mf1_da').value : ''),
			'cabello_descr_mf': document.querySelector('#cabello_descr_mf_da').value != null ? document.querySelector('#cabello_descr_mf_da').value : (document.querySelector('#cabello_descr_mf1_da').value ? document.querySelector('#cabello_descr_mf1_da').value : ''),
			'frente_altura_mf': document.querySelector('#frente_altura_mf_da').value != null ? document.querySelector('#frente_altura_mf_da').value : (document.querySelector('#frente_altura_mf1_da').value ? document.querySelector('#frente_altura_mf1_da').value : ''),
			'frente_anchura_ms': document.querySelector('#frente_anchura_ms_da').value != null ? document.querySelector('#frente_anchura_ms_da').value : (document.querySelector('#frente_anchura_mf1_da').value ? document.querySelector('#frente_anchura_mf1_da').value : ''),
			'tipoF_mf': document.querySelector('#tipoF_mf_da').value != null ? document.querySelector('#tipoF_mf_da').value : (document.querySelector('#tipoF_mf1_da').value ? document.querySelector('#tipoF_mf1_da').value : ''),
			'frente_peculiar_mf': document.querySelector('#frente_peculiar_mf_da').value != null ? document.querySelector('#frente_peculiar_mf_da').value : (document.querySelector('#frente_peculiar_mf1_da').value ? document.querySelector('#frente_peculiar_mf1_da').value : ''),
			'colocacion_ceja_mf': document.querySelector('#colocacion_ceja_mf_da').value != null ? document.querySelector('#colocacion_ceja_mf_da').value : (document.querySelector('#colocacion_ceja_mf1_da').value ? document.querySelector('#colocacion_ceja_mf1_da').value : ''),
			'ceja_mf': document.querySelector('#ceja_mf_da').value != null ? document.querySelector('#ceja_mf_da').value : (document.querySelector('#ceja_mf1_da').value ? document.querySelector('#ceja_mf1_da').value : ''),
			'tamano_ceja_mf': document.querySelector('#tamano_ceja_mf_da').value != null ? document.querySelector('#tamano_ceja_mf_da').value : (document.querySelector('#tamano_ceja_mf1_da').value ? document.querySelector('#tamano_ceja_mf1_da').value : ''),
			'grosor_ceja_mf': document.querySelector('#grosor_ceja_mf_da').value != null ? document.querySelector('#grosor_ceja_mf_da').value : (document.querySelector('#grosor_ceja_mf1_da').value ? document.querySelector('#grosor_ceja_mf1_da').value : ''),
			'colocacion_ojos_mf': document.querySelector('#colocacion_ojos_mf_da').value != null ? document.querySelector('#colocacion_ojos_mf_da').value : d(ocument.querySelector('#colocacion_ojos_mf1_da').value ? ocument.querySelector('#colocacion_ojos_mf1_da').value : ''),
			'forma_ojos_mf': document.querySelector('#forma_ojos_mf_da').value != null ? document.querySelector('#forma_ojos_mf_da').value : (document.querySelector('#forma_ojos_mf1_da').value ? document.querySelector('#forma_ojos_mf1_da').value : ''),
			'tamano_ojos_mf': document.querySelector('#tamano_ojos_mf_da').value != null ? document.querySelector('#tamano_ojos_mf_da').value : (document.querySelector('#tamano_ojos_mf1_da').value ? document.querySelector('#tamano_ojos_mf1_da').value : ''),
			'colorO_mf': document.querySelector('#colorO_mf_da').value != null ? document.querySelector('#colorO_mf_da').value : (document.querySelector('#colorO_mf1_da').value ? document.querySelector('#colorO_mf1_da').value : ''),
			'peculiaridad_ojos_mf': document.querySelector('#peculiaridad_ojos_mf_da').value != null ? document.querySelector('#peculiaridad_ojos_mf_da').value : (document.querySelector('#peculiaridad_ojos_mf1_da').value ? document.querySelector('#peculiaridad_ojos_mf1_da').value : ''),
			'nariz_tipo_mf': document.querySelector('#nariz_tipo_mf_da').value != null ? document.querySelector('#nariz_tipo_mf_da').value : (document.querySelector('#nariz_tipo_mf1_da').value ? document.querySelector('#nariz_tipo_mf1_da').value : ''),
			'nariz_tamano_mf': document.querySelector('#nariz_tamano_mf_da').value != null ? document.querySelector('#nariz_tamano_mf_da').value : (document.querySelector('#nariz_tamano_mf1_da').value ? document.querySelector('#nariz_tamano_mf1_da').value : ''),
			'nariz_base_mf': document.querySelector('#nariz_base_mf_da').value != null ? document.querySelector('#nariz_base_mf_da').value : (document.querySelector('#nariz_base_mf1_da').value ? document.querySelector('#nariz_base_mf1_da').value : ''),
			'nariz_peculiar_mf': document.querySelector('#nariz_peculiar_mf_da').value != null ? document.querySelector('#nariz_peculiar_mf_da').value : (document.querySelector('#nariz_peculiar_mf1_da').value ? document.querySelector('#nariz_peculiar_mf1_da').value : ''),
			'nariz_descr_mf': document.querySelector('#nariz_descr_mf_da').value != null ? document.querySelector('#nariz_descr_mf_da').value : (document.querySelector('#nariz_descr_mf1_da').value ? document.querySelector('#nariz_descr_mf1_da').value : ''),
			'bigote_forma_mf': document.querySelector('#bigote_forma_mf_da').value != null ? document.querySelector('#bigote_forma_mf_da').value : (document.querySelector('#bigote_forma_mf1_da').value ? document.querySelector('#bigote_forma_mf1_da').value : ''),
			'bigote_tamaño_mf': document.querySelector('#bigote_tamaño_mf_da').value != null ? document.querySelector('#bigote_tamaño_mf_da').value : (document.querySelector('#bigote_tamaño_mf1_da').value ? document.querySelector('#bigote_tamaño_mf1_da').value : ''),
			'bigote_grosor_mf': document.querySelector('#bigote_grosor_mf_da').value != null ? document.querySelector('#bigote_grosor_mf_da').value : (document.querySelector('#bigote_grosor_mf1_da').value ? document.querySelector('#bigote_grosor_mf1_da').value : ''),
			'bigote_peculiar_mf': document.querySelector('#bigote_peculiar_mf_da').value != null ? document.querySelector('#bigote_peculiar_mf_da').value : (document.querySelector('#bigote_peculiar_mf1_da').value ? document.querySelector('#bigote_peculiar_mf1_da').value : ''),
			'bigote_descr_mf': document.querySelector('#bigote_descr_mf_da').value != null ? document.querySelector('#bigote_descr_mf_da').value : (document.querySelector('#bigote_descr_mf1_da').value ? document.querySelector('#bigote_descr_mf1_da').value : ''),
			'boca_tamano_mf': document.querySelector('#boca_tamano_mf_da').value != null ? document.querySelector('#boca_tamano_mf_da').value : (document.querySelector('#boca_tamano_mf1_da').value ? document.querySelector('#boca_tamano_mf1_da').value : ''),
			'boca_peculiar_mf': document.querySelector('#boca_peculiar_mf_da').value != null ? document.querySelector('#boca_peculiar_mf_da').value : (document.querySelector('#boca_peculiar_mf1_da').value ? document.querySelector('#boca_peculiar_mf1_da').value : ''),
			'labio_longitud_mf': document.querySelector('#labio_longitud_mf_da').value != null ? document.querySelector('#labio_longitud_mf_da').value : (document.querySelector('#labio_longitud_mf1_da').value ? document.querySelector('#labio_longitud_mf1_da').value : ''),
			'labio_posicion_mf': document.querySelector('#labio_posicion_mf_da').value != null ? document.querySelector('#labio_posicion_mf_da').value : (document.querySelector('#labio_posicion_mf1_da').value ? document.querySelector('#labio_posicion_mf1_da').value : ''),
			'labio_peculiar_mf': document.querySelector('#labio_peculiar_mf_da').value != null ? document.querySelector('#labio_peculiar_mf_da').value : (document.querySelector('#labio_peculiar_mf1_da').value ? document.querySelector('#labio_peculiar_mf1_da').value : ''),
			'labio_grosor_mf': document.querySelector('#labio_grosor_mf_da').value != null ? document.querySelector('#labio_grosor_mf_da').value : (document.querySelector('#labio_grosor_mf1_da').value ? document.querySelector('#labio_grosor_mf1_da').value : ''),
			'dientes_tamano_mf': document.querySelector('#dientes_tamano_mf_da').value != null ? document.querySelector('#dientes_tamano_mf_da').value : document.querySelector('#dientes_tamano_mf1_da').value ? document.querySelector('#dientes_tamano_mf1_da').value : '',
			'dientes_tipo_mf': document.querySelector('#dientes_tipo_mf_da').value != null ? document.querySelector('#dientes_tipo_mf_da').value : (document.querySelector('#dientes_tipo_mf1_da').value ? document.querySelector('#dientes_tipo_mf1_da').value : ''),
			'dientes_peculiar_mf': document.querySelector('#dientes_peculiar_mf_da').value != null ? document.querySelector('#dientes_peculiar_mf_da').value : (document.querySelector('#dientes_peculiar_mf1_da').value ? document.querySelector('#dientes_peculiar_mf1_da').value : ''),
			'dientes_descr_mf': document.querySelector('#dientes_descr_mf_da').value != null ? document.querySelector('#dientes_descr_mf_da').value : (document.querySelector('#dientes_descr_mf1_da').value ? document.querySelector('#dientes_descr_mf1_da').value : ''),
			'barbilla_forma_mf': document.querySelector('#barbilla_forma_mf_da').value != null ? document.querySelector('#barbilla_forma_mf_da').value : (document.querySelector('#barbilla_forma_mf1_da').value ? document.querySelector('#barbilla_forma_mf1_da').value : ''),
			'barbilla_tamano_mf': document.querySelector('#barbilla_tamano_mf_da').value != null ? document.querySelector('#barbilla_tamano_mf_da').value : (document.querySelector('#barbilla_tamano_mf1_da').value ? document.querySelector('#barbilla_tamano_mf1_da').value : ''),
			'barbilla_inclinacion_mf': document.querySelector('#barbilla_inclinacion_mf_da').value != null ? document.querySelector('#barbilla_inclinacion_mf_da').value : (document.querySelector('#barbilla_inclinacion_mf1_da').value ? document.querySelector('#barbilla_inclinacion_mf1_da').value : ''),
			'barbilla_peculiar_mf': document.querySelector('#barbilla_peculiar_mf_da').value != null ? document.querySelector('#barbilla_peculiar_mf_da').value : (document.querySelector('#barbilla_peculiar_mf1_da').value ? document.querySelector('#barbilla_peculiar_mf1_da').value : ''),
			'barbilla_descr_mf': document.querySelector('#barbilla_descr_mf_da').value != null ? document.querySelector('#barbilla_descr_mf_da').value : (document.querySelector('#barbilla_descr_mf1_da').value ? document.querySelector('#barbilla_descr_mf1_da').value : ''),
			'barba_tamano_mf': document.querySelector('#barba_tamano_mf_da').value != null ? document.querySelector('#barba_tamano_mf_da').value : (document.querySelector('#barba_tamano_mf1_da').value ? document.querySelector('#barba_tamano_mf1_da').value : ''),
			'barba_peculiar_mf': document.querySelector('#barba_peculiar_mf_da').value != null ? document.querySelector('#barba_peculiar_mf_da').value : (document.querySelector('#barba_peculiar_mf1_da').value ? document.querySelector('#barba_peculiar_mf1_da').value : ''),
			'barba_descr_mf': document.querySelector('#barba_descr_mf_da').value != null ? document.querySelector('#barba_descr_mf_da').value : (document.querySelector('#barba_descr_mf1_da').value ? document.querySelector('#barba_descr_mf1_da').value : ''),
			'cuello_tamano_mf': document.querySelector('#cuello_tamano_mf_da').value != null ? document.querySelector('#cuello_tamano_mf_da').value : (document.querySelector('#cuello_tamano_mf1_da').value ? document.querySelector('#cuello_tamano_mf1_da').value : ''),
			'cuello_grosor_mf': document.querySelector('#cuello_grosor_mf_da').value != null ? document.querySelector('#cuello_grosor_mf_da').value : (document.querySelector('#cuello_grosor_mf1_da').value ? document.querySelector('#cuello_grosor_mf1_da').value : ''),
			'cuello_peculiar_mf': document.querySelector('#cuello_peculiar_mf_da').value != null ? document.querySelector('#cuello_peculiar_mf_da').value : (document.querySelector('#cuello_peculiar_mf1_da').value ? document.querySelector('#cuello_peculiar_mf1_da').value : ''),
			'cuello_descr_mf': document.querySelector('#cuello_descr_mf_da').value != null ? document.querySelector('#cuello_descr_mf_da').value : (document.querySelector('#cuello_descr_mf1_da').value ? document.querySelector('#cuello_descr_mf1_da').value : ''),
			'hombro_posicion_mf': document.querySelector('#hombro_posicion_mf_da').value != null ? document.querySelector('#hombro_posicion_mf_da').value : (document.querySelector('#hombro_posicion_mf1_da').value ? document.querySelector('#hombro_posicion_mf1_da').value : ''),
			'hombro_tamano_mf': document.querySelector('#hombro_tamano_mf_da').value != null ? document.querySelector('#hombro_tamano_mf_da').value : (document.querySelector('#hombro_tamano_mf1_da').value ? document.querySelector('#hombro_tamano_mf1_da').value : ''),
			'hombro_grosor_mf': document.querySelector('#hombro_grosor_mf_da').value != null ? document.querySelector('#hombro_grosor_mf_da').value : (document.querySelector('#hombro_grosor_mf1_da').value ? document.querySelector('#hombro_grosor_mf1_da').value : ''),
			'estomago_mf': document.querySelector('#estomago_mf_da').value != null ? document.querySelector('#estomago_mf_da').value : (document.querySelector('#estomago_mf1_da').value ? document.querySelector('#estomago_mf1_da').value : ''),
			'escolaridad_mf': document.querySelector('#escolaridad_mf_da').value != null ? document.querySelector('#escolaridad_mf_da').value : (document.querySelector('#escolaridad_mf1_da').value ? document.querySelector('#escolaridad_mf1_da').value : ''),
			'etnia_mf': document.querySelector('#etnia_mf_da').value != null ? document.querySelector('#etnia_mf_da').value : (document.querySelector('#etnia_mf1_da').value ? document.querySelector('#etnia_mf1_da').value : ''),
			'estomago_descr_mf': document.querySelector('#estomago_descr_mf_da').value != null ? document.querySelector('#estomago_descr_mf_da').value : (document.querySelector('#estomago_descr_mf1_da').value ? document.querySelector('#estomago_descr_mf1_da').value : ''),
			'discapacidad_mf': document.querySelector('#discapacidad_mf_da').value != null ? document.querySelector('#discapacidad_mf_da').value : (document.querySelector('#discapacidad_mf1_da').value ? document.querySelector('#discapacidad_mf1_da').value : ''),
			'diaDesaparicion': document.querySelector('#diaDesaparicion_da').value != null ? document.querySelector('#diaDesaparicion_da').value : (document.querySelector('#diaDesaparicion1_da').value ? document.querySelector('#diaDesaparicion1_da').value : ''),
			'lugarDesaparicion': document.querySelector('#lugarDesaparicion_da').value != null ? document.querySelector('#lugarDesaparicion_da').value : (document.querySelector('#lugarDesaparicion1_da').value ? document.querySelector('#lugarDesaparicion1_da').value : ''),
			'vestimenta_mf': document.querySelector('#vestimenta_mf_da').value != null ? document.querySelector('#vestimenta_mf_da').value : (document.querySelector('#vestimenta_mf1_da').value ? document.querySelector('#vestimenta_mf1_da').value : ''),
			// 'parentesco_mf': document.querySelector('#parentesco_mf_da').value?document.querySelector('#parentesco_mf_da').value:document.querySelector('#parentesco_mf1_da').value,

		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/update-media-filiacion-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Persona media afiliación actualizada correctamente',
						confirmButtonColor: '#bf9b55',
					});
					// form_media_filiacion.reset();
					// $('#folio_persona_fisica_modal_da').modal('hide');

					// document.getElementById("form_media_filiacion_insert").reset();
					// $('#media_filiacion_modal').modal('hide');


				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se actualizó la información de la persona media afiliación',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}


	function actualizarPersona() {
		const data = {
			'folio': inputFolio.value,
			'year': year_select.value,
			'pf_id': document.querySelector('#pf_id_da').value,
			'tipo_identificacion_pf': document.querySelector('#tipo_identificacion_pf_da').value,
			'numero_identidad_pf': document.querySelector('#numero_identidad_pf_da').value,
			'nombre_pf': document.querySelector('#nombre_pf_da').value,
			'apellido_paterno_pf': document.querySelector('#apellido_paterno_pf_da').value,
			'apellido_materno_pf': document.querySelector('#apellido_materno_pf_da').value,
			'nacionalidad_pf': document.querySelector('#nacionalidad_pf_da').value,
			'idioma_pf': document.querySelector('#idioma_pf_da').value,
			'edoorigen_pf': document.querySelector('#edoorigen_pf_da').value,
			'munorigen_pf': document.querySelector('#munorigen_pf_da').value,
			'telefono_pf': document.querySelector('#telefono_pf_da').value,
			'codigo_pais_pf': document.querySelector('#codigo_pais_pf_da').value,
			'telefono_pf_2': document.querySelector('#telefono_pf_da_2').value,
			'codigo_pais_pf_2': document.querySelector('#codigo_pais_pf_da_2').value,
			'correo_pf': document.querySelector('#correo_pf_da').value,
			'fecha_nacimiento_pf': document.querySelector('#fecha_nacimiento_pf_da').value,
			'edad_pf': document.querySelector('#edad_pf_da').value,
			'edoc_pf': document.querySelector('#edoc_pf_da').value,
			'sexo_pf': document.querySelector('#sexo_pf_da').value,
			'ocupacion_pf': document.querySelector('#ocupacion_pf_da').value,
			'escolaridad_pf': document.querySelector('#escolaridad_pf_da').value,
			'descripcionFisica_pf': document.querySelector('#descripcionFisica_pf_da').value,
			'calidad_juridica_pf': document.querySelector('#calidad_juridica_pf_da').value,
			'apodo_pf': document.querySelector('#apodo_pf_da').value,
			'denunciante_pf': document.querySelector('#denunciante_pf_da').value,
			'facebook_pf': document.querySelector('#facebook_pf_da').value,
			'instagram_pf': document.querySelector('#instagram_pf_da').value,
			'twitter_pf': document.querySelector('#twitter_pf_da').value,
			'ocupacion_descr': document.querySelector('#ocupacion_pf_da_m').value,

		};

		$.ajax({
			data: data,
			url: "<?= base_url('/data/update-persona-fisica-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				const personas = response.personas;
				const imputados = response.imputados;
				const victimas = response.victimas;
				if (response.status == 1) {
					let tabla_personas = document.querySelectorAll('#table-personas tr');
					tabla_personas.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaPersonas(response.personas);

					$('#imputado_arbol').empty();
					let select_imputado_mputado = document.querySelector("#imputado_arbol");
					imputados.forEach(imputado => {
						const option = document.createElement('option');
						option.value = imputado.PERSONAFISICAID;
						option.text = imputado.NOMBRE + ' ' + imputado.PRIMERAPELLIDO;
						select_imputado_mputado.add(option, null);

					});
					$('#victima_ofendido').empty();
					let select_victima_ofendido = document.querySelector("#victima_ofendido");
					victimas.forEach(victima => {
						const option = document.createElement('option');
						option.value = victima.PERSONAFISICAID;
						option.text = victima.NOMBRE + ' ' + victima.PRIMERAPELLIDO;
						select_victima_ofendido.add(option, null);
					});

					$('#propietario_vehiculo_da').empty();
					let select_propietario_da = document.querySelector("#propietario_vehiculo_da");
					const option_vacio_pro = document.createElement('option');
					option_vacio_pro.value = '';
					option_vacio_pro.text = '';
					option_vacio_pro.disabled = true;
					option_vacio_pro.selected = true;
					select_propietario_da.add(option_vacio_pro, null);

					personas.forEach(persona => {
						let primer_apellido = persona.PRIMERAPELLIDO ? persona
							.PRIMERAPELLIDO : '';

						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' '.primer_apellido;
						select_propietario_da.add(option, null);
					});

					$('#propietario_vehiculo_den').empty();
					let select_propietario_den = document.querySelector("#propietario_vehiculo_den");
					const option_vacio_pro_den = document.createElement('option');
					option_vacio_pro_den.value = '';
					option_vacio_pro_den.text = '';
					option_vacio_pro_den.disabled = true;
					option_vacio_pro_den.selected = true;
					select_propietario_den.add(option_vacio_pro_den, null);

					personas.forEach(persona => {
						let primer_apellido = persona.PRIMERAPELLIDO ? persona
							.PRIMERAPELLIDO : '';

						const option = document.createElement('option');
						option.value = persona.PERSONAFISICAID;
						option.text = persona.NOMBRE + ' '.primer_apellido;
						select_propietario_den.add(option, null);
					});
					Swal.fire({
						icon: 'success',
						text: 'Persona física actualizada correctamente',
						confirmButtonColor: '#bf9b55',
					});

				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se actualizó la información de la persona',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				Swal.fire({
					icon: 'error',
					text: 'No se actualizó la información de la persona',
					confirmButtonColor: '#bf9b55',
				});
			}
		});
	}

	function actualizarObjetosInvolucrados(objetoid) {

		const data = {
			'folio': inputFolio.value,
			'year': year_select.value,
			'objetoid': objetoid,
			'situacion': document.querySelector('#situacion_objeto_update').value,
			'clasificacionid': document.querySelector('#objeto_update_clasificacion').value,
			'subclasificacionid': document.querySelector('#objeto_update_subclasificacion').value,
			'marca': document.querySelector('#marca_objeto_update').value,
			'numserie': document.querySelector('#serie_objeto_update').value,
			'cantidad': document.querySelector('#cantidad_objeto_update').value,
			'valor': document.querySelector('#valor_objeto_update').value,
			'moneda': document.querySelector('#tipo_moneda_update').value,
			'descripciondetallada': document.querySelector('#descripcion_detallada_update').value,
			'propietario': document.querySelector('#propietario_update').value,
			'participaestado': document.querySelector('#participa_estado_objeto_update').value,
		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/update-objeto-involucrado-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				const objetos = response.objetos;
				let objeto_sub = response.objetosub;
				if (response.status == 1) {
					document.getElementById("form_objetos_involucrados_update").reset();

					let tabla_objetos_involucrados = document.querySelectorAll('#table-objetos-involucrados tr');
					tabla_objetos_involucrados.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaObjetosInvolucrados(objetos);
					Swal.fire({
						icon: 'success',
						text: 'Objeto actualizado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					$('#folio_objetos_update').modal('hide');
					$('#objeto_update_subclasificacion').empty();

				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se agregó el objeto involucrado',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function viewPersonaFisica(id) {
		$.ajax({
			data: {
				'id': id,
				'folio': inputFolio.value,
				'year': year_select.value,
			},
			url: "<?= base_url('/data/get-persona-fisica-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					//PERSONA FISICA
					let personaFisica = response.personaFisica;
					//mediafiliacion 
					let mediaFiliacion = response.personaFisicaMediaFiliacion;
					let folio = response.folio;
					let parentesco = response.parentesco;
					let relacion_parentesco = response.parentescoRelacion;
					let idPersonaFisica = response.idPersonaFisica;
					document.querySelectorAll('#pf_id_da').forEach(element => {
						element.value = id;
					});

					document.querySelector('#calidad_juridica_pf_da').value = personaFisica.CALIDADJURIDICAID ? personaFisica.CALIDADJURIDICAID : '';
					document.querySelector('#nombre_pf_da').value = personaFisica.NOMBRE ? personaFisica.NOMBRE : '';
					document.querySelector('#apellido_paterno_pf_da').value = personaFisica.PRIMERAPELLIDO ? personaFisica.PRIMERAPELLIDO : '';
					document.querySelector('#apellido_materno_pf_da').value = personaFisica.SEGUNDOAPELLIDO ? personaFisica.SEGUNDOAPELLIDO : '';
					document.querySelector('#sexo_pf_da').value = personaFisica.SEXO ? personaFisica.SEXO : '';
					document.querySelector('#tipo_identificacion_pf_da').value = personaFisica.TIPOIDENTIFICACIONID ? personaFisica.TIPOIDENTIFICACIONID : '';
					document.querySelector('#nacionalidad_pf_da').value = personaFisica.NACIONALIDADID ? personaFisica.NACIONALIDADID : '';
					document.querySelector('#edoc_pf_da').value = personaFisica.ESTADOCIVILID ? personaFisica.ESTADOCIVILID : '';
					document.querySelector('#idioma_pf_da').value = personaFisica.PERSONAIDIOMAID ? personaFisica.PERSONAIDIOMAID : '';
					document.querySelector('#fecha_nacimiento_pf_da').value = personaFisica.FECHANACIMIENTO ? personaFisica.FECHANACIMIENTO : '';
					document.querySelector('#edad_pf_da').value = personaFisica.EDADCANTIDAD ? personaFisica.EDADCANTIDAD : '';
					document.querySelector('#numero_identidad_pf_da').value = personaFisica.NUMEROIDENTIFICACION ? personaFisica.NUMEROIDENTIFICACION : '';
					document.querySelector('#codigo_pais_pf_da').value = personaFisica.CODIGOPAISTEL ? personaFisica.CODIGOPAISTEL : '52';
					document.querySelector('#codigo_pais_pf_da_2').value = personaFisica.CODIGOPAISTEL2 ? personaFisica.CODIGOPAISTEL2 : '52';
					document.querySelector('#telefono_pf_da').value = personaFisica.TELEFONO ? personaFisica.TELEFONO : '';
					document.querySelector('#telefono_pf_da_2').value = personaFisica.TELEFONO2 ? personaFisica.TELEFONO2 : '';
					document.querySelector('#apodo_pf_da').value = personaFisica.APODO ? personaFisica.APODO : '';
					document.querySelector('#correo_pf_da').value = personaFisica.CORREO ? personaFisica.CORREO : '';
					document.querySelector('#edoorigen_pf_da').value = personaFisica.ESTADOORIGENID ? personaFisica.ESTADOORIGENID : '';
					if (personaFisica.ESTADOORIGENID) {
						let data = {
							'estado_id': personaFisica.ESTADOORIGENID
						};
						$.ajax({
							data: data,
							url: "<?= base_url('/data/get-municipios-by-estado') ?>",
							method: "POST",
							dataType: "json",
							success: function(response) {
								let municipios = response.data;
								municipios.forEach(municipio => {
									let option = document.createElement("option");
									option.text = municipio.MUNICIPIODESCR;
									option.value = municipio.MUNICIPIOID;
									document.querySelector('#munorigen_pf_da').add(option);
								});
								document.querySelector('#munorigen_pf_da').value = personaFisica.MUNICIPIOORIGENID ? personaFisica.MUNICIPIOORIGENID : '';
							},
							error: function(jqXHR, textStatus, errorThrown) {}
						});
					} else {
						document.querySelector('#munorigen_pf_da').value = '';
					}
					document.querySelector('#escolaridad_pf_da').value = personaFisica.ESCOLARIDADID ? personaFisica.ESCOLARIDADID : '';
					document.querySelector('#ocupacion_pf_da').value = personaFisica.OCUPACIONID ? personaFisica.OCUPACIONID : '';
					document.querySelector('#descripcionFisica_pf_da').value = personaFisica.DESCRIPCION_FISICA ? personaFisica.DESCRIPCION_FISICA : '';
					document.querySelector('#facebook_pf_da').value = personaFisica.FACEBOOK ? personaFisica.FACEBOOK : '';
					document.querySelector('#instagram_pf_da').value = personaFisica.INSTAGRAM ? personaFisica.INSTAGRAM : '';
					document.querySelector('#twitter_pf_da').value = personaFisica.TWITTER ? personaFisica.TWITTER : '';
					document.querySelector('#denunciante_pf_da').value = personaFisica.DENUNCIANTE ? personaFisica.DENUNCIANTE : '';
					if (personaFisica.OCUPACIONDESCR) {
						document.querySelector('#ocupacion_pf_da').classList.remove('d-none');
						document.querySelector('#ocupacion_pf_da_m').value = personaFisica.OCUPACIONDESCR;
					}
					//PERSONA FISICA END
					//MEDIAFILIACION
					if (mediaFiliacion) {
						document.querySelector('#etnia_mf_da').value = mediaFiliacion.PERSONAETNIAID;

						document.querySelector('#estatura_mf_da').value = mediaFiliacion.ESTATURA;
						document.querySelector('#peso_mf_da').value = mediaFiliacion.PESO;

						document.querySelector('#complexion_mf_da').value = mediaFiliacion.FIGURAID ? mediaFiliacion.FIGURAID : '';

						document.querySelector('#colortez_mf_da').value = mediaFiliacion.PIELCOLORID ? mediaFiliacion.PIELCOLORID : '';
						document.querySelector('#senas_mf_da').value = mediaFiliacion.SENASPARTICULARES;
						// document.querySelector('#identidadD').value = mediaFiliacion.IDENTIDAD ? mediaFiliacion.IDENTIDAD:'';
						document.querySelector('#colorC_mf_da').value = mediaFiliacion.CABELLOCOLORID ? mediaFiliacion.CABELLOCOLORID : '';
						document.querySelector('#tamanoC_mf_da').value = mediaFiliacion.CABELLOTAMANOID ? mediaFiliacion.CABELLOTAMANOID : '';
						document.querySelector('#formaC_mf_da').value = mediaFiliacion.CABELLOESTILOID ? mediaFiliacion.CABELLOESTILOID : '';
						document.querySelector('#peculiarC_mf_da').value = mediaFiliacion.CABELLOPECULIARID ? mediaFiliacion.CABELLOPECULIARID : '';

						document.querySelector('#cabello_descr_mf_da').value = mediaFiliacion.CABELLODESCR ? mediaFiliacion.CABELLODESCR : '';
						document.querySelector('#colocacion_ojos_mf_da').value = mediaFiliacion.OJOCOLOCACIONID ? mediaFiliacion.OJOCOLOCACIONID : '';
						document.querySelector('#forma_ojos_mf_da').value = mediaFiliacion.OJOFORMAID ? mediaFiliacion.OJOFORMAID : '';
						document.querySelector('#tamano_ojos_mf_da').value = mediaFiliacion.OJOTAMANOID ? mediaFiliacion.OJOTAMANOID : '';
						document.querySelector('#colorO_mf_da').value = mediaFiliacion.OJOCOLORID ? mediaFiliacion.OJOCOLORID : '';

						document.querySelector('#peculiaridad_ojos_mf_da').value = mediaFiliacion.OJOPECULIARID ? mediaFiliacion.OJOPECULIARID : '';
						document.querySelector('#frente_altura_mf_da').value = mediaFiliacion.FRENTEALTURAID ? mediaFiliacion.FRENTEALTURAID : '';
						document.querySelector('#frente_anchura_ms_da').value = mediaFiliacion.FRENTEANCHURAID ? mediaFiliacion.FRENTEANCHURAID : '';
						document.querySelector('#tipoF_mf_da').value = mediaFiliacion.FRENTEFORMAID ? mediaFiliacion.FRENTEFORMAID : '';
						document.querySelector('#frente_peculiar_mf_da').value = mediaFiliacion.FRENTEPECULIARID ? mediaFiliacion.FRENTEPECULIARID : '';
						document.querySelector('#colocacion_ceja_mf_da').value = mediaFiliacion.CEJACOLOCACIONID ? mediaFiliacion.CEJACOLOCACIONID : '';
						document.querySelector('#ceja_mf_da').value = mediaFiliacion.CEJAFORMAID ? mediaFiliacion.CEJAFORMAID : '';

						document.querySelector('#tamano_ceja_mf_da').value = mediaFiliacion.CEJATAMANOID ? mediaFiliacion.CEJATAMANOID : '';
						document.querySelector('#grosor_ceja_mf_da').value = mediaFiliacion.CEJAGROSORID ? mediaFiliacion.CEJAGROSORID : '';
						document.querySelector('#nariz_tipo_mf_da').value = mediaFiliacion.CEJATAMANOID ? mediaFiliacion.CEJATAMANOID : '';
						document.querySelector('#nariz_tamano_mf_da').value = mediaFiliacion.NARIZTAMANOID ? mediaFiliacion.NARIZTAMANOID : '';
						document.querySelector('#nariz_base_mf_da').value = mediaFiliacion.NARIZBASEID ? mediaFiliacion.NARIZBASEID : '';
						document.querySelector('#nariz_peculiar_mf_da').value = mediaFiliacion.NARIZPECULIARID ? mediaFiliacion.NARIZPECULIARID : '';
						document.querySelector('#nariz_descr_mf_da').value = mediaFiliacion.NARIZDESCR ? mediaFiliacion.NARIZDESCR : '';
						document.querySelector('#bigote_forma_mf_da').value = mediaFiliacion.BIGOTEFORMAID ? mediaFiliacion.BIGOTEFORMAID : '';
						document.querySelector('#bigote_tamaño_mf_da').value = mediaFiliacion.BIGOTETAMANOID ? mediaFiliacion.BIGOTETAMANOID : '';
						document.querySelector('#bigote_grosor_mf_da').value = mediaFiliacion.BIGOTEGROSORID ? mediaFiliacion.BIGOTEGROSORID : '';
						document.querySelector('#bigote_peculiar_mf_da').value = mediaFiliacion.BIGOTEPECULIARID ? mediaFiliacion.BIGOTEPECULIARID : '';
						document.querySelector('#bigote_descr_mf_da').value = mediaFiliacion.BIGOTEDESCR ? mediaFiliacion.BIGOTEDESCR : '';
						document.querySelector('#boca_tamano_mf_da').value = mediaFiliacion.BOCATAMANOID ? mediaFiliacion.BOCATAMANOID : '';
						document.querySelector('#boca_peculiar_mf_da').value = mediaFiliacion.BOCAPECULIARID ? mediaFiliacion.BOCAPECULIARID : '';
						document.querySelector('#labio_grosor_mf_da').value = mediaFiliacion.LABIOGROSORID ? mediaFiliacion.LABIOGROSORID : '';
						document.querySelector('#labio_longitud_mf_da').value = mediaFiliacion.LABIOLONGITUDID ? mediaFiliacion.LABIOLONGITUDID : '';
						document.querySelector('#labio_posicion_mf_da').value = mediaFiliacion.LABIOPOSICIONID ? mediaFiliacion.LABIOPOSICIONID : '';
						document.querySelector('#labio_peculiar_mf_da').value = mediaFiliacion.LABIOPECULIARID ? mediaFiliacion.LABIOPECULIARID : '';
						document.querySelector('#dientes_tamano_mf_da').value = mediaFiliacion.DIENTETAMANOID ? mediaFiliacion.DIENTETAMANOID : '';
						document.querySelector('#dientes_tipo_mf_da').value = mediaFiliacion.DIENTETIPOID ? mediaFiliacion.DIENTETIPOID : '';
						document.querySelector('#dientes_peculiar_mf_da').value = mediaFiliacion.DIENTEPECULIARID ? mediaFiliacion.DIENTEPECULIARID : '';
						document.querySelector('#dientes_descr_mf_da').value = mediaFiliacion.DIENTEDESCR ? mediaFiliacion.DIENTEDESCR : '';
						document.querySelector('#barbilla_forma_mf_da').value = mediaFiliacion.BARBILLAFORMAID ? mediaFiliacion.BARBILLAFORMAID : '';
						document.querySelector('#barbilla_tamano_mf_da').value = mediaFiliacion.BARBILLATAMANOID ? mediaFiliacion.BARBILLATAMANOID : '';
						document.querySelector('#barbilla_inclinacion_mf_da').value = mediaFiliacion.BARBILLAINCLINACIONID ? mediaFiliacion.BARBILLAINCLINACIONID : '';
						document.querySelector('#barbilla_peculiar_mf_da').value = mediaFiliacion.BARBILLAPECULIARID ? mediaFiliacion.BARBILLAPECULIARID : '';
						document.querySelector('#barbilla_descr_mf_da').value = mediaFiliacion.BARBILLADESCR ? mediaFiliacion.BARBILLADESCR : '';
						document.querySelector('#barba_tamano_mf_da').value = mediaFiliacion.BARBATAMANOID ? mediaFiliacion.BARBATAMANOID : '';
						document.querySelector('#barba_peculiar_mf_da').value = mediaFiliacion.BARBAPECULIARID ? mediaFiliacion.BARBAPECULIARID : '';
						document.querySelector('#barba_descr_mf_da').value = mediaFiliacion.BARBADESCR ? mediaFiliacion.BARBADESCR : '';
						document.querySelector('#cuello_tamano_mf_da').value = mediaFiliacion.CUELLOTAMANOID ? mediaFiliacion.CUELLOTAMANOID : '';
						document.querySelector('#cuello_grosor_mf_da').value = mediaFiliacion.CUELLOGROSORID ? mediaFiliacion.CUELLOGROSORID : '';
						document.querySelector('#cuello_peculiar_mf_da').value = mediaFiliacion.CUELLOPECULIARID ? mediaFiliacion.CUELLOPECULIARID : '';
						document.querySelector('#cuello_descr_mf_da').value = mediaFiliacion.CUELLODESCR ? mediaFiliacion.CUELLODESCR : '';
						document.querySelector('#hombro_posicion_mf_da').value = mediaFiliacion.HOMBROPOSICIONID ? mediaFiliacion.HOMBROPOSICIONID : '';
						document.querySelector('#hombro_tamano_mf_da').value = mediaFiliacion.HOMBROTAMANOID ? mediaFiliacion.HOMBROTAMANOID : '';
						document.querySelector('#hombro_grosor_mf_da').value = mediaFiliacion.HOMBROGROSORID ? mediaFiliacion.HOMBROGROSORID : '';
						document.querySelector('#estomago_mf_da').value = mediaFiliacion.ESTOMAGOID ? mediaFiliacion.ESTOMAGOID : '';
						document.querySelector('#estomago_descr_mf_da').value = mediaFiliacion.ESTOMAGOID ? mediaFiliacion.ESTOMAGOID : '';



						document.querySelector('#discapacidad_mf_da').value = mediaFiliacion.DISCAPACIDADDESCR;
						// document.querySelector('#origen_mf_da').value = mediaFiliacion.ORIGEN;

						document.querySelector('#diaDesaparicion_da').value = mediaFiliacion.FECHADESAPARICION ? mediaFiliacion.FECHADESAPARICION : '';

						document.querySelector('#lugarDesaparicion_da').value = mediaFiliacion.LUGARDESAPARICION;
						document.querySelector('#vestimenta_mf_da').value = mediaFiliacion.VESTIMENTADESCR;

						document.querySelector('#autorizaFoto_da').value = folio.LOCALIZACIONPERSONAMEDIOS == 'S' ? 'S' : 'N';
						document.querySelector('#escolaridad_mf_da').value = mediaFiliacion.ESCOLARIDADID ? mediaFiliacion.ESCOLARIDADID : '';
						document.querySelector('#ocupacion_mf_da').value = mediaFiliacion.OCUPACIONID ? mediaFiliacion.OCUPACIONID : '';

						document.querySelector('#contextura_ceja_mf_da').value = mediaFiliacion.CONTEXTURAID ? mediaFiliacion.CONTEXTURAID : '';
						document.querySelector('#cara_forma_mf_da').value = mediaFiliacion.CARAFORMAID ? mediaFiliacion.CARAFORMAID : '';
						document.querySelector('#cara_tamano_mf_da').value = mediaFiliacion.CARATAMANOID ? mediaFiliacion.CARATAMANOID : '';
						document.querySelector('#caratez_mf_da').value = mediaFiliacion.CARATEZID ? mediaFiliacion.CARATEZID : '';
						document.querySelector('#lobulo_mf_da').value = mediaFiliacion.OREJALOBULOID ? mediaFiliacion.OREJALOBULOID : '';
						document.querySelector('#forma_oreja_mf_da').value = mediaFiliacion.OREJAFORMAID ? mediaFiliacion.OREJAFORMAID : '';
						document.querySelector('#tamano_oreja_mf_da').value = mediaFiliacion.OREJATAMANOID ? mediaFiliacion.OREJATAMANOID : '';

						document.querySelector('#hombro_tamano_mf_da').value = mediaFiliacion.HOMBROLONGITUDID ? mediaFiliacion.HOMBROLONGITUDID : '';



						document.querySelector('#escolaridad_mf_da').value = mediaFiliacion.PERSONAESCOLARIDADID ? mediaFiliacion.PERSONAESCOLARIDADID : '';

					}

					let domicilio = response.personaFisicaDomicilio;

					document.querySelector('#pfd_id_da').value = domicilio.DOMICILIOID;

					document.querySelector('#pais_pfd_da').value = domicilio.PAIS ? domicilio.PAIS : '';
					document.querySelector('#estado_pfd_da').value = domicilio.ESTADOID ? domicilio.ESTADOID : '';
					if (domicilio.ESTADOID && domicilio.MUNICIPIOID) {
						let data = {
							'estado_id': domicilio.ESTADOID
						};
						$.ajax({
							data: data,
							url: "<?= base_url('/data/get-municipios-by-estado') ?>",
							method: "POST",
							dataType: "json",
							success: function(response) {
								let municipios = response.data;
								municipios.forEach(municipio => {
									let option = document.createElement("option");
									option.text = municipio.MUNICIPIODESCR;
									option.value = municipio.MUNICIPIOID;
									document.querySelector('#municipio_pfd_da').add(option);
								});
								document.querySelector('#municipio_pfd_da').value = domicilio.MUNICIPIOID ? domicilio.MUNICIPIOID : '';
							},
							error: function(jqXHR, textStatus, errorThrown) {}
						});
					} else {
						document.querySelector('#municipio_pfd_da').value = '';
					}

					if (domicilio.ESTADOID && domicilio.MUNICIPIOID && domicilio.LOCALIDADID) {
						let data = {
							'estado_id': domicilio.ESTADOID,
							'municipio_id': domicilio.MUNICIPIOID
						};

						$.ajax({
							data: data,
							url: "<?= base_url('/data/get-localidades-by-municipio') ?>",
							method: "POST",
							dataType: "json",
							success: function(response) {
								let localidades = response.data;
								let select_localidad = document.querySelector('#localidad_pfd_da');

								localidades.forEach(localidad => {
									var option = document.createElement("option");
									option.text = localidad.LOCALIDADDESCR;
									option.value = localidad.LOCALIDADID;
									select_localidad.add(option);
								});

								select_localidad.value = domicilio.LOCALIDADID;
							},
							error: function(jqXHR, textStatus, errorThrown) {}
						});
					} else {
						document.querySelector('#localidad_pfd_da').value = '';
					}

					if (domicilio.ESTADOID && domicilio.MUNICIPIOID && domicilio.LOCALIDADID && domicilio.COLONIAID) {
						document.querySelector('#colonia_pfd_da').classList.add('d-none');
						document.querySelector('#colonia_pfd_da_select').classList.remove('d-none');
						let data = {
							'estado_id': domicilio.ESTADOID,
							'municipio_id': domicilio.MUNICIPIOID,
							'localidad_id': domicilio.LOCALIDADID
						};
						$.ajax({
							data: data,
							url: "<?= base_url('/data/get-colonias-by-estado-municipio-localidad') ?>",
							method: "POST",
							dataType: "json",
							success: function(response) {
								let select_colonia = document.querySelector('#colonia_pfd_da_select');
								let input_colonia = document.querySelector('#colonia_pfd_da');
								let colonias = response.data;

								colonias.forEach(colonia => {
									var option = document.createElement("option");
									option.text = colonia.COLONIADESCR;
									option.value = colonia.COLONIAID;
									select_colonia.add(option);
								});

								var option = document.createElement("option");
								option.text = 'OTRO';
								option.value = '0';
								select_colonia.add(option);

								select_colonia.value = domicilio.COLONIAID;
								input_colonia.value = '-';
							},
							error: function(jqXHR, textStatus, errorThrown) {}
						});
					} else {
						document.querySelector('#colonia_pfd_da').classList.remove('d-none');
						document.querySelector('#colonia_pfd_da_select').classList.add('d-none');
						var option = document.createElement("option");
						option.text = 'OTRO';
						option.value = '0';
						document.querySelector('#colonia_pfd_da_select').add(option);
						document.querySelector('#colonia_pfd_da_select').value = '0';
						document.querySelector('#colonia_pfd_da').value = domicilio.COLONIADESCR ? domicilio.COLONIADESCR : '';
					}
					document.querySelector('#cp_pfd_da').value = domicilio.CP ? domicilio.CP : '';
					document.querySelector('#calle_pfd_da').value = domicilio.CALLE ? domicilio.CALLE : '';
					document.querySelector('#exterior_pfd_da').value = domicilio.NUMEROCASA ? domicilio.NUMEROCASA : '';
					document.querySelector('#interior_pfd_da').value = domicilio.NUMEROINTERIOR ? domicilio.NUMEROINTERIOR : '';
					document.querySelector('#referencia_pfd_da').value = domicilio.REFERENCIA ? domicilio.REFERENCIA : '';

					$('#folio_persona_fisica_modal_da').modal('show');

				} else {
					Swal.fire({
						icon: 'error',
						html: 'No se encontro a la persona física',
						confirmButtonColor: '#bf9b55',
					})
				}
			}
		});
	}

	function eliminarImputadoDelito(personafisicavictima, personafisicaimputado, delitoModalidadId) {
		$.ajax({
			data: {
				'personafisicavictima': personafisicavictima,
				'personafisicaimputado': personafisicaimputado,
				'delito': delitoModalidadId,
				'folio': inputFolio.value,
				'year': year_select.value,

			},
			url: "<?= base_url('/data/delete-fisimpdelito-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {

				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Delito del imputado y árbol delicitivo eliminado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_impdelito = document.querySelectorAll('#table-delito-cometidos tr');
					tabla_impdelito.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					let fisicaImpDelito = response.fisicaImpDelito;
					llenarTablaImpDel(fisicaImpDelito);
					let tabla_arbol = document.querySelectorAll('#table-delitos-arbol tr');
					tabla_arbol.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					let relacionFisFis = response.relacionFisFis;
					llenarTablaFisFis(relacionFisFis);
				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se elimino el delito del imputado',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});

	}

	function eliminarArbolDelictivo(personafisicavictima, personafisicaimputado, delitoModalidadId, tipo) {
		$.ajax({
			data: {
				'personafisicavictima': personafisicavictima,
				'personafisicaimputado': personafisicaimputado,
				'delito': delitoModalidadId,
				'folio': inputFolio.value,
				'year': year_select.value,
				'tipo': tipo,

			},
			url: "<?= base_url('/data/delete-arbol_delictivo-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 3) {
					Swal.fire({
						title: 'Este es el ultimo registro, se eliminará el delito cometido de la denuncia',
						showDenyButton: true,
						showCancelButton: true,
						confirmButtonText: 'Aceptar',
						confirmButtonColor: '#bf9b55',
						denyButtonText: 'Cancelar',
					}).then((result) => {
						/* Read more about isConfirmed, isDenied below */
						if (result.isConfirmed) {
							eliminarImputadoDelito(personafisicavictima, personafisicaimputado, delitoModalidadId);
						}
					})
				}

				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Árbol delictivo eliminado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_arbol = document.querySelectorAll('#table-delitos-arbol tr');
					tabla_arbol.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					let relacionFisFis = response.relacionFisFis;
					llenarTablaFisFis(relacionFisFis);
					let tabla_impdelito = document.querySelectorAll('#table-delito-cometidos tr');
					tabla_impdelito.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					let fisicaImpDelito = response.fisicaImpDelito;
					llenarTablaImpDel(fisicaImpDelito);
				} else if (response.status == 0) {
					Swal.fire({
						icon: 'error',
						text: 'No se elimino el árbol delictivo',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});

	}

	function eliminarObjetosInvolucrados(objetoid) {
		$.ajax({
			data: {
				'objetoid': objetoid,
				'folio': inputFolio.value,
				'year': year_select.value,

			},
			url: "<?= base_url('/data/delete-objeto-involucrado-by-folio') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {

				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Objeto involucrado eliminado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_objetos_involucrados = document.querySelectorAll('#table-objetos-involucrados tr');
					tabla_objetos_involucrados.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});

					llenarTablaObjetosInvolucrados(response.objetos);
				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se elimino el objeto involucrado',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {}
		});

	}

	function viewObjetoInvolucrado(objetoid) {
		$('#folio_objetos_update').modal('show');
		$.ajax({
			data: {
				'objetoid': objetoid,
				'folio': inputFolio.value,
				'year': year_select.value,
			},
			url: "<?= base_url('/data/get-objeto-involucrado-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				let objeto = response.objetoInvolucrado;
				let objeto_sub = response.objetosub;
				document.querySelector('#objeto_id').value = objeto.OBJETOID ? objeto.OBJETOID : '';
				document.querySelector('#situacion_objeto_update').value = objeto.SITUACION ? objeto.SITUACION : '';
				document.querySelector('#objeto_update_clasificacion').value = objeto.CLASIFICACIONID ? objeto.CLASIFICACIONID : '';
				// document.querySelector('#objeto_update_subclasificacion').value = objeto_sub.OBJETOSUBCLASIFICACIONID ? objeto_sub.OBJETOSUBCLASIFICACIONID : '';
				$('#objeto_update_subclasificacion').empty();
				let select_objeto_update_subclasificacion = document.querySelector("#objeto_update_subclasificacion");

				objeto_sub.forEach(objeto_sub => {
					const option = document.createElement('option');
					option.value = objeto_sub.SUBCLASIFICACIONID;
					option.text = objeto_sub.OBJETOSUBCLASIFICACIONDESCR;
					select_objeto_update_subclasificacion.add(option, null);
				});

				document.querySelector('#marca_objeto_update').value = objeto.MARCA ? objeto.MARCA : '';
				document.querySelector('#serie_objeto_update').value = objeto.NUMEROSERIE ? objeto.CANTIDAD : '';
				document.querySelector('#cantidad_objeto_update').value = objeto.CANTIDAD ? objeto.CANTIDAD : '';
				document.querySelector('#valor_objeto_update').value = objeto.VALOR ? objeto.VALOR : '';
				document.querySelector('#tipo_moneda_update').value = objeto.TIPOMONEDAID ? objeto.TIPOMONEDAID : '';
				document.querySelector('#descripcion_detallada_update').value = objeto.DESCRIPCIONDETALLADA ? objeto.DESCRIPCIONDETALLADA : '';
				document.querySelector('#propietario_update').value = objeto.PERSONAFISICAIDPROPIETARIO ? objeto.PERSONAFISICAIDPROPIETARIO : '';
				document.querySelector('#participa_estado_objeto_update').value = objeto.PARTICIPAESTADO ? objeto.PARTICIPAESTADO : '';

			}
		});
	}

	function llenarTablaPersonas(personas) {
		for (let i = 0; i < personas.length; i++) {
			var btn = `<button type='button'  class='btn btn-primary' onclick='viewPersonaFisica(${personas[i].PERSONAFISICAID})'><i class='fas fa-eye'></i></button>`

			var fila =
				`<tr id="row${i}">` +
				`<td class="text-center">${personas[i].NOMBRE}</td>` +
				`<td class="text-center">${personas[i].PERSONACALIDADJURIDICADESCR}</td>` +
				`<td class="text-center">${btn}</td>` +
				`</tr>`;

			$('#table-personas tr:first').after(fila);
			$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
			var nFilas = $("#personas tr").length;
			$("#adicionados").append(nFilas - 1);
		}
	}

	function llenarTablaFisFis(relacionFisFis) {
		for (let i = 0; i < relacionFisFis.length; i++) {
			var btn = `<button type='button'  class='btn btn-primary' onclick='eliminarArbolDelictivo(${relacionFisFis[i].PERSONAFISICAIDVICTIMA},${relacionFisFis[i].PERSONAFISICAIDIMPUTADO},${relacionFisFis[i].DELITOMODALIDADID}, 0)'><i class='fa fa-trash'></i></button>`

			var fila =
				`<tr id="row${i}">` +
				`<td class="text-center">${relacionFisFis[i].NOMBREI}</td>` +
				`<td class="text-center">${relacionFisFis[i].DELITOMODALIDADDESCR}</td>` +
				`<td class="text-center">${relacionFisFis[i].NOMBREV}</td>` +
				`<td class="text-center">${btn}</td>` +
				`</tr>`;

			$('#table-delitos-arbol tr:first').after(fila);
			$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
			var nFilas = $("#delitos tr").length;
			$("#adicionados").append(nFilas - 1);
		}
	}

	function llenarTablaObjetosInvolucrados(objetos) {
		for (let i = 0; i < objetos.length; i++) {
			var btnEliminar = `<button type='button'  class='btn btn-primary' onclick='eliminarObjetosInvolucrados(${objetos[i].OBJETOID})'><i class='fa fa-trash'></i></button>`
			var btnEditar = `<button type='button'  class='btn btn-primary' onclick='viewObjetoInvolucrado(${objetos[i].OBJETOID})'><i class='fa fa-eye'></i></button>`
			var fila =
				`<tr id="row${i}">` +
				`<td class="text-center" value="${objetos[i].CLASIFICACIONID}">${objetos[i].OBJETOCLASIFICACIONDESCR}</td>` +
				`<td class="text-center" value="${objetos[i].SUBCLASIFICACIONID}">${objetos[i].OBJETOSUBCLASIFICACIONDESCR}</td>` +
				`<td class="text-center">${btnEliminar}</td>` +
				`<td class="text-center">${btnEditar}</td>` +
				`</tr>`;

			$('#table-objetos-involucrados tr:first').after(fila);
			$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
			var nFilas = $("#objetos-involucrados tr").length;
			$("#adicionados").append(nFilas - 1);
		}
	}
	//Funcion para iterar la tabla de archivos externos, recibe por parametro la informacion de los archivos

	function llenarTablaArchivosExternos(archivos) {
		for (let i = 0; i < archivos.length; i++) {

			if (archivos[i].EXTENSION == 'pdf' || archivos[i].EXTENSION == 'doc') {
				var img = `<a id="downloadArchivo" download=""><img src='<?= base_url() ?>/assets/img/file.png'));'  width="50px" height="50px"></img></a>`;


			} else {
				var img = `<a id="downloadArchivo" download=""><img src='${archivos[i].ARCHIVO}');' width="50px" height="50px"></img></a>`;

			}
			var btnEliminarArchivo =
				`<button type='button' id="deleteArchivobtn" class='btn btn-primary' onclick='deleteArchivo(${archivos[i].FOLIOARCHIVOID})'><i class='fas fa-trash'></i></button>`;
			var fila =
				`<tr id="row${i}">` +
				`<td class="text-center" value="${archivos[i].FOLIOARCHIVOID}">${archivos[i].ARCHIVODESCR}</td>` +
				`<td class="text-center" value="${archivos[i].FOLIOARCHIVOID}">${img}</td>` +
				`<td class="text-center">${btnEliminarArchivo}</td>` +

				`</tr>`;

			$('#table-archivo tr:first').after(fila);
			$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
			var nFilas = $("#archivo tr").length;
			$("#adicionados").append(nFilas - 1);

			///Funcion de descarga de archivos
			document.querySelector('#downloadArchivo').setAttribute('href', archivos[i].ARCHIVO);
			document.querySelector('#downloadArchivo').setAttribute('download', archivos[i].FOLIOID + '_' +
				archivos[i].ANO + '_' + archivos[i].FOLIOARCHIVOID + '.' + archivos[i].EXTENSION);
		}
	}
	//Funcion para eliminar un archivo externo, recibe por parametro el id del archivo
	function deleteArchivo(archivoid) {
		$.ajax({
			data: {
				'archivoid': archivoid,
				'folio': inputFolio.value,
				'year': year_select.value,
			},
			url: "<?= base_url('/data/delete-archivo-by-id') ?>",
			method: "POST",
			dataType: "json",
			beforeSend: function() {
				document.getElementById('deleteArchivobtn').disabled = true;

			},
			success: function(response) {
				if (response.status == 1) {
					const archivos = response.archivos.archivosexternos;
					//llena la tabla de archivos externos
					Swal.fire({
						icon: 'success',
						text: 'Archivo eliminado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_archivos = document.querySelectorAll(
						'#table-archivo tr');
					tabla_archivos.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaArchivosExternos(archivos);
					document.getElementById('deleteArchivobtn').disabled = false;

				} else {
					document.getElementById('deleteArchivobtn').disabled = false;

				}
			}
		});

	}

	function llenarTablaImpDel(impDelito) {
		for (let i = 0; i < impDelito.length; i++) {
			// var btn = `<button type='button'  class='btn btn-primary' onclick='eliminarImputadoDelito(${impDelito[i].PERSONAFISICAID},${impDelito[i].DELITOMODALIDADID})'><i class='fa fa-trash'></i></button>`

			var fila =
				`<tr id="row${i}">` +
				`<td class="text-center" value="${impDelito[i].PERSONAFISICAID}">${impDelito[i].NOMBRE}</td>` +
				`<td class="text-center" value="${impDelito[i].DELITOMODALIDADID}">${impDelito[i].DELITOMODALIDADDESCR}</td>` +
				// `<td class="text-center">${btn}</td>` +
				`</tr>`;

			$('#table-delito-cometidos tr:first').after(fila);
			$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
			var nFilas = $("#delito-cometidos tr").length;
			$("#adicionados").append(nFilas - 1);
		}
	}

	function llenarTablaVehiculos(vehiculos) {
		for (let i = 0; i < vehiculos.length; i++) {
			var btnVehiculo = `<button type='button' class='btn btn-primary' onclick='viewVehiculo(${vehiculos[i].VEHICULOID})'><i class='fas fa-eye'></i></button>`;
			var btnEliminarVehiculo =
				`<button type='button' class='btn btn-primary' onclick='deleteVehiculo(${vehiculos[i].VEHICULOID})'><i class='fas fa-trash'></i></button>`;
			var fila3 =
				`<tr id="row${i}">` +
				`<td class="text-center">${vehiculos[i].PLACAS?vehiculos[i].PLACAS:'DESCONOCIDO'}</td>` +
				`<td class="text-center">${vehiculos[i].NUMEROSERIE?vehiculos[i].NUMEROSERIE:'DESCONOCIDO'}</td>` +
				`<td class="text-center">${btnVehiculo} ${btnEliminarVehiculo}</td>` +
				`</tr>`;

			$('#table-vehiculos tr:first').after(fila3);
			$("#adicionados").text("");
			var nFilas = $("#vehiculos tr").length;
			$("#vehiculos").append(nFilas - 1);
		}
	}

	function viewVehiculo(id) {
		$.ajax({
			data: {
				'id': id,
				'folio': inputFolio.value,
				'year': year_select.value,
			},
			url: "<?= base_url('/data/get-persona-vehiculo-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					const vehiculo = response.vehiculo;
					const distribuidorVehiculo = response.distribuidorVehiculo;
					const marcaVehiculo = response.marcaVehiculo;
					const lineaVehiculo = response.lineaVehiculo;
					const versionVehiculo = response.versionVehiculo;
					const color = response.color;
					const tipov = response.tipov;
					document.querySelector('#vehiculoid').value = id;

					document.querySelector('#tipo_placas_vehiculo_da').value = vehiculo.TIPOPLACA ? vehiculo.TIPOPLACA : '';
					document.querySelector('#placas_vehiculo_da').value = vehiculo.PLACAS ? vehiculo.PLACAS : '';
					document.querySelector('#estado_vehiculo_da_ad').value = vehiculo.ESTADOIDPLACA ? vehiculo.ESTADOIDPLACA : '';
					document.querySelector('#color_tapiceria_vehiculo_da').value = vehiculo.SEGUNDOCOLORID ? vehiculo.SEGUNDOCOLORID : '';
					document.querySelector('#modelo_vehiculo_da').value = vehiculo.ANOVEHICULO ? vehiculo.ANOVEHICULO : '';

					document.querySelector('#situacion_vehiculo_den').value = vehiculo.SITUACION ?
						vehiculo.SITUACION : '';
					document.querySelector('#propietario_vehiculo_den').value = vehiculo.PERSONAFISICAIDPROPIETARIO ?
						vehiculo.PERSONAFISICAIDPROPIETARIO : '';
					if (vehiculo.ESTADOEXTRANJEROIDPLACA) {
						document.getElementById("estado_extranjero_vehiculo_da_ad").style.display = "block";
						document.getElementById("estado_vehiculo_da_ad").style.display = "none";
						document.querySelector('#estado_extranjero_vehiculo_da_ad').value = vehiculo.ESTADOEXTRANJEROIDPLACA ? vehiculo.ESTADOEXTRANJEROIDPLACA : '';
					}
					document.querySelector('#serie_vehiculo_da').value = vehiculo.NUMEROSERIE ? vehiculo.NUMEROSERIE : '';
					document.querySelector('#num_chasis_vehiculo_da').value = vehiculo.NUMEROCHASIS ? vehiculo.NUMEROCHASIS : '';
					document.querySelector('#marca_ad_exacta_da').value = vehiculo.MARCADEXAC ? vehiculo.MARCADEXAC : '';

					document.querySelector('#distribuidor_vehiculo_da_ad').value = vehiculo.VEHICULODISTRIBUIDORID ? vehiculo.VEHICULODISTRIBUIDORID : '';

					document.querySelector('#transmision_vehiculo_da').value = vehiculo.TRANSMISION ? vehiculo.TRANSMISION : '';
					document.querySelector('#traccion_vehiculo_da').value = vehiculo.TRACCION ? vehiculo.TRACCION : '';
					document.querySelector('#seguro_vigente_vehiculo_da').value = vehiculo.SEGUROVIGENTE ? vehiculo.SEGUROVIGENTE : '';
					document.querySelector('#servicio_vehiculo_da_ad').value = vehiculo.VEHICULOSERVICIOID ? vehiculo.VEHICULOSERVICIOID : '';

					if (vehiculo.TIPOID == null) {
						document.querySelector('#tipo_vehiculo_da').value = "";
					} else {
						document.querySelector('#tipo_vehiculo_da').value = tipov.VEHICULOTIPOID;
					}
					document.querySelector('#color_vehiculo_da').value = color ? color.VEHICULOCOLORID : '';
					document.querySelector('#description_vehiculo_da').value = vehiculo.SENASPARTICULARES ? vehiculo.SENASPARTICULARES : '';

					if (vehiculo.FOTO) {
						extension = (((vehiculo.FOTO.split(';'))[0]).split('/'))[1];
						document.querySelector('#foto_vehiculo_da').setAttribute('src', vehiculo.FOTO);
						document.querySelector('#downloadImage').setAttribute('href', vehiculo.FOTO);
						document.querySelector('#downloadImage').setAttribute('download', vehiculo.FOLIOID + '_' + vehiculo.ANO + '_' + vehiculo.VEHICULOID + '_vehiculo.' + extension);
						document.querySelector('#downloadImage').classList.remove('d-none');
					} else {
						document.querySelector('#foto_vehiculo_da').setAttribute('src', '<?= base_url() ?>/assets/img/no_image.jpeg');
						document.querySelector('#downloadImage').setAttribute('href', '');
						document.querySelector('#downloadImage').setAttribute('download', '');
						document.querySelector('#downloadImage').classList.add('d-none');
					}
					if (vehiculo.DOCUMENTO) {
						extension = (((vehiculo.DOCUMENTO.split(';'))[0]).split('/'))[1];
						if (extension == 'pdf' || extension == 'doc') {
							document.querySelector('#doc_vehiculo_da').setAttribute('src', '<?= base_url() ?>/assets/img/file.png');
						} else {
							document.querySelector('#doc_vehiculo_da').setAttribute('src', vehiculo.DOCUMENTO);
						}
						document.querySelector('#downloadDoc').setAttribute('href', vehiculo.DOCUMENTO);
						document.querySelector('#downloadDoc').setAttribute('download', vehiculo.FOLIOID + '_' + vehiculo.ANO + '_' + vehiculo.VEHICULOID + '_documento.' + extension);
						document.querySelector('#downloadDoc').classList.remove('d-none');
					} else {
						document.querySelector('#doc_vehiculo_da').setAttribute('src', '<?= base_url() ?>/assets/img/no_image.jpeg');
						document.querySelector('#downloadDoc').setAttribute('href', '');
						document.querySelector('#downloadDoc').setAttribute('download', '');
						document.querySelector('#downloadDoc').classList.add('d-none');
					}

					if (marcaVehiculo) {
						let select_marca = document.querySelector('#marca_ad_da');
						clearSelect(select_marca);
						const option_marca = document.createElement('option');
						option_marca.value = marcaVehiculo.VEHICULOMARCAID;
						option_marca.text = marcaVehiculo.VEHICULOMARCADESCR;
						select_marca.add(option_marca, null);
					}
					if (lineaVehiculo) {
						let select_linea = document.querySelector('#linea_vehiculo_da_ad');
						clearSelect(select_linea);

						const option_modelo = document.createElement('option');
						option_modelo.value = lineaVehiculo.VEHICULOMODELOID;
						option_modelo.text = lineaVehiculo.VEHICULOMODELODESCR;
						select_linea.add(option_modelo, null);
					}
					if (versionVehiculo) {
						let select_version = document.querySelector('#version_vehiculo_da_ad');
						clearSelect(select_version);

						const option_version = document.createElement('option');
						option_version.value = versionVehiculo.VEHICULOVERSIONID;
						option_version.text = versionVehiculo.VEHICULOVERSIONDESCR;
						select_version.add(option_version, null);
					}
					document.querySelector('#marca_ad_da').value = vehiculo.MARCAID ? vehiculo.MARCAID : '';
					document.querySelector('#linea_vehiculo_da_ad').value = vehiculo.MODELOID ? vehiculo.MODELOID : '';
					document.querySelector('#version_vehiculo_da_ad').value = vehiculo.VEHICULOVERSIONID ? vehiculo.VEHICULOVERSIONID : '';
					$('#folio_vehiculo_modal_da').modal('show');
				} else {
					Swal.fire({
						icon: 'error',
						html: 'No se encontró el vehículo.',
						confirmButtonColor: '#bf9b55',
					});
				}
			}
		});
	}

	function deleteVehiculo(vehiculoid) {
		$.ajax({
			data: {
				'vehiculoid': vehiculoid,
				'folio': inputFolio.value,
				'year': year_select.value,
			},
			url: "<?= base_url('/data/delete-vehiculo-by-id') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					const vehiculos = response.vehiculos;
					Swal.fire({
						icon: 'success',
						text: 'Vehículo eliminado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_vehiculo = document.querySelectorAll('#table-vehiculos tr');
					tabla_vehiculo.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaVehiculos(vehiculos);
				}
			}
		});
	}

	function actualizarVehiculo() {
		var packetData = new FormData();

		packetData.append("subirDoc", $("#subirDocDa")[0].files[0]);
		packetData.append("subirFotoV", $("#subirFotoVDa")[0].files[0]);

		packetData.append("folio", document.querySelector('#folio').value);
		packetData.append("year", document.querySelector('#year').value);

		packetData.append("tipo_vehiculo", document.querySelector('#tipo_vehiculo_da').value);
		packetData.append("color_vehiculo", document.querySelector('#color_vehiculo_da').value);
		packetData.append("tipo_placas_vehiculo", document.querySelector('#tipo_placas_vehiculo_da').value);
		packetData.append("placas_vehiculo", document.querySelector('#placas_vehiculo_da').value);
		packetData.append("estado_vehiculo_ad", document.querySelector('#estado_vehiculo_da_ad').value);
		packetData.append("estado_extranjero_vehiculo_ad", document.querySelector('#estado_extranjero_vehiculo_da_ad').value);
		packetData.append("serie_vehiculo", document.querySelector('#serie_vehiculo_da').value);
		packetData.append("num_chasis_vehiculo", document.querySelector('#num_chasis_vehiculo_da').value);
		packetData.append("distribuidor_vehiculo_ad", document.querySelector('#distribuidor_vehiculo_da_ad').value);
		packetData.append("marca_ad", document.querySelector('#marca_ad_da').value);
		packetData.append("linea_vehiculo_ad", document.querySelector('#linea_vehiculo_da_ad').value);
		packetData.append("version_vehiculo_ad", document.querySelector('#version_vehiculo_da_ad').value);
		packetData.append("transmision_vehiculo", document.querySelector('#transmision_vehiculo_da').value);
		packetData.append("traccion_vehiculo", document.querySelector('#traccion_vehiculo_da').value);
		packetData.append("seguro_vigente_vehiculo", document.querySelector('#seguro_vigente_vehiculo_da').value);
		packetData.append("servicio_vehiculo_ad", document.querySelector('#servicio_vehiculo_da_ad').value);
		packetData.append("description_vehiculo", document.querySelector('#description_vehiculo_da').value);
		packetData.append("modelo_vehiculo", document.querySelector('#modelo_vehiculo_da').value);
		packetData.append("color_tapiceria_vehiculo", document.querySelector('#color_tapiceria_vehiculo_da').value);
		packetData.append("marca_exacta", document.querySelector('#marca_ad_exacta_da').value);
		packetData.append("propietario_vehiculo", document.querySelector('#propietario_vehiculo_den').value);
		packetData.append("situacion", document.querySelector('#situacion_vehiculo_den').value);
		packetData.append("vehiculoid", document.querySelector('#vehiculoid').value);


		$.ajax({
			url: "<?= base_url('/data/update-vehiculo-by-id') ?>",
			method: "POST",
			dataType: 'json',
			contentType: false,
			data: packetData,
			processData: false,
			cache: false,
			success: function(response) {
				if (response.status == 1) {
					const vehiculos = response.vehiculos;
					Swal.fire({
						icon: 'success',
						text: 'Vehículo actualizado correctamente',
						confirmButtonColor: '#bf9b55',
					});
					let tabla_vehiculo = document.querySelectorAll('#table-vehiculos tr');
					tabla_vehiculo.forEach(row => {
						if (row.id !== '') {
							row.remove();
						}
					});
					llenarTablaVehiculos(vehiculos);
					document.getElementById('subirFotoV').value = '';
					document.getElementById('subirDoc').value = '';
					document.getElementById("form_vehiculo_da").reset();

					$('#folio_vehiculo_modal_da').modal('hide');

				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se actualizó la información del vehículo',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus);
			}
		});
	}

	function updateFolio() {
		const data = {
			'folio': document.querySelector('#folio').value,
			'year': document.querySelector('#year').value,
			'municipio_delito': document.querySelector('#municipio_delito_da').value,
			'localidad_delito': document.querySelector('#localidad_delito_da').value,
			'colonia_delito': document.querySelector('#colonia_delito_da').value,
			'colonia_delito_select': document.querySelector('#colonia_delito_select_da').value,
			'calle_delito': document.querySelector('#calle_delito_da').value,
			'exterior_delito': document.querySelector('#exterior_delito_da').value,
			'interior_delito': document.querySelector('#interior_delito_da').value,
			'lugar_delito': document.querySelector('#lugar_delito_da').value,
			'fecha_delito': document.querySelector('#fecha_delito_da').value,
			'hora_delito': document.querySelector('#hora_delito_da').value,
			'notas': document.querySelector('#notas_da').value,
			'autoriza_foto': document.querySelector('#autorizaFoto_da').value

		};
		$.ajax({
			data: data,
			url: "<?= base_url('/data/update-denuncia-by-id-anonima') ?>",
			method: "POST",
			dataType: "json",
			success: function(response) {
				if (response.status == 1) {
					Swal.fire({
						icon: 'success',
						text: 'Denuncia actualizada correctamente',
						confirmButtonColor: '#bf9b55',
					});
					$('#update_denuncia').modal('hide');

				} else {
					Swal.fire({
						icon: 'error',
						text: 'No se actualizó la denuncia',
						confirmButtonColor: '#bf9b55',
					});
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				Swal.fire({
					icon: 'error',
					text: 'No se actualizó la denuncia',
					confirmButtonColor: '#bf9b55',
				});
			}
		});
	}

	function pulsar(e) {
		if (e.which === 13 && !e.shiftKey) {
			e.preventDefault();
			return false;
		}
	}

	function contarCaracteresDa(obj) {
		var maxLength = 1000;
		var strLength = obj.value.length;
		charRemain = (maxLength - strLength);

		if (charRemain < 0) {
			document.getElementById("numCaracterDa").innerHTML = '<span style="color: red;">Has superado el límite de ' + maxLength + ' caracteres </span>';
		} else {
			document.getElementById("numCaracterDa").innerHTML = charRemain + ' caracteres restantes';
		}
	}
</script>


<?php $this->endSection() ?>