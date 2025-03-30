<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 29</title>
</head>
<body>
    <header><h1>Dado un número entero,<br> devolver el doble del número si el número es positivo,<br>
         el triple del número si es negativo, <br>y cero si el número es neutro.</h1></header>
<main>
    <section>
                <form action="" method="POST">
                <label for="numero">Ingresa un numero entero</label>
                <input type="number" id="numero" name="numero"  ><br><br>
                <button type="submit">Operar</button><br><br>
            </form>

        <?php
        //En este código nos pide ingresar un número si es positivo este nos devuelve
        //  el doble pero si es negativo devuelve el triple, tilizando condicionales
        //  para su ejecución devolviendonos el mensaje de resultado
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Datos de entrada
    $numero = intval($_POST['numero']);
     //Proceso
    if ($numero > 0) {
        $resultado = $numero * 2; 
    } elseif ($numero < 0) {
        $resultado = $numero * 3; 
    } else {
        $resultado = 0; 
    }
    //Datos de salida
    echo "<h1>El resultado es: $resultado</h1>";
}

        ?>
        <a href="PRACT30.php">Siguiente práctica</a><br><br>
    </section>
</main>

<footer>@Luz Vianey</footer>
</body>
</html>