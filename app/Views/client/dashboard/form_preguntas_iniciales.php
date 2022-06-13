<div class="row">
	<div class="col-12 mb-3">
		<label for="es_menor" class="form-label fw-bold input-required">¿La victima u ofendido del delito es menor de edad?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="es_menor" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="es_menor" value="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3 d-none" id="eres_tu">
		<label for="eres_tu" class="form-label fw-bold input-required">¿Eres tú el menor de edad?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="eres_tu" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="eres_tu" value="NO" checked required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3 d-none" id="es_mayor">
		<label for="es_tercera_edad" class="form-label fw-bold input-required">¿La victima u ofendido es de la tercera edad?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="es_tercera_edad" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="es_tercera_edad" value="NO" required checked>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3">
		<label for="tiene_discapacidad" class="form-label fw-bold input-required">¿La victima u ofendido del delito tiene alguna discapacidad?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="tiene_discapacidad" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="tiene_discapacidad" value="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3">
		<label for="fue_con_arma" class="form-label fw-bold input-required">¿El delito a denuncias fue cometido con arma de fuego, arma blanca u objeto contundente?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="fue_con_arma" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="fue_con_arma" value="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3">
		<label for="lesiones" class="form-label fw-bold input-required">¿Tienes lesiones?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lesiones" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lesiones" value="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3 d-none" id="lesiones_visibles_form">
		<label for="lesiones_visibles" class="form-label fw-bold input-required">¿Las lesiones son visibles?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lesiones_visibles" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lesiones_visibles" value="NO" checked required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12 mb-3">
		<label for="esta_desaparecido" class="form-label fw-bold input-required">¿La victima u ofendido se encuentra desaparecido?</label>
		<br>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="esta_desaparecido" value="SI" required>
			<label class="form-check-label" for="flexRadioDefault1">SI</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="esta_desaparecido" value="NO" required>
			<label class="form-check-label" for="flexRadioDefault2">NO</label>
		</div>
	</div>
	<div class="col-12">
		<div class="alert alert-warning text-center fw-bold d-none" id="menor" role="alert">
			Para continuar debes estar acompañado por un adulto.
		</div>
	</div>
</div>



<script>
	let radiosMenor = document.querySelectorAll('input[name="es_menor"]');
	let radiosDesaparecido = document.querySelectorAll('input[name="esta_desaparecido"]');
	let radiosLesiones = document.querySelectorAll('input[name="lesiones"]');

	radiosMenor.forEach((radio) => {
		radio.addEventListener('click', (e) => {
			if (e.target.value === 'SI') {
				document.getElementById('eres_tu').classList.remove('d-none');
				document.getElementById('es_mayor').classList.add('d-none');
				document.getElementById('menor').classList.remove('d-none');
			} else {
				document.getElementById('eres_tu').classList.add('d-none');
				document.getElementById('es_mayor').classList.remove('d-none');
				document.getElementById('menor').classList.add('d-none');
			}
		})
	});

	radiosDesaparecido.forEach((radio) => {
		radio.addEventListener('click', (e) => {
			if (e.target.value === 'SI') {
				document.querySelector('#delito').value = 'LOCALIZACIÓN DE PERSONA';
			} else {
				document.querySelector('#delito').value = '';
			}
		})
	});

	radiosLesiones.forEach((radio) => {
		radio.addEventListener('click', (e) => {
			if (e.target.value === 'SI') {
				document.querySelector('#lesiones_visibles_form').classList.remove('d-none');
			} else {
				document.querySelector('#lesiones_visibles_form').classList.add('d-none');
			}
		})
	});
	
</script>
