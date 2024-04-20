<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO</title>
</head>
<body>
    <?php
    $pnombre=$_REQUEST["pnombre"];
    echo $pnombre;
    
    $snombre=$_REQUEST["snombre"];
    echo $snombre;
    
    $papellido=$_REQUEST["papellido"];
    echo $papellido;

    $sapellido=$_REQUEST["sapellido"];
    echo $sapellido;

    $edad=$_REQUEST["edad"];
    echo $edad;

    $telefono=$_REQUEST["telefono"];
    echo $telefono;

    $direccion=$_REQUEST["direccion"];
    echo $direccion;

    $genero=$_REQUEST["genero"];
    echo $genero;

?>   
</body>
</html>