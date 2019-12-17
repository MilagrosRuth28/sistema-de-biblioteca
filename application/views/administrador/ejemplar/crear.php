  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
     <form action="<?php echo base_url('index.php/Ejemplar/upload_Port') ?>" class="was-validated" method="POST" name="edit_note" enctype="multipart/form-data">
      <input type="hidden" name="id">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="validationTextarea">Titulo</label>
          <input type="text" class="form-control is-invalid"  name="titulo" placeholder="Ingrese el Titulo" required>
         
        </div>
        <div class="form-group col-md-6">
          <label>Editorial</label>
          <input type="text" class="form-control is-invalid" id="Editorial" name="editorial" placeholder="Ingrese Editorial" required>
          <div class="invalid-feedback">
            
    </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
          <label>ISBN</label>
          <input type="text" class="form-control is-invalid" id="Isbn" name="isbn" placeholder="Ingrese ISBN" required>
                <div class="invalid-feedback">
           
    </div>
        </div>
        <div class="form-group col-md-4">
          <label>Idioma</label>
          <input type="text" class="form-control" id="Idioma" name="idioma" placeholder="Ingrese Idioma" required>
        </div>
        <div class="form-group col-md-3">
          <label>Paginas</label>
          <input type="text" class="form-control" id="Paginas" name="paginas" placeholder="Ingrese Numero de Paginas" required>
        </div>
      </div>
      <div class="form-group col-md-12">         
        <div class="custom-file">
          <input type="file" class="custom-file-input is-invalid" id="customFile" name="portada" required>
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
    <div class="form-group col-md-4">
      <label>Seleccione tipo</label>
      <select class="custom-select border-dark" name="tipo" required>
        <option selected>Tipo</option>
        <?php foreach ($tipo as $item) :  ?>
         <option value="<?php echo $item->tipo_id;?>"><?php echo $item->tipo_nombre;?></option>
       <?php endforeach; ?>
     </select>
         <div class="invalid-feedback">Example invalid custom select feedback</div>

   </div>
   <div class="form-group col-md-4">
    <label>Seleccione categoria</label>
    <select class="form-control" name = "categoria" required>
      <option selected>Categoria</option>
      <?php foreach($categoria as $item): ?>
        <option value="<?php echo $item->cate_id; ?>"><?php echo $item->cate_nombre; ?> </option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group col-md-4">
   <label for="titulo">Autores</label>
   <div>
     <select id="js-example-basic-multiple" class="cmultiple form-control form-control-md border border-dark" name="autores[]" multiple="multiple" required>
       <?php foreach ($autores as $autor) :  ?>
         <option value="<?php echo $autor->auto_id; ?>"><?php echo $autor->auto_nombres; ?></option>
       <?php endforeach; ?>
     </select>
     <script>
       $(document).ready(function() {
        $('#js-example-basic-multiple').select2();
      });
    </script>
  </div>
</div>
<div>          
</div>


<div class="form-group col-md-4">
  <label>Año</label>
  <input type="text" class="form-control" id="Anio" name="anio" placeholder="Ingrese el Año" required>
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
  

  <div class="form-group">





    <label>Resumen</label>
    <input type="text" class="form-control" id="Resumen" name="resumen" placeholder="Ingrese Resumen" required>
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