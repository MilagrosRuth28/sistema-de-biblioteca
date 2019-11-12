
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
        <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
          <center>
          <main>
            <aside id="left">
              <p>Email</p>
              <input type="text" name = "usua_email" placeholder="email@gmail.com">
              <p>Password</p>
              <input type="password" name = "usua_password" placeholder="*********">
              <p>Codigo</p>
              <input type="text" name="usua_codigo" placeholder="Codigo">
              <p>Nombres</p>
              <input type="text" name="usua_nombres" placeholder="Nombres">
            </aside>
            <article></article>
            <aside id="right">
              <p>Apellidos</p>
              <input type="text" name="usua_apellidos" placeholder="Apellidos">
              <p>Direccion</p>
              <input type="text" name="usua_direccion" placeholder="Direccion">
              <p>Telefono</p>
              <input type="text" name="usua_telefono" placeholder="Telefono">
            </aside>
            </main>
          </form>
            <header>
              <section id="banner">
                <a href="<?php echo base_url('user/login_volverLogin') ?>">Ya tengo una cuenta</a>  
              </section>
              <section id="logo">
                <input type="submit" name = "" value="Sign In">
              </section>
            </header> 
          </center>
        
      </div>
  </body>
</html>
