
     <!--Nuestro css-->
     <link rel="stylesheet" href="<?php echo base_url('static/css/login.css')?>" /> 


    <header>
      <section id="banner">
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

        <div class="loginBox">
        <img src="<?php echo base_url('static/css/user.png') ?>" class="user">
          <h2>UNAP-BIBLIO</h2>
          <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
            
            <p>Email</p>
            <input type="text" name = "usua_email" placeholder="email@gmail.com">
            <p>Password</p>
            <input type="password" name = "usua_password" placeholder="*********">
            <input type="submit"  value="Sign In">
          
            </form>
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
