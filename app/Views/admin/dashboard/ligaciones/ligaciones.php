<?= $this->extend('admin/templates/dashboard_template') ?>
<?= $this->section('title') ?>
<?php echo $header_data->title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1 class="mb-4 text-center font-weight-bold">LISTADO DE LIGACIONES REGISTRADAS</h1>
                <a class="link link-primary" href="<?= base_url('admin/dashboard/folios_escritos') ?>" role="button"><i class="fas fa-reply"></i> REGRESAR A DENUNCIAS ESCRITAS</a>
            </div>
            <div class="col-12">
                <div class="card shadow border-0 rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mt-3" style="overflow-x:scroll;">
                                <table id="table-ligaciones" class="table table-bordered table-striped table-sm" data-page-length='50' style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">MARCA COMERCIAL</th>
                                            <th class="text-center">RAZÓN SOCIAL</th>
                                            <th class="text-center">RFC</th>
                                            <th class="text-center">LITIGANTE</th>
                                            <th class="text-center">PERFIL</th>
                                            <th class="text-center">CARGO EN PERSONA MORAL</th>
                                            <th class="text-center">ESTADO</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($body_data->litigacion as $index => $liga) { ?>
                                            <tr>
                                                <td class="text-center"><?= $liga->MARCACOMERCIAL ?></td>
                                                <td class="text-center"><?= $liga->RAZONSOCIAL ?></td>
                                                <td class="text-center"><?= $liga->RFC ?></td>
                                                <td class="text-center"><?= $liga->NOMBRE ?> <?= $liga->APELLIDO_PATERNO ?>
                                                    <?= $liga->APELLIDO_MATERNO ?></td>
                                                <td class="text-center"><?= $liga->PERFIL ?></td>
                                                <td class="text-center"><?= $liga->CARGO ?></td>

                                                <?php if ($liga->RELACIONAR == 'N' && empty($liga->RECHAZAR)) { ?>
                                                    <td class="text-center text-warning font-weight-bold">AUN NO HA SIDO ACEPTADO</td>
                                                <?php } else if ($liga->RELACIONAR == 'S') { ?>
                                                    <td class="text-center text-success font-weight-bold">ACEPTADO</td>
                                                <?php } else if ($liga->RECHAZAR == 'S') {  ?>
                                                    <td class="text-center text-danger font-weight-bold">RECHAZADO</td>

                                                <?php } ?>

                                                <td class="text-center">
                                                    <a type="button" class="btn btn-success" href="<?= base_url('admin/dashboard/editar_ligacion?id=' . $liga->ID) ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function() {
        $("#table-ligaciones").DataTable({
            responsive: false,
            lengthChange: false,
            autoWidth: true,
            ordering: true,
            order: [
                [0, 'asc'],
                [2, 'asc'],
                [1, 'asc'],
            ],
            searching: true,
            pageLength: 25,
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