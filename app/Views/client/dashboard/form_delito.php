<div class="row">
	<h3 class="fw-bold text-center text-blue pb-3">Datos del delito</h3>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="delito-text" class="form-label fw-bold input-required">Delito:</label>
		<select class="form-select" id="delito" name="delito" required autofocus>
			<option selected disabled value="">Elige el delito</option>
			<option value="0">ABUSO DE AUTORIDAD</option>
			<option value="1">ABUSO DE CONFIANZA</option>
			<option value="2">ABUSO DE RETENCIÓN</option>
			<option value="3">ABUSO SEXUAL</option>
			<option value="4">AMENAZAS - EJECUTADAS CON ARMA DE FUEGO, ARMA BLANCA U OBJETO CONTUNDENTE.</option>
			<option value="5">ALLANAMIENTO DE MORADA, EJECUTADO CON VIOLENCIA.</option>
			<option value="6">ATAQUES A LA VÍAS DE COMUNICACIÓN Y A LOS MEDIOS DE TRANSPORTE.</option>
			<option value="7">BIGAMIA</option>
			<option value="8">COBRANZA ILEGITIMA.</option>
			<option value="9">CORRUPCIÓN</option>
			<option value="10">DAÑO EN PROPIEDAD AJENA</option>
			<option value="11">DAÑO EN PROPIEDAD AJENA AGRAVADO POR INCENDIO</option>
			<option value="12">DAÑO EN PROPIEDAD AJENA AGRAVADO POR INUNDACIÓN</option>
			<option value="13">DAÑO EN PROPIEDAD AJENA AGRAVADO POR EXPLOSIÓN</option>
			<option value="14">DAÑO EN PROPIEDAD AJENA CULPOSO</option>
			<option value="15">DELITOS CONTRA EL AMBIENTE</option>
			<option value="16">DELITOS CONTRA LA INTIMIDAD Y LA IMAGEN</option>
			<option value="17">DELITOS CONTRA INVIOLABILIDAD DEL SECRETO Y DE LOS SISTEMAS Y EQUIPO DE COMPUTO Y PROTECCIÓN DE LOS DATOS PERSONALES</option>
			<option value="18">DELITOS DE ABOGADOS</option>
			<option value="19">DELITOS ELECTORALES</option>
			<option value="20">DESPOJO, EJECUTADO CON VIOLENCIA.</option>
			<option value="21">EXTORSIÓN</option>
			<option value="22">FALSEDAD ANTE LAS AUTORIDADES</option>
			<option value="23">FALSIFICACIÓN DE DOCUMENTOS</option>
			<option value="24">FALSIFICAR SELLOS, MARCAS, LLAVE U OTROS OBJETOS.</option>
			<option value="25">FRAUDE</option>
			<option value="26">FRAUDE PROCESAL</option>
			<option value="27">HOSTIGAMIENTO</option>
			<option value="28">HOSTIGAMIENTO SEXUAL</option>
			<option value="29">INCESTO</option>
			<option value="30">INCUMPLIMIENTO DE OBLIGACIONES DE ASISTENCIA FAMILIAR</option>
			<option value="31">INHUMACIÓN Y EXHUMACIÓN DE CADÁVERES</option>
			<option value="32">LESIONES (NAC)</option>
			<option value="33">LESIONES CAUSADAS POR ANIMAL</option>
			<option value="34">LESIONES POR CULPA</option>
			<option value="35">LOCALIZACIÓN DE PERSONA</option>
			<option value="36">MALTRATO O CRUELDAD ANIMAL</option>
			<option value="37">OMISIÓN DE CUIDADO</option>
			<option value="38">PELIGRO DE CONTAGIO DE SALUD</option>
			<option value="39">PERSONA DESAPARECIDA</option>
			<option value="40">PORNOGRAFÍA DE PERSONA MENOR DE 18 AÑOS</option>
			<option value="41">QUEBRANTAMIENTO DE SELLOS</option>
			<option value="42">RECEPCIÓN U OCULTACIÓN DE BIENES PRODUCTO DE UN DELITO</option>
			<option value="43">RESPONSABILIDAD MÉDICA Y TÉCNICA</option>
			<option value="44">ROBO</option>
			<option value="45">ROBO CALIFICADO A CASA HABITACIÓN</option>
			<option value="46">ROBO CALIFICADO A LUGAR CERRADO</option>
			<option value="47">ROBO CALIFICADO DE DEPENDIENTE</option>
			<option value="48">ROBO CON VIOELENCIA</option>
			<option value="49">ROBO DE VEHÍCULO</option>
			<option value="50">ROBO DE VEHÍCULO CON VIOLENCIA</option>
			<option value="51">SUSTRACCIÓN DE MENORES</option>
			<option value="52">USO DE DOCUMENTOS FALSOS</option>
			<option value="53">USURPACIÓN DE FUNCIONES PÚBLICAS</option>
			<option value="54">USURPACIÓN DE PROFESIONES</option>
			<option value="55">SUPLANTACIÓN, USURPACIÓN DE IDENTIDAD.</option>
			<option value="56">VIOLACIÓN DE CORRESPONDENCIA</option>
			<option value="57">VIOLENCIA FAMILIAR</option>
		</select>
		<div class="invalid-feedback">
			Selecciona el delito
		</div>
	</div>

	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="municipio" class="form-label fw-bold input-required">Municipio:</label>
		<select class="form-select" id="municipio" name="municipio" required>
			<option selected disabled value="">Elige el municipio</option>
			<option value="1">TIJUANA</option>
			<option value="2">PLAYAS DE ROSARITO</option>
			<option value="3">TECATE</option>
			<option value="4">MEXICALI</option>
			<option value="5">ENSENADA</option>
			<option value="6">SAN FELIPE</option>
			<option value="7">SAN QUINTIN</option>
		</select>
		<div class="invalid-feedback">
			Por favor, selecciona un municipio.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="calle" class="form-label fw-bold input-required">Calle o avenida del delito:</label>
		<input type="text" class="form-control" id="calle" name="calle" required>
		<div class="invalid-feedback">
			Por favor, anexa una calle o avenida.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="exterior" class="form-label fw-bold input-required">No. exterior del delito:</label>
		<input type="text" class="form-control" id="exterior" name="exterior" required>
		<div class="invalid-feedback">
			Por favor, anexa un numero exterior del delito.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="interior" class="form-label fw-bold">No. interior del delito:</label>
		<input type="text" class="form-control" id="interior" name="interior">
		<div class="invalid-feedback">
			Por favor, anexa un numero interior del delito.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="colonia-text" class="form-label fw-bold input-required">Colonia del delito:</label>
		<select class="form-select" id="colonia" name="colonia" required>
			<option selected disabled value="">Elige la colonia</option>
			<?php foreach ($body_data->colonias as $index => $colonia) { ?>
				<option value="<?= $colonia->COLONIAID ?>"> <?= $colonia->COLONIADESCR ?> </option>
			<?php } ?>
		</select>
		<div class="invalid-feedback">
			Por favor, selecciona una colonia.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="lugar" class="form-label fw-bold input-required">Lugar del delito:</label>
		<select class="form-select" id="lugar" name="lugar" required>
			<option selected disabled value="">Elige el lugar del delito</option>
			<option value="1">Instituciones privadas</option>
			<option value="2">Centro escolar</option>
			<option value="3">Centro recreativo</option>
		</select>
		<div class="invalid-feedback">
			Por favor, selecciona un lugar.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="clasificacion" class="form-label fw-bold">Clasificación del lugar</label>
		<input type="text" class="form-control" id="clasificacion" name="clasificacion">
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="fecha" class="form-label fw-bold input-required">Fecha y hora del delito:</label>
		<input type="datetime-local" class="form-control" id="fecha" name="fecha" required>
		<div class="invalid-feedback">
			Por favor, anexa una fecha y hora.
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="responsable" class="form-label fw-bold input-required">¿Identifica al responsable del delito?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="responsable" id="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="responsable" id="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
</div>