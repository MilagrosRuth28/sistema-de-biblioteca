<!DOCTYPE html>
<html>
  
<head>
    <title>UNAP-BIBLIO REGISTRO</title>
     <!--Nuestro css-->
     <link rel="stylesheet" href="<?php echo base_url('static/css/loginRegistro.css')?>" /> 

</head>
<body>

                <!--  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                  ?>-->

        <div class="loginBox">
        <img src="<?php echo base_url('static/css/user.png') ?>" class="user">
        <h2>UNAP-BIBLIO REGISTRARSE</h2>
        <form>
          <center>
          <main>
            <aside id="left">
              <p>Email</p>
              <input type="text" name = "" placeholder="email@gmail.com">
              <p>Password</p>
              <input type="password" name = "" placeholder="*********">
              <p>Codigo</p>
              <input type="text" name="" placeholder="Codigo">
              <p>Nombres</p>
              <input type="text" name="" placeholder="Nombres">
            </aside>
            <article></article>
            <aside id="right">
              <p>Apellidos</p>
              <input type="text" name="" placeholder="Apellidos">
              <p>Direccion</p>
              <input type="text" name="" placeholder="Direccion">
              <p>Telefono</p>
              <input type="text" name="" placeholder="Telefono">
            </aside>
            </main>
            <header>
              <section id="banner">
                <a href="<?php echo base_url('user/login_volverLogin') ?>">Ya tengo una cuenta</a>  
              </section>
              <section id="logo">
                <input type="submit" name = "" value="Sign In">
              </section>
            </header> 
          </center>
        </form>
      </div>
  </body>
</html>
