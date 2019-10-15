
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->usua_id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input type="text" class="form-control" name="usua_nombres" value="<?php echo $row->usua_nombres; ?>" aria-describedby="emailHelp" placeholder="Nombres">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="text" class="form-control" name="usua_apellidos" value="<?php echo $row->usua_apellidos; ?>" aria-describedby="emailHelp" placeholder="Apellidos">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" name="usua_direccion" value="<?php echo $row->usua_direccion; ?>" aria-describedby="emailHelp" placeholder="direccion">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">e-mail</label>
                <input type="text" class="form-control" name="usua_email" value="<?php echo $row->usua_email; ?>" aria-describedby="emailHelp" placeholder="example@example">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name="usua_telefono" value="<?php echo $row->usua_telefono; ?>" aria-describedby="emailHelp" placeholder="000000000">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


 