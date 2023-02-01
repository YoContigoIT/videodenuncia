<?= $this->extend('admin/templates/dashboard_template') ?>
<?= $this->section('title') ?>
<?php echo $header_data->title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center mb-4">
				<h1 class="mb-4 text-center font-weight-bold">Sesiones Activas</h1>
			</div>
			<div class="col-12">
				<div class="card shadow border-0" style="overflow-x:auto;">
					<div class="card-body">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios" aria-selected="true">Usuarios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="denunciantes-tab" data-toggle="tab" href="#denunciantes" role="tab" aria-controls="denunciantes" aria-selected="false">Denunciantes</a>
							</li>

						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
								<form id="form_cerrar_usuario" class="needs-validation" action="<?= base_url() ?>/admin/dashboard/cerrar_sesiones_general" method="POST" novalidate>

									<table id="table-usuarios" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th class="text-center">USUARIO</th>
												<th class="text-center">NAVEGADOR </th>
												<th class="text-center">SISTEMA OPERATIVO</th>
												<th class="text-center">FECHA INICIO</th>
												<th class="text-center"></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($body_data->sesionesAdmin->result as $index => $sesionesAdmin) { ?>
												<input hidden id="id_usuario" name="id_usuario" value="<?= $sesionesAdmin->ID_USUARIO ?>"> </input>
												<tr>
													<td class="text-center"><?= $sesionesAdmin->NOMBRE . ' ' . $sesionesAdmin->APELLIDO_PATERNO ?></td>
													<td class="text-center"><?= $sesionesAdmin->AGENTE_HTTP ?></td>
													<td class="text-center"><?= $sesionesAdmin->AGENTE_SO ?></td>
													<td class="text-center"><?= $sesionesAdmin->FECHAINICIO ?></td>
													<td class="text-center">
														<button type="submit" class="btn btn-primary"><i class="fas fa-door-open mr-2"></i> CERRAR SESIÓN </button>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</form>
							</div>
							<div class="tab-pane fade" id="denunciantes" role="tabpanel" aria-labelledby="denunciantes-tab">
								<form id="form_cerrar_denunciante" class="needs-validation" action="<?= base_url() ?>/admin/dashboard/cerrar_sesiones_general" method="POST" novalidate>

									<table id="table-denunciantes" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th class="text-center">DENUNCIANTE</th>
												<th class="text-center">NAVEGADOR </th>
												<th class="text-center">SISTEMA OPERATIVO</th>
												<th class="text-center">FECHA INICIO</th>
												<th class="text-center"></th>

											</tr>
										</thead>
										<tbody>
											<?php foreach ($body_data->sesionesDenunciantes->result as $index => $sesionesDenunciantes) { ?>
												<input hidden id="id_denunciante" name="id_denunciante" value="<?= $sesionesDenunciantes->ID_DENUNCIANTE ?>"> </input>
												<tr>
													<td class="text-center"><?= $sesionesDenunciantes->NOMBRE . ' ' . $sesionesDenunciantes->APELLIDO_PATERNO ?></td>
													<td class="text-center"><?= $sesionesDenunciantes->DENUNCIANTE_HTTP ?></td>
													<td class="text-center"><?= $sesionesDenunciantes->DENUNCIANTE_SO ?></td>
													<td class="text-center"><?= $sesionesDenunciantes->FECHAINICIO ?></td>
													<td class="text-center">
														<button type="submit" class="btn btn-primary"><i class="fas fa-door-open mr-2"></i> CERRAR SESIÓN </button>
													</td>
												</tr>

											<?php } ?>
										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if (session()->getFlashdata('message_success')) : ?>
	<script>
		Swal.fire({
			icon: 'success',
			html: '<strong><?= session()->getFlashdata('message_success') ?></strong>',
			confirmButtonColor: '#bf9b55',
		})
	</script>
<?php endif; ?>
<script>
	$(function() {
		$("#table-usuarios").DataTable({
			responsive: false,
			lengthChange: false,
			autoWidth: true,
			ordering: true,
			order: [
				[0, 'asc'],
			],
			searching: true,
			pageLength: 100,
			// dom: 'Bfrtip',
			// buttons: [
			// 	'copy', 'excel', 'pdf'
			// ],
			language: {
				url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json'
			}
		});
	});
	$(function() {
		$("#table-denunciantes").DataTable({
			responsive: false,
			lengthChange: false,
			autoWidth: true,
			ordering: true,
			order: [
				[0, 'asc'],
			],
			searching: true,
			pageLength: 100,
			// dom: 'Bfrtip',
			// buttons: [
			// 	'copy', 'excel', 'pdf'
			// ],
			language: {
				url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json'
			}
		});
	});
</script>
<?= $this->endSection() ?>