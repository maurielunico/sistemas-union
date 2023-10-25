  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>boos/css/bootstrap.css">
  <script src="<?php echo base_url(); ?>boos/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>boos/js/bootstrap.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <style type="text/css">
    .card-body {

      background-color: beige;
      color: darkblue;
    }
  </style>
  <style type="text/css">
    .card-header {

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
          <center>
            <div class="col-sm-6">
              <h1>Lista de Alimentos </h1>
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

                <a href="<?php echo base_url(); ?>index.php/Producto/agregarlista">
                  <button type="button" class="btn btn-outline-primary"><img width="25" src="<?php echo base_url(); ?>adminlte/img/agregar.jpg "><br>Agregar un nuevo Producto</button>
                </a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>


                    <tr>
                      <th>No</th>
                      <th>Producto</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $indice = 1;
                    foreach ($lista->result() as $row) {
                    ?>
                      <tr>
                        <td><?php echo $indice; ?></td>
                        <td><?php echo $row->producto; ?></td>




                        <td> <?php echo form_open_multipart('producto/modificarlista'); ?>
                          <input type="hidden" name="idLista" value="<?php echo $row->idLista; ?>">
                          <button type="submit" class="btn btn-outline-success"><img width="25" src="<?php echo base_url(); ?>adminlte/img/editar.png "></button>

                          <?php echo form_close(); ?>
                        </td>

                        <td> <?php echo form_open_multipart('producto/eliminarlista'); ?>
                          <input type="hidden" name="idLista" value="<?php echo $row->idLista; ?>">
                          <button type="submit" class="btn btn-outline-danger"><img width="25" src="<?php echo base_url(); ?>adminlte/img/eliminar.png "></button>

                          <?php echo form_close(); ?>
                        </td>

                        <td>


                          <?php

                          $foto = $row->foto;
                          if ($foto == "") {
                          ?>

                            <img width="100" src="<?php echo base_url(); ?>foto/perfil.jpg">
                          <?php
                          } else {
                          ?>
                            <img width="100" src="<?php echo base_url(); ?>foto/<?php echo $foto; ?>">
                          <?php
                          }

                          ?>

                          
                          <?php
                          echo form_open_multipart('producto/subirfoto');
                          ?>
                          <input type="hidden" name="idLista" value="<?php echo $row->idLista; ?>">
                          <button type="submit" class="btn btn-outline-primary">SUBIR</button>


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