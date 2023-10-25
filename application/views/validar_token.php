<!-- validar_token.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tus metatags, estilos y enlaces a archivos CSS/JS -->
</head>
<body>
    <h2>Validar Token</h2>
    <?php echo form_open('usuarios/validar_token'); ?>
    <label for="token">Código de Verificación:</label>
    <input type="text" id="token" name="token" required><br>
    <button type="submit">Validar Token</button>
    <?php echo form_close(); ?>
</body>
</html>
