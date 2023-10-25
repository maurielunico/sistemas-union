<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
<style type="text/css">
        body{
            background-color: grey;
            color: red;
        }
    </style>

<h1>Inicio</h1>
<div class="container">
        <div class="row">
            <div class="col-md-12">

            <a href="<?php echo base_url(); ?>index.php/estudiante/japi_listalte">
                <button type="button" class="btn btn-warning">Ver lista habilitados</button>
            </a>

            <h1>Lista de Productos Descartados</h1>

             <table class="table">
                <tr>
                    <td>N°</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    
                    <td>Habilitar</td>
                </tr>

                <?php
                    $indice=1;
                    foreach($producto->result() as $row)
                    {
                        ?>

                        <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $row->producto; ?></td>
                            <td><?php echo $row->precio; ?></td>
                            


                            
                            </td>

<td>
<?php
        echo form_open_multipart('estudiante/habilitarbd');
    ?>
       <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
       <button type="submit" class="btn btn-warning">HABILITAR</button>        

    <?php
        echo form_close();
    ?>        
</td>

                        </tr>

                        <?php
                        $indice++;
                    }

                ?>

                
             </table>

        </div>

     </div>
</div>


<style type="text/css">
        body{
            background-color: grey;
            color: red;
        }
    </style>

<h1>Inicio</h1>
<div class="container">
        <div class="row">
            <div class="col-md-12">

            <a href="<?php echo base_url(); ?>index.php/estudiante/index">
                <button type="button" class="btn btn-warning">Ver lista habilitados</button>
            </a>

            <h1>Lista de Productos Descartados</h1>

             <table class="table">
                <tr>
                    <td>N°</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    
                    <td>Habilitar</td>
                </tr>

                <?php
                    $indice=1;
                    foreach($producto->result() as $row)
                    {
                        ?>

                        <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $row->producto; ?></td>
                            <td><?php echo $row->precio; ?></td>
                            


                            
                            </td>

<td>
<?php
        echo form_open_multipart('estudiante/habilitarbd');
    ?>
       <input type="hidden" name="idProducto" value="<?php echo $row->idProducto; ?>">
       <button type="submit" class="btn btn-warning">HABILITAR</button>        

    <?php
        echo form_close();
    ?>        
</td>

                        </tr>

                        <?php
                        $indice++;
                    }

                ?>

                
             </table>

        </div>

     </div>
</div>

