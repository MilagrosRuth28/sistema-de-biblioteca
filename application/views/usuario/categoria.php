 <div class="container-fluid mt--6">
  <h2 style="margin-left: 20px;">Buscar Libro</h2>
      <div class="row">
    <div class="card-body">
              <div class="row">
                <div class="col-xl-12">
                  
                    <form action="<?php echo base_url('crud/BuscarLibro');?>" method = "post" name="q">
                    <div class="form-row">
                        <div class=" col-md-2" >
                                <select id="inputState" class="form-control" name="" placeholder="categoria">
                                  <option value="1" >biomedicas</option>
                                  <option value="2" >sociales</option>
                                  <option value="3" >ingenierias</option>
                                </select>
                        </div>                    
                      <div class="col-md-10 d-block">
                      <div class="input-group input-group-alternative input-group-merge">
                              <input class="form-control" placeholder="Buscar" type="text" name="">
                              <div class="input-group-prepend">
                                <button class="input-group-text">buscar</button>
                              </div>
                            </div>
                          </div>
                          <br>
                          <br>

                    <fieldset style="padding-left: 8px;">
   <div style="" >
     <input type="checkbox" style="top:-1px;">
     <label style="text-indent:-2px;">titulo</label>
     <input type="checkbox" style="" value="" name="">
     <label>autor</label>
     <input type="checkbox" style="top:-1px;" value="" name="">
     <label style="text-indent:-2px;">titulo</label>
     <input type="checkbox" style="" value="" name="">
     <label>ISBN</label>
     <input type="checkbox" style="top:-1px;" value="" name="">
     <label style="">editorial</label>
     
   </div>
 </fieldset>                   
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
             </div>

<div class="container-fluid mt--4">

 <table class="table table-bordered" id="ejem_datita" cellspacing="0" width="10%">
       <thead>
          <tr><th>ID</th>
             <th>Portada</th>
            <th>Titulo</th></tr>
       </thead>
          <tbody>
          <?php foreach($resultado as $reg): ?>
          <tr>
             <td><?php echo $reg->cate_id;?></td>
             <td><img class="img-fluid shadow shadow-lg--hover" src="<?php echo base_url('uploads/'.$reg->ejem_portada)?>" style="width: 100px"></td>
             <td><?php echo $reg->cate_nombre;?></td>
             <td><?php echo $reg->ejem_titulo; ?></td>
          </tr>
  <?php endforeach; ?>
        </tbody>
      </table>
  </div>
