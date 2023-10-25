<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       <h3 class="card-title">Por favor llene los campos para registrar la salida del Producto Correspondiente</h3>
      <div class="modal-body">
         <?php
        echo form_open_multipart('Producto/agregarsalidabd');
    ?>

               <select name="idSalida" class="form-control form-select " required >
                <option value="" disabled selected> Selecione Un Producto</option><br><br>

                <?php
                    
                    foreach($infosalida->result() as $row)
                    {
                        ?>

                        <option value="<?php echo $row->idSalida; ?>"> <?php echo $row->producto; ?></option>

                        <?php
                      }
                      ?>
               </select>
                 <br><br>


               

                Escriba la cantidad
                <input type="text" name="cantidad"  class="form-control">

                Escriba el peso
                <input type="text" name="kilos"  class="form-control">

                Escriba el Lote Correspondiente
                <input type="text" name="Lote"  class="form-control">

              
               <br><br>
                
               
                <button type="submit" class="btn btn-outline-success">Agregar</button>

    <?php
        echo form_close();
    ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>