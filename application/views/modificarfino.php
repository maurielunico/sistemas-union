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
                <h3 class="card-title">Rellene los campos para Modificar su producto DogFit</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
foreach($infofino->result() as $row) 
 {
        echo form_open_multipart('Producto/modificarfinotbd');
 
    ?>
     <input type="hidden" name="idSuper"  class="form-control" value="<?php echo $row->idSuper;?>">
                <input type="text" name="producto" placeholder="Escriba el producto" class="form-control"  value="<?php echo $row->producto;?>">
                 
                <input type="text" name="cantidad" placeholder="Escriba la cantidad" class="form-control"  value="<?php echo $row->cantidad;?>">
                <input type="text" name="peso" placeholder="Escriba el peso" class="form-control"  value="<?php echo $row->peso;?>">
                <input type="text" name="lote" placeholder="Escriba el lote correspondiente" class="form-control"  value="<?php echo $row->lote;?>">
                 <input type="text" name="fechaVencimineto" placeholder="Escriba la fecha de vencimineto" class="form-control"  value="<?php echo $row->fechaVencimineto;?>">
               
               
                <input type="text" name="nacionalidad" placeholder="Escriba la nacionalidad" class="form-control"  value="<?php echo $row->nacionalidad;?>">
    
   

    <button type="submit" class="btn btn-success">MODIFICAR</button>

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