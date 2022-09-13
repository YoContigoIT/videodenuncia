<form id="form_asignar_arbol_delictual_insert" action="" method="post" class="row p-0 m-0 needs-validation" novalidate>

	<div class="col-12">
		<p class="font-weight-bold text-center mt-3">ÁRBOL DELICTUAL</p>
	</div>
	<hr>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="imputado_I" class="form-label font-weight-bold">Imputado</label>
		<select class="form-control" id="imputado_I" name="imputado_I" required>
			<option selected value="" disabled></option>

			<?php foreach ($body_data->imputados as $index => $imputado) { ?>
				
				<option value="<?= $imputado->PERSONAFISICAID ?>"> <?= $imputado->NOMBRE . ' ' . $imputado->PRIMERAPELLIDO ?> </option>
			<?php } ?>
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="delito_cometido" class="form-label font-weight-bold">Delito cometido</label>
		<select class="form-control" id="delito_cometido" name="delito_cometido" required>
			<option selected value="" disabled></option>
			
		</select>
	</div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
		<label for="victima_ofendido" class="form-label font-weight-bold">Victima / Ofendido</label>
		<select class="form-control" id="victima_ofendido" name="victima_ofendido" required>
			<option selected value="" disabled></option>
			<?php foreach ($body_data->victimas as $index => $victima) { ?>
				
				<option value="<?= $victima->PERSONAFISICAID ?>"> <?= $victima->NOMBRE . ' ' . $victima->PRIMERAPELLIDO ?> </option>
			<?php } ?>
		</select>
	</div>

	<div class="col-12 mb-3 text-center">
		<button type="submit" id="insertArbol" name="insertArbol" class="btn btn-primary font-weight-bold">AGREGAR ÁRBOL DELICTUAL</button>
	</div>

</form>