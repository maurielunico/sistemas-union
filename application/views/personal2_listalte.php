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
            

            <center> <img width="500" src="<?php echo base_url();?>adminlte/dist/img/personal.jpg"   ></center><br>

     

                <br>
                <a href="<?php echo base_url(); ?>index.php/producto/agregarpersonal2">
                <button  type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url();?>adminlte/dist/img/negocio.jpg " ><br>Agregar Datos del Personal Nuevo</button>
            </a><br><br>

           
            <center><h1 class="card-title">Lista de Proveedores</h1></center><br>

           

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                  <tr>

                     <th>No</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimineto</th>
                    <th>C.I.</th>
                    <th>Cargo</th>
                    <th>Fecha de Contratacion</th>
                   
                  </tr>
                  </thead>
                  <tbody>
  <?php
                    $indice=1;
                    foreach($empleado->result() as $row)
                    {
                        ?>
                  <tr>
                   <td><?php echo $indice; ?></td>
                  <td><?php echo $row->nombre; ?></td>
                   <td><?php echo $row->apePaterno; ?></td>
                   <td><?php echo $row->apeMaterno; ?></td>
                   <td><?php echo $row->edad; ?></td>
                   <td><?php echo $row->ci; ?></td>
                   <td><?php echo $row->cargo; ?></td>
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