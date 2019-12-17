
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() { 
  $("#ejem_datita").dataTable( {
    "scrollX":        "1100px",
    "scrollY":        "800",
    "scrollCollapse": true,
    "paging":         false
  } ); 
}); 
</script>
<div class="container">
  <div class="row mt40">
   <div class="col-md-10">
    <h2>Ejemplares</h2>
  </div>
  <div class="col-md-2">
    <a href="<?php echo base_url('index.php/Ejemplar/crear/') ?>" class="btn btn-danger">Agregar Ejemplar<i class='fas fa-book' style="font-size:25px;color:white"></i></a>
  </div>
  <br><br>
  
  <table class="table table-bordered" id="ejem_datita" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th>ID</th>
      <th>Portada</th>
      <th>Titulo</th>
      <th>Autores</th>
      <th>Categoria</th> 
      <th>Año</th>
      <th>Telefono</th>
      <th>Paginas</th>
      <th>Tipo</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if($ejemplares): ?>
      <?php foreach($ejemplares as $ejemplar): ?>
        <tr>
         <td><?php echo $ejemplar->ejem_id; ?></td>
         <td><img class="avatar rounded mr-3" alt="..." src="<?php echo base_url().'uploads/'. $ejemplar->ejem_portada?>" style="width: 100px;" ></td>
         <td><?php echo $ejemplar->ejem_titulo; ?></td>
         <td><?php echo $ejemplar->auto_nombres; ?></td>
         <td><?php echo $ejemplar->cate_nombre; ?></td>
         <td><?php echo $ejemplar->ejem_anio;  ?></td>
         <td><?php echo $ejemplar->ejem_isbn; ?></td>
         <td><?php echo $ejemplar->ejem_paginas; ?></td>
         <td><?php echo $ejemplar->tipo_nombre; ?></td>

         <td>
          <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Accion
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('index.php/Ejemplar/editar/'.$ejemplar->ejem_id) ?>" class="fas fa-user-edit" style="font-size:25px;color:green">Editar</a></li>
                <li><form action="<?php echo base_url('index.php/Ejemplar/eliminar/'.$ejemplar->ejem_id) ?>" method="POST"><button class="beliminar fas fa-trash" style="font-size:25px;color:red" type="submit">Eliminar</button></form></li>
              </ul>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>
</div>

</div>