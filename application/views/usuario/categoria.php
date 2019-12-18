 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <div class="container-fluid mt--6">
  <h2 style="margin-left: 20px;">Buscar Libro</h2>
  <div class="row">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-12">

          <form action="<?php echo base_url('Ejemplar_usuario/BuscarLibro');?>" method = "post" name="buscar">
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
                  <input class="form-control" placeholder="Buscar" type="text" name="buscar">
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
    <tr><!--th>ID</th-->
     <th>Portada</th>
     <th>Titulo</th>
     <th>Resumen</th>
     <th></th> 
   </tr>
 </thead>
 <tbody>
  <?php foreach($resultado as $reg): ?>
    <tr>
     <!--td><?php echo $reg->cate_id;?></td-->
     <td><img class="img-fluid shadow shadow-lg--hover" src="<?php echo base_url('uploads/'.$reg->ejem_portada)?>" style="width: 100px"></td>
     <td><?php echo $reg->ejem_titulo; ?></td>
     <td><?php echo $reg->ejem_resumen; ?></td>
     <td>
       <div id="dropdown"  class="btn-group dropright">
        <button type="button" class="btn btn-success">Options</button>
        <button type="button" class="btn btn-success dropdown-toggle px-3 " data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span class="sr-only">Opciones</span>
      </button>
      <div class="dropdown-menu">
       <a href="#" class="favoritos dropdown-item" rel="<?php echo $reg->ejem_id; ?>" data-toggle="modal" data-target="#ejemploModal" ><i class='fas fa-edit'></i>Peticion</a>

       <a href="#" class="favoritos dropdown-item" rel="" data-toggle="modal" data-target="" ><i class='fas fa-edit'></i>Añadir Favoritos</a>
     </td>
   </div>
 </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>


<!--Modal de Peticiones-->
<div class="modal fade" id="ejemploModal" tabindex="-1" role="dialog" aria-labelledby="ejemploModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="ejemploModalLabel"></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <input type="hidden" name="id" >
        <div class="form-group">
          <input id="titulo" type="text" class="form-control"  name="titulo" >
        </div>

        <div class="form-group">
          <input id="resumen" type="text" class="form-control" id="Resumen" name="resumen" >
        </div>

        <div class="form-group">
          <img id="img" class="avatar rounded mr-3"  alt="..." src="<?php echo base_url().'uploads/'. $reg->ejem_portada?>" style="width: 100px;" >
        </div>


      </div>
      <div class="modal-footer">
        <button type="submit" class="editar btn btn-secondary">Añadir Peticion</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  var iden;
  var  filaeditar;


  var fclick = function(){
    filaeditar = $(this).closest('tr');
    iden=$(this).attr('rel');

    $.ajax({
     url: '<?php echo base_url()?>Ejemplar/upload_PortEdit',
     type: 'POST',
     data: {id: $(this).attr('rel')},
     error: function() {
      alert('Something is wrong');
    },
    success: function(data) {

     var obj = jQuery.parseJSON(data);
     console.log(obj);

     $('#ejemploModal').find('#titulo').val(obj.ejem_titulo);
     $('#ejemploModal').find('#resumen').val(obj.ejem_resumen);
     $('#ejemploModal').find('#img').val(obj.Portada);
   }
 });
  }

  $('.favoritos').click(fclick)

  var eliminar = function(){
    var fila = $(this).closest('tr');
    $.ajax({
     url: '<?php echo base_url()?>index.php/Docente/eliminar',
     type: 'GET',
     data: {id: $(this).attr('rel')},
     error: function() {
      alert('Something is wrong');
    },
    success: function(data) {
     fila.fadeOut('slow');
     alert("Desea eliminar")
   }
 });
    return false;
  }
  $('.beliminar').click(eliminar)

  $('button.guardar').click(function(){
   var id = $("input[name='id']").val();
   var nombres = $("input[name='nombres']").val();
   var area = $("input[name='area']").val();
   var login = $("input[name='login']").val();
   var password = $("input[name='password']").val();

   $.ajax({
     url: '<?php echo base_url()?>index.php/Docente/ajaxRequestPost',
     type: 'POST',
     data: {id: id, nombres: nombres, area: area, login: login, password: password },
     error: function() {
      alert('error de usted');
    },
    success: function(data) {
      var obj = jQuery.parseJSON(data);

      $("input[name='nombres']").val('');
      $("input[name='area']").val();
      $("input[name='login']").val();
      $("input[name='password']").val();

      if(obj.exito==false){
       alert("Complete los datos");
       return;
     }
     botones ='<div id="dropdown"  class="btn-group dropright"><button type="button" class="btn btn-success">Options</button><button type="button" class="btn btn-success dropdown-toggle px-3 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Opciones</span></button><div class="dropdown-menu"><a href="#"  rel="'+obj.doce_id+'"class="dropdown-item   beliminar">   <i class="far fa-trash-alt"></i>          Eliminar</a><a href="#" class="beditar dropdown-item " rel="'+obj.doce_id+'" data-toggle="modal" data-target="#ejemploModal" ><i class="fas fa-edit"></i>        Editar</a><a href="<?php echo base_url()?>index.php/Docente/reporte/<?php echo $item->doce_id ?>" class="dropdown-item"><i class="far fa-file-pdf"></i>        Reporte</a></div></div>';

     $("tbody").append("<tr><td>"+obj.doce_id+"</td><td>"+obj.doce_nombres+"</td><td>"+obj.doce_area+"</td><td>"+obj.doce_login+"</td><td><br>"+botones+"</td></tr>");

     $('tbody tr:last-child .beditar').click(fclick);
     $('tbody tr:last-child .beliminar').click(eliminar);


     console.log(data);
     alert('ingresaste los datos correctamente');
   }
 });
 });

  $("button.editar").click(function(){

   var nombres = $("#ejemploModal input[name='nombres']").val();
   var area = $("#ejemploModal input[name='area']").val();
   var login = $("#ejemploModal input[name='login']").val();
   var password = $("#ejemploModal input[name='password']").val();
   $.ajax({
     url: '<?php echo base_url()?>index.php/Docente/updateDocent',
     type: 'POST',
     data: { id: iden, nombres: nombres, area: area, login: login, password: password},
     error: function() {
      alert('Something is wrong');
    },
    success: function(data) {
      var obj = jQuery.parseJSON(data);

      $("input[name='nombres']").val('');
      $("input[name='area']").val();
      $("input[name='login']").val();
      $("input[name='password']").val();

      if(obj.exito==false){
       alert("Complete los datos");
       return;
     }

     filaeditar.find('td:eq(0)').text();
     filaeditar.find('td:eq(1)').text(nombres);
     filaeditar.find('td:eq(2)').text(area);
     filaeditar.find('td:eq(3)').text(login);
     filaeditar.find('td:eq(4)').text();

   }
 });
 });
</script>