
<div class="">
      <div class="container-fluid">
        <div class="header-body">
          <div class="">
            <div class="">
             <a href="<?php echo base_url();?>Ejemplar_usuario/portada"></a>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="card bg-white">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="h3 mb-2">Portada</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($resultado as $reg):?>
                <div class="p-3">
                  <div class="card card-profile" style="width: 180px;">
                    <img src="<?php echo base_url().'uploads/'.$reg->ejem_portada?>" alt="Image placeholder" class="card-img-top">
                    <div class="card-body">
                      <div class="text-center">
                        <h5 class="h5"><?php echo $reg->ejem_titulo; ?></h5>
                        <h5 class="h5"><?php echo $reg->ejem_anio; ?></h5>
                        <div class="h5 font-weight-300">
                          <i><?php echo $reg->auto_nombres; ?></i>
                        </div>
                        <h6 class="h3"><?php echo $reg->ejem_valoracion .' / 5'; ?></h6>
                      </div>
                    </div>
                    <div class="card-body border-0 pt-4 pt-md-4 pb-0 pb-md-4">
                      <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-danger">Favorito</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          
        