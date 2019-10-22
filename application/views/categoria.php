<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  <link href="<?php echo base_url('lib/css/bootstrap.css')?>" rel="stylesheet"><!--diseño-->
  
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light " style="background-image:url(logo-una.png)">
  <a class="" style="background-image:url(logo-una.png)">UNAP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
      </li>
      </ul>
      <div class="dropdown ">
          <button style="height: 36px; width: : 120px" class=" dropdown-toggle form-control mr-sm-8 " type="button" data-toggle="dropdown" placeholder="categoriass">categorias o areas
            <span class="caret"></span></button>
              <ul class="dropdown-menu  bg-green">
               <li><a href="#" class="" style="font-size:20px;color:black" rel="" data-toggle="modal" data-target="#example">ingenierias</a></li>
              <li><a href="#" id="" class="" style="font-size:20px;color:black" rel="">sociales</a></li>
               <li><a href="#" id="" class="" style="font-size:20px;color:black" rel="">biomedicas</a></li>
              
             </ul>
        </div>


    <form  action="<?php echo base_url();?>User/resultado" class="form-inline my-2 my-lg-0" method="Post" >
      <input style="width: 820px"class="form-control mr-sm-2"  name="q" type="search" placeholder="Search" aria-label="Search">
      <button style="width: 140px height:80px" name="q" class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>

  <div class="container">
    <div class="col-md-4">
<table  class="table  table-striped " id="user_datita" style="width:1050px">
    <thead>
     <tr>
     
      <th>ID</th>
      <th>nombre</th>
      
    </tr>
  </thead>
  <tbody>
   <?php 
    //$start = 0; 

  foreach($data as $reg): ?>
  <tr>
      <td ><?php echo $reg->cate_id; ?></td>
      <td ><?php echo $reg->cate_nombre; ?></td>
       
  </tr>
  
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>