  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <div class="card mb-4 border  m-5 rounded-lg">
    <div class="card-header py-3">
      <h2>Editar Ejemplar</h2>
    </div>
    <div class="card-body">

      <form action="<?php echo base_url('index.php/Ejemplar/upload_PortEdit') ?>" method="POST" name="edit_note">
       <input type="hidden" name="id" value="<?php echo $ejemplar->ejem_id ?>">
       <div class="form-row">
        <div class="form-group col-md-6">
          <label>Titulo</label>
          <input type="text" class="form-control"  name="titulo" value="<?php echo $ejemplar->ejem_titulo ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Editorial</label>
          <input type="text" class="form-control" id="Editorial" name="editorial" value="<?php echo $ejemplar->ejem_editorial ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label>ISBN</label>
          <input type="text" class="form-control" id="Isbn" name="isbn" value="<?php echo $ejemplar->ejem_isbn ?>">
        </div>
        <div class="form-group col-md-4">
          <label>Idioma</label>
          <input type="text" class="form-control" id="Idioma" name="idioma" value="<?php echo $ejemplar->ejem_idioma ?>">
        </div>
        <div class="form-group col-md-3">
          <label>Paginas</label>
          <input type="text" class="form-control" id="Paginas" name="paginas" value="<?php echo $ejemplar->ejem_paginas ?>">
        </div>
      </div>

      <div class="form-row">
        <br><br>
        <div class="form-group col-md-6">
         <div class="custom-file">

          <input type="file" name="userfile" value="<?php echo $ejemplar->ejem_portada ?>"size="20" />

        </div>
      </div>

      <div class="form-group col-md-12">
        <img class="avatar rounded mr-3" alt="..." src="<?php echo base_url().'uploads/'. $ejemplar->ejem_portada?>" style="width: 100px;" >

      </div>
    </div>




  <!--
  <div class="form-group">
    <label for="exampleFormControlFile1">PORTADA</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>-->
  <!------------------------------------------------------------------------------------------>
  <!--AYUDA PARA TIPOS Y CATEGORIA EN EDITAR-->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Seleccione tipo</label>
      <select class="form-control" name = "tipo" >
        <?php foreach($tipo as $item): ?>
          <option value="<?php echo $item->tipo_id; ?>">  <?php echo $item->tipo_nombre; ?> </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label>Seleccione categoria</label>
      <select class="form-control" name = "categoria" >
        <?php foreach($categoria as $item): ?>
          <option value="<?php echo $item->cate_id; ?>">  <?php echo $item->cate_nombre; ?> </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="titulo">Autores</label>
      <div>
        <select id="js-example-basic-multiple" class="cmultiple form-control form-control-md border border-dark" name="autores[]" multiple>
          <?php foreach ($autores as $autor) :  ?>
            <option value="<?php echo $autor->auto_id; ?>" 
              <?php foreach ($autores_sel as $sel) {
                if ($autor->auto_id == $sel->rela_auto_id) {
                  echo "selected";
                }
              }
              ?>><?php echo $autor->auto_nombres; ?></option>
            <?php endforeach; ?>
          </select>
          <script>
           $(document).ready(function() {
            $('#js-example-basic-multiple').select2();
          });
        </script>

      </div>
    </div>
    <div class="form-group col-md-6">
      <label>Año</label>
      <input type="text" class="form-control" id="Anio" name="anio" value="<?php echo $ejemplar->ejem_anio ?>">
    </div>
  </div>
  <!-------------------------EL INGE DIJO QUE LUEGO HARIAMOS ESTO ggg------------------------->
<!--
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="exampleFormControlFile1">AUDIO</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group col-md-4">
      <label for="exampleFormControlFile1">Digital</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group col-md-4">
      <label>valoraciones</label>
      <input type="text" class="form-control" id="Paginas" name="paginas" placeholder="ayuda gg">
    </div>
  </div>-->
  <div class="form-group ">
    <label>Resumen</label>
    <input type="text" class="form-control" id="Resumen" name="resumen" value="<?php echo $ejemplar->ejem_resumen ?>">
  </div>

  <hr class="sidebar-divider my-2">

  <div class="form-row">
    <div class="form-group col-md-1.5">
      <div class="col-md-1 text-center">
        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
      </div>
    </div>
    <div class="form-group col-md-1.5">
      <div class="col-md-1 text-center">
        <a href="<?= base_url('Ejemplar/ejemplar')?>" class="btn btn-warning btn-lg">Cancelar</a>
      </div>
    </div>
  </div>
</form>
</div>
</div>