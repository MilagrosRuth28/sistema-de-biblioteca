
    
<div class="container">
  
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left">
                <h2>Libros Prestados</h2>
            </div>
        </div>
    </div>
    <hr>
    <br>    

    <table class="table table-bordered" id="example" cellspacing="0" width="100%">
       <thead>
          <tr>
             <th>Usuario</th>
             <th>Libro</th>
             <th>Fecha</th>
             <th>FechaFin</th>
             <th>Plazo</th>
             <th>Estado/Observacion</th>
             <th>Opciones</th>
          </tr>
       </thead>
       <tbody>
          <?php if($prestamo): ?>
          <?php foreach($prestamo as $pres): ?>
          <tr>
             <td><?php echo $pres->pres_usua_id; ?></td>
             <td><?php echo $pres->pres_ejem_id; ?></td>
             <td><?php echo $pres->pres_fechareg; ?></td>
             <td><?php echo $pres->pres_fechadevolucion; ?></td>
             <td><?php echo $pres->pres_dias; ?></td>
             <td><?php echo $pres->pres_estado; ?></td>
             <td>
              <a  type="button" href="#" class="fas fa-user-people" style="font-size:25px;color:green">Ver usuario</a>
             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    
</div>