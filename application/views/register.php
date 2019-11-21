
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body style="background-image:url('https://s2.best-wallpaper.net/wallpaper/1920x1200/1110/Blue-and-green-abstract-space-curve_1920x1200.jpg');">

              <!--  <?php
                $error_msg=$this->session->flashdata('error_msg');
                if($error_msg){
                  echo $error_msg;
                }
                ?>-->
  <div class="container h-100">
    <div class="d-flex justify-content-center">
      <div class="card mt-6 col-md-5 animated bounceInDown myForm">
        <div class="card-header">
        <h4>UNAP-BIBLIO REGISTRARSE</h4>
      </div>
        <div class="card-body">
          <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
            <div id="dynamic_container">
              <div class="input-group mt-3">
                <div class="input-group-prepend">
                  <span class="input-group-text br-15"><i class="fas fa-book-reader"></i></span>
                </div>
              <input name="login" placeholder="login ingrese"class="form-control"/>
            </div>
              <div class="input-group mt-3">
                <div class="input-group-prepend">
                  <span class="input-group-text br-15"><i class="fas fa-user-circle"></i></span>
                </div>
              <input name="nombres" placeholder="Nombres"class="form-control"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="far fa-user-circle"></i></span>
              </div>
              <input type="text" name="apellidos" placeholder="Apellidos" class="form-control"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-street-view"></i></span>
              </div>
              <input type="text" name="direccion" placeholder="Direccion" class="form-control"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-phone-square"></i></span>
              </div>
              <input type="text" name="telefono" placeholder="Student Phone" class="form-control"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-address-card"></i></span>
              </div>
              <input type="text" name="codigo" placeholder="Codigo" class="form-control"/>
            </div>
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
              </div>
              <input type="email" name = "email" placeholder="Email" class="form-control"/>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                <span class="input-group-text br-15"><i class="fas fa-low-vision"></i></span>
              </div>
              <input type="password" name = "password" placeholder="*********" class="form-control"/>
            </div>
          </div>     
      </div>
      <div class="card-footer">
          <a type="button" href="<?php echo base_url('user/login_volverLogin') ?>">Ya tengo una cuenta</a>  
          <button type = "submit" ><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
      </div>
    </form>
  </div>
  </div>
  </div>
 
</body>
</html>