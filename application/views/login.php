<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>boos/css/bootstrap.css">
    <script src="<?php echo base_url();?>boos/js/bootstrap.js"></script>
   
   
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Kdam+Thmor+Pro&family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Bienbenido  Union Agronegocios</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?php echo base_url();?>adminlte/img/union.png" type="img/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?php echo base_url();?>adminlte/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">

               <div class="login_section">

                  <div class="logo_login">

                     <div class="center">
                        <img width="210" src="<?php echo base_url();?>adminlte/img/union.png" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                    <div class="login-logo">
                      
    <center><h1>Bienvenidos </h1></center>
    
  </divm>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <?php

      switch ($msg)
      {
        case '1';
        $mensaje="ERROR DE INGRESO";
        $clase="primary";
        break;
        case '2';
        $mensaje="ACCESO NO VALIDO";
        $clase="danger";
        break;
        case '3';
        $mensaje="GRACIAS POR USAR EL SISTEMA ";
        $clase="warning";
        break;
        default:
        $mensaje="INGRESE SU USUARIO Y CLAVE PARA INICIAR SESION";
        $clase="primary";
        break;
      } 
        

      ?>


      <p class="login-box-msg text-<?php echo $clase; ?>"><?php echo $mensaje; ?></p>





<?php

echo form_open_multipart('usuarios/validarusuario', array('id'=>'form1','class'=>'needs-validation','method'=>'post'));



?>
                     <form>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Login</label>
                              <input type="text" class="form-control" placeholder="Login" name="login"/>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" class="form-control" placeholder="password" name="password"/>
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="<?php echo base_url(); ?>index.php/usuarios/sent">olvide mi contraseña</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
                 </div>
    <?php

    echo form_close();


    ?>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?php echo base_url();?>adminlte/js/jquery.min.js"></script>
      <script src="<?php echo base_url();?>adminlte/js/popper.min.js"></script>
      <script src="<?php echo base_url();?>adminlte/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url();?>adminlte/js/animate.js"></script>
      <!-- select country -->
      <script src="<?php echo base_url();?>adminlte/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo base_url();?>adminlte/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo base_url();?>adminlte/js/custom.js"></script>
   </body>
</html>