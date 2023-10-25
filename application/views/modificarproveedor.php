<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <div class="content-wrapper">
<style type="text/css">
        body{
           
            background-color: beige;
            color: darkblue;
        }
    </style>

<h1>Inicio</h1>
<div class="container">
        <div class="row">
            <div class="col-md-12">         

            <h1>Modificar Lista de Proveedor</h1>

    <?php


 foreach($infoproveedor->result() as $row) 
 {
        echo form_open_multipart('Producto/modificarproveedorbd');
 
    ?>
    
    <input type="text" name="proveedor" placeholder="Escriba el Nombre del Producto" class="form-control" value="<?php echo $row->proveedor;?>">
    <input type="hidden" name="idProveedor"  class="form-control" value="<?php echo $row->idProveedor;?>">

    <input type="text" name="pais" placeholder="Escriba el Pais de Origen" class="form-control" value="<?php echo $row->pais;?>">
    <input type="text" name="cantidad" placeholder="Escriba el Precio" class="form-control" value="<?php echo $row->cantidad;?>">
    <input type="text" name="marca" placeholder="Escriba la marca Correspondiente" class="form-control" value="<?php echo $row->marca;?>">
    <input type="text" name="peso" placeholder="Escriba el Precio" class="form-control" value="<?php echo $row->peso;?>">
    <input type="text" name="lote" placeholder="Escriba el Precio" class="form-control" value="<?php echo $row->lote;?>">
    
   

    <button type="submit" class="btn btn-success">MODIFICAR</button>

    <?php
        echo form_close();
    }
    ?>

        </div>

     </div>
</div>

</div>