<!DOCTYPE html>
<html>
  
<head>
    <title>UNAP-BIBLIO REGISTRO</title>
     <!--Nuestro css-->
     <link rel="stylesheet" href="<?php echo base_url('static/css/login.css')?>" /> 

</head>
<body>

                <!--  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                  ?>-->

    <header>
      <section id="banner">
        <div class="loginBox">
        <img src="<?php echo base_url('static/css/user.png') ?>" class="user">
          <h2>UNAP-BIBLIO</h2>
          <form>
            <p>Email</p>
            <input type="text" name = "" placeholder="email@gmail.com">
            <p>Password</p>
            <input type="password" name = "" placeholder="*********">
            <input type="submit" name = "" value="Sign In">
            <main>
              <aside id="left">
                <!--Para linkear primero poner el nombre del controlador (user), despues poner el nombre de tu funcion controlador-->
                <a href="<?php echo base_url('user/login_irRegistro');?>"> Registrarse</a> 
              </aside>
               <article></article>
              <aside id="right">
                <a href="">Olvide mi Contraseña</a>
              </aside>
            </main>
          </form>
        </div>
      </section>
      <section id="logo">
            <h1>TEEEEEEEEEEEXXXXXXXXXXXTOOOOOOOOOOOO</h1>
          <center>
            <p>Teeeeeeeeeeeeeeeeeeeeeexxxxxxxxxtooooooooooo</p>
          </center>
      </section>
    </header> 
  </body>
</html>
