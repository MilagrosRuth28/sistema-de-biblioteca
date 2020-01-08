
    
<div class="container">
  
    <div class="row">
        <div class="col-lg-12 mt40">
            <div class="pull-left">
                <h2>Peticiones de libros</h2>
            </div>
        </div>
    </div>
    <hr>
    <br>    

    <table class="table table-bordered" id="example" cellspacing="0" width="100%">
       <thead>
          <tr>
             <th>Libros</th>
             <th>Fecha</th>
             <th>Dias</th>
             <th>Observacion</th>
             <th>Opciones</th>
          </tr>
       </thead>
       <tbody>
          <?php if($peticion): ?>
          <?php foreach($peticion as $peti): ?>
          <tr>
             <td><?php echo $peti->ejem_titulo; ?></td>
             <td><?php echo $peti->peti_fechareg; ?></td>
             <td><?php echo $peti->peti_dias; ?></td>
             <td></td>
             <td>
              <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Accion
                  <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#" class="fas fa-user-check" style="font-size:25px;color:green">prestar</a></li>
                      <li><form action="#" method="POST"><button class=" fas fa-circle" style="font-size:25px;color:red" type="submit">rechazar</button></form></li>
                    </ul>
              </div>
             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
    </table>
    
</div>