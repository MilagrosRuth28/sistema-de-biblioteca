
    
<div class="container">
    <div class="row mt40">
   <div class="col-md-10">
    <h2>Autores</h2>
   </div>
   <div class="col-md-2">
    <a href="<?php echo base_url('index.php/Autor/crear/') ?>" class="btn btn-danger">Crear Autor</a>
   </div>
   <hr>
   <br>
   <br>
   <br>
    <table class="table table-bordered">
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