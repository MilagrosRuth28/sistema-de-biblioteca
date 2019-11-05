
     <!--Nuestro css-->
     <link rel="stylesheet" href="<?php echo base_url('static/css/login.css')?>" /> 
      <section id="banner">
        
      <div class="loginBox">
       <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    
                  <center><h3 class="panel-title">UNA BIBLIO</h3></center>
                    
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

                <div class="panel-body">
                     <img src="<?php echo base_url('static/css/user.png') ?>" class="user">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                              <!--cambiar el name-->
                                <input class="form-control" placeholder="Usuario" name="usua_email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="usua_password" type="password" value="">
                            </div>


                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar" name="login" >

                        </fieldset>
                    </form>
                <center><b>¿ No Registrado ?</b> <br></b><a href="<?php echo base_url('user/login_irRegistro');?>"> Registrarse</a> </center>
 
          </div>
        </div>
      </div>
      
                </div>
            </div>
        </div>
    </div>
</div>

                <!--Para linkear primero poner el nombre del controlador (user), despues poner el nombre de tu funcion controlador-->
     


  



