<!DOCTYPE html>
<html>
<head>
    <title>Saludo en PHP</title>
</head>
<body>

<?php
    // Verifica si se ha enviado un formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoge el valor del campo "nom" del formulario
        $nom = $_POST["nom"];
        
        // Saluda al usuario
        echo "Hola, " . $nom . "! Bienvenido.";
    }
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <!-- Campo de entrada para el nombre -->
    <label for="nom">Nombre:</label>
    <input type="text" name="nom">
    
    <!-- Botón de envío del formulario -->
    <input type="submit" value="Enviar">
</form>

</body>
</html>
