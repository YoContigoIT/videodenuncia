<?= $this->extend('admin/templates/dashboard_template') ?>
<?= $this->section('title') ?>
<?php echo $header_data->title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3 class="mb-4 font-weight-bold text-center">AGENTES ACTIVOS PARA VIDEODENUNCIA</h3>
				<div class="card shadow border-0 rounded">
					<div class="card-body">
						<div class="row">
							<div class="col-12 mt-3" style="overflow-x:scroll;">
								<p id="message" class="mb-3 text-primary font-weight-bold text-center"> No hay ningún agente disponible para videodenuncia</p>
								<table id="table-usuarios-activos" class="table table-bordered table-hover table-striped d-none">
									<thead>
										<tr>
											<th class="text-center">AGENTE</th>
											<th class="text-center">ESTADO</th>
										</tr>
									</thead>
									<tbody></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="<?= base_url() ?>/assets/agent/assets/openvidu-browser-2.29.0.min.js?v=<?= rand() ?>"></script>
<script src="https://cdn.socket.io/4.6.0/socket.io.min.js?v=<?= rand() ?>" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>/assets/js/usuarios_activos.js?v=<?= rand() ?>" type="module"></script>
<?= $this->endSection() ?>
