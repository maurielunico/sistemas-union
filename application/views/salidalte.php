
<center> <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>adminlte/img/deposito.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/img/almacen.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/img/camion.jpg"     class="d-block w-15" alt="...">
            </div></center>

     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
     <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
            background-image: img src = "img/japi.jpg" ;
            background-color: beige;
            color: blue;
        }
    </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <center><div class="col-sm-6">
            <h1>Lista de Salida de Alimentos </h1>
           
          </div>
        </center>
         
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
                <br>

              

                <br>
               

                 
                <button type="button" class="bbtn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img width="55" src="<?php echo base_url();?>adminlte/img/salida2.jpg " ><br>
 Agregar Datos del Producto que Saldra
</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Por favor llene los campos para registrar la salida del Producto Correspondiente</h5>
      
      </div>
      <div class="modal-body">


                 <select name="idSalida" class="form-control form-select " required >
                <option value="" disabled selected> Selecione Un Producto</option>

              </select><br><br>
                
                Escriba la cantidad
                <input type="text" name="cantidad"  class="form-control">

                Escriba el peso
                <input type="text" name="kilos"  class="form-control">

                Escriba el Lote Correspondiente
                <input type="text" name="Lote"  class="form-control">
      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-outline-success" href="<?php echo base_url(); ?>index.php/producto/Producto/agregarsalidabd">Agregar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

            

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                  <tr>

                    <th>No</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Kilos</th>
                    <th>Lote</th>
                    <th>Frecha Salida</th>
                    <th>Almacen</th>
                     <th>Modificar</th>
                      <th>Eliminar</th>
                    
                  </tr>
                  </thead>
                  <tbody>

                     <?php
                     $indice=1;
                    foreach($salida->result() as $row)
                    {
                        ?>
                  <tr>
                   <td><?php echo $indice; ?></td>
                  <td><?php echo $row->producto; ?></td>
                   <td><?php echo $row->cantidad; ?></td>
                   <td><?php echo $row->kilos; ?></td>
                   <td><?php echo $row->lote; ?></td>
                  
                    <td><?php echo formatearFecha($row->fechaSalida); ?></td>
                    <td><?php echo $row->almacen; ?></td>

                    <td> <?php echo form_open_multipart('producto/modificarsalida'); ?>

       <input type="hidden" name="idSalida" value="<?php echo $row->idSalida; ?>">
       <button type="submit" class="btn btn-outline-success"><img width="25" src="<?php echo base_url();?>adminlte/img/editar.png " ></button>        

    <?php echo form_close(); ?>                      </td>

   <td> <?php echo form_open_multipart('producto/eliminarsalida'); ?>
        <input type="hidden" name="idSalida" value="<?php echo $row->idSalida; ?>">
       <button type="submit" class="btn btn-outline-danger"><img width="25" src="<?php echo base_url();?>adminlte/img/eliminar.png " ></button>        

    <?php echo form_close(); ?>
  </td>

  <?php
                        $indice++;
                          }

                             ?>
                 
                  </tbody>
                 
                </table>
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