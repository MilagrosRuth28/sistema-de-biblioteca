
<link rel="stylesheet" href="<?php echo base_url('static/css/login.css')?>" /> 
      <div class="loginBox ">
       <div class="container">
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
                             <input class="border-primary"  style="width:20px;height:20px; color:blue;" type="checkbox" value="1" name="usua_esadmin"><a>Administrador?</a><input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar" name="login" >
</fieldset> 
 <br>
 <center><h1 style="font-size:15px; color: white;">¿ No estas Registrado ?</h1>
 </b><a href="<?php echo base_url('user/login_irRegistro');?>"> Registrarse</a> </center>
                    </form>
                
                            
        </div>
      </div>
                </div>
            </div>
        </div>
    </div>
</div>