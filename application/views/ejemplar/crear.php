<form action="<?php echo base_url('index.php/Ejemplar/upload_Port') ?>" method="POST" name="edit_note" enctype="multipart/form-data">
  <input type="hidden" name="id">
           <div class="form-row">
    <div class="form-group col-md-6">
      <label>Titulo</label>
      <input type="text" class="form-control"  name="ejem_titulo" placeholder="Ingrese el Titulo">
    </div>
    <div class="form-group col-md-6">
      <label>Editorial</label>
      <input type="text" class="form-control" id="Editorial" name="ejem_editorial" placeholder="Ingrese Editorial">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label>ISBN</label>
      <input type="text" class="form-control" id="Isbn" name="ejem_isbn" placeholder="Ingrese ISBN">
    </div>
    <div class="form-group col-md-4">
      <label>Idioma</label>
      <input type="text" class="form-control" id="Idioma" name="ejem_idioma" placeholder="Ingrese Idioma">
    </div>
    <div class="form-group col-md-3">
      <label>Paginas</label>
      <input type="text" class="form-control" id="Paginas" name="ejem_paginas" placeholder="Ingrese Numero de Paginas">
    </div>
  </div>
     <div class="form-group col-md-12">         
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="ejem_portada" >
                <label class="custom-file-label border-dark" for="customFile">Archivo Digital</label>
                </div>
            </div>

   <!--
  <div class="form-group">
    <label for="exampleFormControlFile1">PORTADA</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>-->
<!------------------------------------------------------------------------------------------>
<!--AYUDA PARA TIPOS Y CATEGORIA-->
  <div class="form-row">
    <!--<div class="form-group col-md-4">
      <label>Seleccione tipo</label>
      <select class="form-control" name = "tipo" >
        <?php foreach($tipos as $item): ?>
          <option value="<?php echo $tipos->cate_id; ?>">  <?php echo $tipos->cate_nombre; ?> </option>
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
    </div>-->
    <div class="form-group col-md-4">
      <label>Año</label>
      <input type="text" class="form-control" id="Anio" name="ejem_anio" placeholder="Ingrese el Año">
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
  
  <div class="form-group col-md-6">
            <select class="custom-select border-dark" name="categoria">
              <option selected>Categoría</option>
              <?php foreach ($categoria as $cate):  ?>
                <option value="<?php echo $cate->cate_id; ?>"><?php echo $ejemplar->cate_nombre; ?></option>
              <?php endforeach; ?>
              
            </select>
            </div>
  <div class="form-group">





    <label>Resumen</label>
      <input type="text" class="form-control" id="Resumen" name="ejem_resumen" placeholder="Ingrese Resumen">
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
        <a href="<?= base_url('Ejemplar/index')?>" class="btn btn-warning btn-lg">Cancelar</a>
      </div>
    </div>
  </div>

    </form>
  </div>
</div>