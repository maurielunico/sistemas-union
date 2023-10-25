<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
           
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
            <h1>Crear Nuevo Personal</h1>
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
                <h3 class="card-title">Por favor llene los campos para agregar el Producto Correspondiente</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
        echo form_open_multipart('Producto/agregarpersonalbd');

    ?>            
        
     <?php 
      
           if($this->session->flashdata('error_mesage')){
            echo '<div class="form-control bg-dark" style="color:red;"> ' .$this->session->flashdata('error_mesage') . '</div>';
            }
            
            ?>
                Escriba el nombre del nuevo personal
                <input type="text" name="nombre"  class="form-control" value="<?php echo set_value('nombre'); ?>">
                <?php echo form_error('nombre'); ?>

                Escriba el apellido paterno
                <input type="text" name="apellido1"  class="form-control" value="<?php echo set_value('apellido1'); ?>">

                <?php echo form_error('apellido1'); ?>

                Escriba el apellido materno
                <input type="text" name="apellido2"  class="form-control">

                Coloque la edad correspondiente
                <input type="text" name="fechaNacimineto"  class="form-control" value="<?php echo set_value('nota'); ?>"> 
               

                Escriba el carnet identidad
                <input type="text" name="ci"  class="form-control">

                Coloque el cargo correspondiente
                <input type="text" name="cargo" class="form-control">
               
                 
 
                <br>
                <button type="submit" class="btn btn-outline-success">Agregar</button>
                

    <?php
        echo form_close();
    ?>

    <!--  </form>-->



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