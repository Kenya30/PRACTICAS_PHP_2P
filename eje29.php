<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 29</title>
</head>
<body>
    <center>
<header><h1>Verificar numero entero</h1></header>
<form action="" METHOD="POST">
<label for="numero">Ingrese un numero entero:</label>
<input type="number" id="numero" name="numero" required><br><br>
<button type="submit">ENVIAR</button> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $numero=$_POST['numero'];
    
    if($numero>0){
        echo "El doble del numero es: " . ($numero * 2) . "<br>";

    } else if ($numero < 0){
        echo "El triple del numero es: " . ($numero * 3) . "<br>";

    } else {
        echo "El numero es neutro, por lo que el resultado es: 0 <br>";
    }
}
?>

<br><br><footer>Kenia Ramos</footer><br><br>
<a href="eje30.php">Siguiente Practica</a>
</center>
</body>
</html>