<!--datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
 $(document).ready(function() { 
            $("#example").dataTable( {
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
    <h2>Autores</h2>
   </div>
   <div class="col-md-2">
    <a href="<?php echo base_url('index.php/Autor/crear/') ?>" class="btn btn-danger">Crear Autor<i class="fas fa-user-plus"></i></a>
   </div>
   <hr>
   <br>
   <br>
   <br>
    <table class="table table-bordered" id="example" cellspacing="0" width="100%">
       <thead>
          <tr>
             <th>Id</th>
             <th>Autor</th>
             <th>Apellidos</th>
             <th>Opciones</th>
          </tr>
       </thead>
       <tbody>
          <?php if($autores): ?>
          <?php foreach($autores as $autor): ?>
          <tr>
             <td><?php echo $autor->auto_id; ?></td>
             <td><?php echo $autor->auto_nombres; ?></td>
             <td><?php echo $autor->auto_apellidos; ?></td>
             <td>
              <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Accion
                  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url('index.php/Autor/editar/'.$autor->auto_id) ?>" class="fas fa-user-edit" style="font-size:25px;color:green">Editar</a></li>
                      <li><form action="<?php echo base_url('index.php/Autor/eliminar/'.$autor->auto_id) ?>" method="POST"><button class="beliminar fas fa-trash" style="font-size:25px;color:red" type="submit">Eliminar</button></form></li>
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
     
</body>
</html>