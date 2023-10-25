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
        body{
            background-color: darkred;
        }
    </style>
     <
    
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/in/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/in/assets/img/favicon.png">
    <title>
        Olvide mi contraseña
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?php echo base_url(); ?>/in/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/in/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo base_url(); ?>/in/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo base_url(); ?>/in/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?php echo base_url(); ?>/in/assets/img/curved-images/curved14.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Olvide mi contraseña!</h1>
                            <p class="text-lead text-white">Ingresa tu correo electronico con el que te registraste para poder hacer cambio de tu contraseña.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h3>Ingresa tu correo electronico</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('usuarios/send_recovery_email')
                                ?>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico:</label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Enviar Correo de Recuperación</button>
                                    <?php if ($this->session->flashdata('error_message')) : ?>
                                        <div class="btn bg-gradient-dark w-100 my-4 mb-2">
                                            <?php echo $this->session->flashdata('error_message'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php
                                echo form_close()
                                ?>
                                <?php
                                // </form>
                                ?>
                                <p class="text-sm mt-3 mb-0">Si ya tienes una cuenta? <a href="<?php echo base_url(); ?>index.php/usuarios/index" class="text-dark font-weight-bolder">Inica seccion</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>/in/assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/in/assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/in/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>/in/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url(); ?>/in/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>