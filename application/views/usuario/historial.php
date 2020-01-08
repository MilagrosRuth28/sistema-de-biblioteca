
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
    <h2>Historail de busqueda</h2>
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
      <th>Tipo</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if($ejemplares): ?>
      <?php foreach($ejemplares as $historial): ?>
        <tr>
         <td><?php echo $historial->ejem_id; ?></td>
         <td><img class="avatar rounded mr-3" alt="..." src="<?php echo base_url().'uploads/'. $historial->ejem_portada?>" style="width: 100px;" ></td>
         <td><?php echo $historial->ejem_titulo; ?></td>
         <td><?php echo $historial->auto_nombres; ?></td>
         <td><?php echo $historial->cate_nombre; ?></td>         
         <td><?php echo $historial->tipo_nombre; ?></td>

         <td>                                    
           <form action="<?php echo base_url('index.php/Ejemplar_usuario/eliminar_histo/'.$historial->ejem_id) ?>" method="POST"><button class="beliminar fas fa-trash" style="font-size:25px;color:red" type="submit"></button></form>       
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>
</div>

</div>
