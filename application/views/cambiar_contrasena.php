<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cambiar Contraseña</title>
</head>

<body>
    <h2>Cambiar Contraseña</h2>

    <?php echo form_open('usuarios/cambiar_contrasena'); ?>

    <label for="password">Nueva Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="confirm_password">Confirmar Contraseña:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br>

    <button type="submit">Guardar Contraseña</button>
    <?php echo form_close(); ?>
</body>

</html>
