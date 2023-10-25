 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <div class="content-wrapper">
<style type="text/css">
        body{
            
            background-color: beige;
            color: blue;
        }
    </style>


<div class="container">
        <div class="row">
            <div class="col-md-12">         

            <center><h1>Modificar Lista de Empleados</h1></center>

    <?php 
    foreach($infopersonal->result() as $row) 
    {

        echo form_open_multipart('producto/modificarpersonalbd');
         ?>
     

    <input type="text" name="nombre" placeholder="Escriba el nombre del nuevo personal" class="form-control" value="<?php echo $row->nombre;?>">
    <input type="hidden" name="idEmpleado" placeholder="Escriba el apellido paterno" class="form-control" value="<?php echo $row->idEmpleado;?>">

    <input type="text" name="apellido1" placeholder="Escriba el apellido paterno" class="form-control" value="<?php echo $row->apePaterno;?>">
    <input type="text" name="apellido2" placeholder="Escriba el apellido materno" class="form-control" value="<?php echo $row->apeMaterno;?>">
    <input type="text" name="fechaNacimineto" placeholder="Coloque la edad correspondiente" class="form-control" value="<?php echo $row->fechaNacimineto;?>">
    <input type="text" name="ci" placeholder="Escriba el carnet identidad" class="form-control" value="<?php echo $row->ci;?>">
    <input type="text" name="cargo" placeholder="Coloque el cargo correspondiente" class="form-control" value="<?php echo $row->cargo;?>">
   

    <button type="submit" class="btn btn-success">MODIFICAR</button>

    <?php
        echo form_close();
    }
    ?>

        </div>

     </div>
</div>

</div>