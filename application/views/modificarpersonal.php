<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
<style type="text/css">
        body{
            background-image: img src = "img/japi.jpg" ;
            background-color: beige;
            color: blue;
        }
    </style>

<h1>Inicio</h1>
<div class="container">
        <div class="row">
            <div class="col-md-12">         

            <h1>Modificar Productos</h1>

    <?php


 foreach($infoestudiante->result() as $row) 
 {
        echo form_open_multipart('estudiante/modificarbd');
 
    ?>
     <input type="hidden" name="idProducto"  class="form-control" value="<?php echo $row->idProducto;?>">

    <input type="text" name="producto" placeholder="Escriba el Nombre del Producto" class="form-control" value="<?php echo $row->producto;?>">

    <input type="text" name="precio" placeholder="Escriba el Precio" class="form-control" value="<?php echo $row->precio;?>">
    
   

    <button type="submit" class="btn btn-success">MODIFICAR</button>

    <?php
        echo form_close();
    }
    ?>

        </div>

     </div>
</div>

