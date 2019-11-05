
    <div class="container">
    <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agredar Usuario
        </button>
   
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Dato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('index.php/Crud/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres</label>
                        <input type="text" class="form-control" name="usua_nombres" aria-describedby="emailHelp" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" name="usua_apellidos" aria-describedby="emailHelp" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Direccion</label>
                        <input type="text" class="form-control" name="usua_direccion" aria-describedby="emailHelp" placeholder="Direccion">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">e-mail</label>
                        <input type="text" class="form-control" name="usua_email" aria-describedby="emailHelp" placeholder="example@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" name="usua_telefono" aria-describedby="emailHelp" placeholder="000000000">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">n°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">e-mail</th>
                <th scope="col">Telefono</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $n°=1;
                foreach($result as $row) {?>
                <tr>
                <!---<th scope="row"><?php echo $row->usua_id; ?></th>------>
                <td><?=$n°++ ?></td>
                <td><?php echo $row->usua_nombres; ?></td>
                <td><?php echo $row->usua_apellidos; ?></td>
                <td><?php echo $row->usua_direccion; ?></td>
                <td><?php echo $row->usua_email; ?></td>
                <td><?php echo $row->usua_telefono; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->usua_id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('index.php/Crud/delete');?>/<?php echo $row->usua_id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
