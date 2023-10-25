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
         <center><div class="col-sm-6">
           <h1>Almacen N°2</h1>
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
                

           


            

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                 <tr>
                    <th>No</th>
                    <th>Producto</th>
                    <th>Gama</th>
                    <th>Cantidad</th>
                    <th>Kilos</th>
                    <th>Lote</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Nacionalidad</th>
                    <th>Fecha Entrada</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                     $indice=1;
                    foreach($almacen2->result() as $row)
                    {
                        ?>
                  <tr>
                   <td><?php echo $indice; ?></td>
                  <td><?php echo $row->producto; ?></td>
                  <td><?php echo $row->gama; ?></td>
                   <td><?php echo $row->cantidad; ?></td>
                   <td><?php echo $row->peso; ?></td>
                   <td><?php echo $row->lote; ?></td>
                   <td><?php echo $row->fechaVencimineto; ?></td>
                   <td><?php echo $row->nacionalidad; ?></td>
                   
                    <td><?php echo formatearFecha($row->creado); ?></td>

                    
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