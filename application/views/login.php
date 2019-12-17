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
                    <!--ORDENA TU CODIGO -.- -->
          <div class="panel-body">
            <img src="<?php echo base_url('static/css/user.png') ?>" class="user">            
                  <form role="form" method="post" action="<?php echo site_url('User/login_user'); ?>">
                    <div class="form-group"  >
                      <!--cambiar el name-->
                      <input class="form-control" placeholder="Usuario" name="usua_email" type="text">
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Contraseña" name="usua_password" type="text">
                    </div>  
                    <!--<input class="border-primary" style="width:20px;height:20px; pa: 9px;" type="checkbox" value="1" name="usua_esadmin"><b style="color: white">Administrador</b>-->
                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar" name="login" >
                  </form>
                  <a href="<?php echo base_url('user/login_irRegistro');?>">Registrarse</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

