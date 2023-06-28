<form id="persona_moral_poder_form" action="" method="post" enctype="multipart/form-data"
    class="row p-0 m-0 needs-validation" novalidate>
    <div id="contenedor_moral_poder" class="col-12 mb-5 d-none">
        <a id="moral_poder_download" download="" href="">
            <img id="moral_poder" class="img-fluid" src="" style="max-width:300px;">
            <br>
        </a>
    </div>
	
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
        <label for="relacion_pm" class="form-label font-weight-bold">Aceptado</label>
        <select class="form-control" id="relacion_pm" name="relacion_pm">
            <option value="S">SI</option>
            <option value="N">NO</option>
        </select>
    </div>
	<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
        <label for="volumen_pm" class="form-label font-weight-bold">Volumen</label>
        <input type="text" class="form-control" id="volumen_pm" name="volumen_pm">
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
        <label for="notario_pm" class="form-label font-weight-bold">Número notario</label>
        <input type="text" class="form-control" id="notario_pm" name="notario_pm">
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
        <label for="poder_pm" class="form-label font-weight-bold">Número poder</label>
        <input type="text" class="form-control" id="poder_pm" name="poder_pm">
    </div>
    <div class="col-12">
        <hr>
    </div>
    
</form>
<script>
    var form = document.getElementById('persona_moral_poder_form');

    // Recorre todos los elementos del formulario y establece el atributo 'readonly'
    for (var i = 0; i < form.elements.length; i++) {
        form.elements[i].disabled = true;
    }
</script>