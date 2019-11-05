

<div id="">

 <div class="row mt20">
   <div class="col-md-10">
    <h2></h2>
   </div>
   <div class="col-md-0">
    <a href="<?php echo base_url('Ejemplar/create/') ?>" class="btn btn-danger">Nuevo</a>
   </div>
   <br><br>

      <table  class="table table-dark table-striped table-hover" id="user_datita" style="width:100%">
        <thead>
          <tr>
             <th>Id</th>
             <th>Titulo</th>
             <th>Año</th>
             <th>Idioma</th>
             <th>Nombre</th>
             <th>ISBN</th>
             <th colspan="2">acciones</th>
          </tr>
       </thead>
       <tbody>
          <?php 
          foreach($date as $rem) {?>
          <tr>
             <td><?php echo $rem->ejem_id; ?></td>
             <td><?php echo $rem->ejem_titulo; ?></td>
             <td><?php echo $rem->ejem_anio; ?></td>
             <td><?php echo $rem->ejem_idioma; ?></td>
             <td><?php echo $rem->cate_nombre; ?></td>
             <td><?php echo $rem->ejem_isbn; ?></td>
             <td><a href="<?php echo base_url('Ejemplar/edit/'.$rem->ejem_id) ?>" class="btn btn-primary">Editar</a></td>
                 <td>
                <form action="<?php echo base_url('Ejemplar/delete/'.$rem->ejem_id) ?>" method="post">
                  <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>
          </tr>
  <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>