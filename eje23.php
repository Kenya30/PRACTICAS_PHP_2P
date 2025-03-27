<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 23</title>
</head>
<body>
    <center>
   <main> 
<section>
    <h1>Numeros multiplos de 3 y 5</h1>
<form action="" method="POST">
    <label for="num">Ingresa un numero:</label>
    <input type="number" id="num" name="num">
    <button type="submit">VERIFICAR</button> <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST['num'];

    if ($num % 3 == 0){
        echo "$num es multiplo de 3 y 5";    
} else if ($num % 5 ==0) {
    echo "$num es multiplo de 3 y 5";
}else {
    echo "$num NO es multiplo de 3 y 5";
}
}


?>
<br><br> <a href="eje24">Siguiente Practica</a><br><br>
<footer>Kenia Ramos</footer>

</section>
</main>
</center>
</body>
</html>