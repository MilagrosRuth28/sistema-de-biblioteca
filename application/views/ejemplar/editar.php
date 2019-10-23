<style>
    .container {
    width: 706px;
    max-width: 706px;
    margin: 0 auto;
    background-image: url(https://i.pinimg.com/originals/48/20/b1/4820b1b0cb074261f04538be6eafd0de.jpg);
}

#signup {
    padding: 0px 25px 25px;
    background: #fff;
    box-shadow: 
        0px 0px 0px 5px rgba( 255,255,255,0.4 ), 
        0px 4px 20px rgba( 0,0,0,0.33 );
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    display: table;
    position: static;
}

#signup .header {
    margin-bottom: 20px;
}

#signup .header h3 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 5px;
}

#signup .sep {
    height: 1px;
    background: #e8e8e8;
    width: 606px;
    margin: 0px -25px;
}


#signup .inputs {
    margin-top: 25px;
}
</style>
<div class="container">
 
        
<form action="<?php echo base_url('Ejemplar/store') ?>" method="POST" name="edit_note" id="signup">
    <input type="hidden" name="id" value="<?php echo $rem->ejem_id ?>">

        <div class="header">
        
            <h3>EDITAR</h3>
            
            <p>Llene los campos</p>
            
        </div>
        
        <div class="sep"></div>
            <div class="inputs">
             <h3>Titulo</h3>
                 <input type="text" name="titulo" class="form-control" placeholder="Ingrese el titulo" value="<?php echo $rem->ejem_titulo ?>">
               
                <h3>Paginas</h3>
                <input type = "text" name= "paginas" placeholder = "Ingrese cantidad de paginas" value="<?php echo $rem->ejem_paginas ?>">
                <h3>ISBN</h3>
                <input type = "text" name = "ISBN" placeholder = "Ingrese el ISBN" value="<?php echo $rem->ejem_isbn ?>">
                <h3>Idioma</h3>
                <input type = "text" name = "idioma" placeholder = "text" value="<?php echo $rem->ejem_idioma ?>">
                <h3>Año</h3>
                <input type = "text" name = "ejem_anio" placeholder = "text" value="<?php echo $rem->ejem_anio ?>">

                <h3>Tipo de ejemplar</h3>
                <select name = "seleccione">
                    <option value="1">  ingenieria </option>
                    <option value="2">  biomedicas</option>
                    <option value="3">  sociales</option>
                </select>
                <h3>Autor</h3>
                    <textarea name = "autor" placeholder=" Ingrese el nombre del autor"> </textarea>
                <h3>Editorial</h3>
                    <input type="text" name="editorial" class="form-control" placeholder="Ingrese Editorial">
                <h3>Agregar foto</h3>
                    <textarea name = "portada" placeholder=" Foto"><?php echo $ejemplar->ejem_portada ?> </textarea>
                    <br>
                <button type="button" class="btn btn-primary" >Archivo digital</button>
                <br>
                <br>
                <button type="button" class="btn btn-primary">Archivo de audio</button>
                <h3>Resumen</h3>
                    <textarea class="form-control" col="6" name="Resumen"
                 placeholder="Ingrese Resumen"><?php echo $ejemplar->ejem_resumen ?></textarea>
          
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </div>

    </form>
    <div>