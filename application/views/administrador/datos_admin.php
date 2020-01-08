
    
<div class="container">
  
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Datos del administrador</h2>
        </div>
    </div>
</div>
<hr>
<br>    
     
     
<form action="<?php echo base_url('User/validaciones_admin') ?>" method="POST" name="Actualizar">
   <input type="hidden" name="id" value="<?php echo $datos->usua_id ?>">
     <div class="row">
        <div class="form-row">
            <div class="form-group col-md-6">
                <strong>Nombres</strong>
                <input type="text" name="nombre" class="form-control" value="<?php echo $datos->usua_nombres ?>">
            </div>
        <div class="form-group col-md-6">
            <strong>Apellidos</strong>
            <input type="text" name="apellidos" class="form-control" value="<?php echo $datos->usua_apellidos ?>" placeholder="Ingrese nombre">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-8">
            <div class="form-group">
                <strong>Direccion</strong>
                <input type="text" name="direccion" class="form-control" value="<?php echo $datos->usua_direccion ?>">
            </div>
        </div>
    <div class="form-row">
            <div class="form-group col-md-8">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" value="<?php echo $datos->usua_email ?>">
            </div>
        <div class="form-group col-md-6">
            <strong>Telefono</strong>
            <input type="text" name="Telefono" class="form-control" value="<?php echo $datos->usua_telefono ?>" >
        </div>
    </div>

    <div class="form-row">
            <div class="form-group col-md-8">
                <strong>Usuario</strong>
                <input type="text" name="usuario" class="form-control" value="<?php echo $datos->usua_login ?>" >
            </div>
        <div class="form-group col-md-8">
            <strong>Contraseña</strong>
            <input type="text" name="Contraseña" class="form-control" value="<?php echo $datos->usua_password ?>" >
        </div>
    </div>
        <br>

        <div class="col-md-4">
                <button  type ="submit" class="btn btn-info">Actualizar datos</button>
        </div>
    </div>
     
 
</div>   
</body>
</html>