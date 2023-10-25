<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
     <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
     <style type="text/css">
       .card-body{
            
            background-color: beige;
            color: darkblue;
        }
    </style>
    <style type="text/css">
       .card-header{
            
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
            

             <center> <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo base_url();?>adminlte/img/camion.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo base_url();?>adminlte/img/proveedor2.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/img/proveedor3.jpg"     class="d-block w-15" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url();?>adminlte/img/proveedor4.jpg"     class="d-block w-15" alt="...">
            </div>
           
          </div>
      </div>
      </center>
     

                <br>
                 <a href="<?php echo base_url(); ?>index.php/producto/agregararproveedor2">
                <button  type="button" class="btn btn-outline-primary">Agregar Datos del Proveedro</button>
            </a><br><br>

           
            <center><h1 class="card-title">Lista de Proveedores</h1></center><br>

           

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                  <tr>

                    <th>No</th>
                    <th>Proveedor</th>
                    <th>Pais</th>
                    <th>Cantidad</th>
                    <th>Marca</th>
                    <th>Peso</th>
                    <th>Lote</th>
                    <th>Fecha De Recepcion</th>

                   
                  </tr>
                  </thead>
                  <tbody>

                        <?php
                    $indice=1;
                    foreach($proveedor->result() as $row)
                    {
                        ?>
                  <tr>
                   <td><?php echo $indice; ?></td>
                  <td><?php echo $row->proveedor; ?></td>
                   <td><?php echo $row->pais; ?></td>
                   <td><?php echo $row->cantidad; ?></td>
                   <td><?php echo $row->marca; ?></td>
                   <td><?php echo $row->peso; ?></td>
                   <td><?php echo $row->lote; ?></td>
                    <td><?php echo formatearFecha($row->creado); ?></td>

  


  <?php
                        $indice++;
                          }

                             ?>
                      
                 
                  </tbody>
                 
                  </tfoot>
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