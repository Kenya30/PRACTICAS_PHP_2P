<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
    <center>
    <header><h1>Numeros par o inpar</h1></header>
    <main>
        <section>
        <form action="" method="POST">
        <label for="num">Ingresa un numero</label>
        <input type="text" name="num" id="num">
        <button type="submit">Calcular</button> <br><br>
        </form>
         
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['num'];
    if ($numero % 2 != 0) {
        $mensaje = "El doble del numero " . $numero . " es " . ($numero * 2);
    } else {
        $mensaje = "El triple del numero " . $numero . " es " . ($numero * 3);
    }
    echo $mensaje;
}
?>

    <br><br>
        </section>
    </main>
   
        <footer><p>Kenia Ramos</p></footer> 
        <a href="eje26.php">Siguiente Practica</a>
        </center>
</body>
</html>