  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
            background-image: img src = "img/japi.jpg" ;
            background-color: beige;
            color: blueviolet;
        }
    </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Productos</h1>
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
                <h3 class="card-title">Rellene los campos para crear su producto Nuevo</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
        echo form_open_multipart('producto/agregarlistabd');
    ?>
         <?php 
      
           if($this->session->flashdata('error_mesage')){
            echo '<div class="form-control bg-dark" style="color:red;"> ' .$this->session->flashdata('error_mesage') . '</div>';
            }
            
            ?>
              
                
                 <input type="text" name="producto" placeholder="Escriba el producto" class="form-control">

               

               
                <button type="submit" class="btn btn-outline-success">SUBIR</button>
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