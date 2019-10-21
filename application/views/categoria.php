<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
   </head> <br>


<div class="content">
        <div class="header">
        </div>
        <div class="container content-search">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p style="font-family: arial-black;color:black; font-size: 40px;">Mediante los cuadros de texto puede buscar cualquier libro</p>
                    <br>
                </div>
            </div>
            <div class="container">
                <form class="form-horizontal form-search" action="<?php echo base_url(); ?>frontend/principal/search" method="GET">
                    <div class="form-group">
                        <div class="col-md-2">
                            <select name="categorias" placeholder="categorias" class="form-control" style=" width: 170px">
                                <option value="">Ingenierias</option>
                                <option value="">Sociales</option>
                                <option value="">biomedicas</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="" class="form-control" value="" placeholder="Introduzca codigo o titulo del libro" style=" width: 560px">
                        </div>
                        
                        <div class="col-md-2">
                            <button  style=" "type="submit" class="btn btn-primary btn-block"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo base_url(); ?>frontend/principal/search" class="btn btn-danger btn-block"><i class="fa fa-eye" aria-hidden="true"></i> Ver Todo</a>
                        </div>
                    </div>
                </form>
            </div>

 <fieldset style="padding-left: 20px;">
   <div style="" >
     <input type="checkbox" style="top:-1px;">
     <label style="text-indent:-2px;">titulo</label>

     <input type="checkbox" style="">
     <label>autor</label>
     <input type="checkbox" style="top:-1px;">
     <label style="text-indent:-2px;">titulo</label>
     <label style="top:-1px;">año</label>
     <input type="checkbox" style="">
     <label>ISBN</label>
     <input type="checkbox" style="top:-1px;">
     <label style="">editorial</label>
     
   </div>
 </fieldset>
 
<div class="container">
<table  class="table table-dark table-striped table-hover" id="user_datita" style="width:1100px">
    <thead>
     <tr>
     
      <th>ID</th>
      <th>nombre</th>
      
    </tr>
  </thead>
  <tbody>
   <?php 


   foreach($data as $reg) { ?>
  <tr>
      <td ><?php echo $reg->cate_id; ?></td>
      <td ><?php echo $reg->cate_nombre; ?></td>
       
  </tr>
  <?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>