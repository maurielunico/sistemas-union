<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
            background-image: img src = "img/japi.jpg" ;
            background-color: beige;
            color: darkblue;
        }
    </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modificar Productos</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rellene los campos para Modificar su producto </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
 foreach($infolista->result() as $row) 
 {
        echo form_open_multipart('producto/modificarlistabd');
    ?>

                 <input type="hidden" name="idLista" placeholder="Escriba el apellido paterno" class="form-control" value="<?php echo $row->idLista;?>">
                <input type="text" name="producto" placeholder="Escriba el producto" class="form-control"  value="<?php echo $row->producto;?>">
               
                 
               
                <button type="submit" class="btn btn-outline-success">Modificar</button>

    <?php
        echo form_close();
      }
    ?>

   



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->