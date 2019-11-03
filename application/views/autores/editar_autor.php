
    
<div class="container">
  
<div class="row">
    <div class="col-lg-12 mt40">
        <div class="pull-left">
            <h2>Editar Autor</h2>
        </div>
    </div>
</div>
<hr>
<br>    
     
     
<form action="<?php echo base_url('index.php/Autor/validaciones') ?>" method="POST" name="edit_note">
   <input type="hidden" name="id" value="<?php echo $autor->auto_id ?>">
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombres</strong>
                <input type="text" name="autor" class="form-control" value="<?php echo $autor->auto_nombres ?>" placeholder="Ingrese nombre">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Apellidos</strong>
                <input type="text" name="apellidos" class="form-control" value="<?php echo $autor->auto_apellidos ?>" placeholder="Ingrese Apellidos">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Biografia</strong>
                <textarea class="form-control" col="4" name="biografia"
                 placeholder="Biografia"><?php echo $autor->auto_biografia ?></textarea>
            </div>
        </div>
        <br>
        <br>
        <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
 
</div>
     
</body>
</html>