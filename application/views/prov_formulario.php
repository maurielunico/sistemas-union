<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
    <style type="text/css">
        body{
           
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
          <div class="col-sm-6">
           <center> <h1>Crear nuevo Proveedor</h1></center>
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
                <center><h3 class="card-title">Por favor llene los campos para agregar el Proveedor Correspondiente</h3></center>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
 <?php
        echo form_open_multipart('producto/agregarproveedorbd');
    ?>

    <?php 
           
           if($this->session->flashdata('error_mesage')){
            echo '<div class="form-control bg-dark" style="color:red;"> ' .$this->session->flashdata('error_mesage') . '</div>';
            }
            
            ?>
                <input type="text" name="Proveedor" placeholder="Escriba el nuevo Proveedor" class="form-control">

              
                <select name="Pais" class="form-control" required>
                  <option disabled selected> Escriba lel lugar de Origen del Alimento</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Brasil">Brasil</option>
                  <option value="Argentina">Argentina</option>
                   <option value="Chile">Chile</option>
                  <option value="Peru">Peru</option>
                  <option value="EE. UU">EE. UU</option>
                  <option value="China">China</option>
                   <option value="Canada">Canada</option>
                </select>
                  <br>
                <input type="text" name="Cantidad" placeholder="Escriba la cantigad que esta Ingresando" class="form-control">
               
                  <select name="Marca" class="form-control" required>
                  <option disabled selected> Selecione Producto</option>
                  <option value="Japi Cat">Japi Cat</option>
                  <option value="Japi Tradicional">Japi Tradicional</option>
                  <option value="Japi Sabores">Japi Sabores</option>
                  <option value="Japi Plus Carne y Huesitos Adulto">Japi Plus Carne y Huesitos Adulto</option>
                  <option value="Japi Plus Carne y Huesitos Cachorro">Japi Plus Carne y Huesitos Cachorro</option>
                  <option value="Besser Cat">Besser Cat</option>
                  <option value="Besser Adulto RPM">Besser Adulto RPM</option>
                   <option value="Besser Adulto RG">Besser Adulto RG</option>

                  <option value="Besser Cachorro">Besser Cachorro</option>
                  <option value="Prestige Cat">Prestige Cat</option>
                  <option value="Prestige Adulto RPM">Prestige Adulto RPM</option>
                  <option value="Prestige Adulto RG">Prestige Adulto RG</option>
                  <option value="Prestige Cachorro">Prestige Cachorro</option>

                  <option value="DogFit Aulto RPM">DogFit Aulto RPM</option>
                  <option value="DogFit Adulto RG">DogFit Adulto RG</option>
                  <option value="DogFit Cachorro">DogFit Cachorro</option>
                  <option value="CatFit">CatFit</option>

                  <option value="FinoTrato Gold Cachorro RMP">FinoTrato Gold Cachorro RMP</option>
                  <option value="FinoTrato Gold Cachorro RM">FinoTrato Gold Cachorro RM</option>
                  <option value="FinoTrato Gold Cachorro RG">FinoTrato Gold Cachorro RG</option>
                  <option value="FinoTrato Gold Adulto RMP">FinoTrato Gold Adulto RMP</option>
                  <option value="FinoTrato Gold Adulto RM">FinoTrato Gold Adulto RM</option>
                  <option value="FinoTrato Gold Adulto RG">FinoTrato Gold Adulto RG</option>
                  <option value="FinoTrato Gold Gatitos RMP">FinoTrato Gold Gatitos RMP</option>
                  <option value="FinoTrato Gold Gatos RMP">FinoTrato Gold Gatos AD</option>
                  <option value="FinoTrato Gold Gatos Castrados">FinoTrato Gold Gatos Castrados</option>
                  <option value="FinoTrato Prime Cachorro RMP">FinoTrato Prime Cachorro RMP</option>
                  <option value="FinoTrato Prime Adulto RMP">FinoTrato Prime Adulto RMP</option>
                  <option value="FinoTrato Prime Cachorro RG">FinoTrato Prime Cachorro RG</option>
                  <option value="FinoTrato Prime Adulto RG">FinoTrato Prime Adulto RG</option>
                  <option value="FinoTrato Prime Sensitive">FinoTrato Prime Sensitive</option>
                  <option value="FinoTrato Prime Senior RM">FinoTrato Prime Senior RM</option>
                  <option value="FinoTrato Prime Senior RG">FinoTrato Prime Senior RG</option>
                  <option value="FinoTrato Prime Activet RG">FinoTrato Prime Activet RG</option>
                  <option value="FinoTrato Prime Ligth RM">FinoTrato Prime Ligth RM</option>
                  <option value="FinoTrato Prime Ligth RG">FinoTrato Prime Ligth RG</option>
                  <option value="FinoTrato Prime Gatitos">FinoTrato Prime Gatitos</option>
                  <option value="FinoTrato Prime Gatos Adultos">FinoTrato Prime Gatos Adultos</option>
                  <option value="FinoTrato Prime Gatos Castrado">FinoTrato Prime Gatos Castrado</option>
                   </select><br>


                <select name="Peso" class="form-control" required>
                  <option disabled selected> Selecione La cantidad de kilos Correspondiente</option>
                  <option value="1 kl.">1 kl.</option>
                  <option value="3 kl.">3 kl.</option>
                  <option value="4 kl.">4 kl.</option>
                   <option value="7.5 kl.">7.5 kl.</option>
                  <option value="10 kl.">10 kl.</option>
                  <option value="15 kl.">15 kl.</option>
                  <option value="20 kl.">20 kl.</option>
                   <option value="25 kl.">25 kl.</option>
                </select>
                  <br>
                <input type="text" name="lote" placeholder="Escriba el Lote Correspondiente" class="form-control">
                
                 
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