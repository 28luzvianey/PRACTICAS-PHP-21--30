<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 25</title>
</head>
<body>
    <header><h1>Dado un número, devolver el doble si el número no es par,<br> caso contrario devolver el triple.</h1></header>
    
        <main>
        <section>
            <form action="" method="post">
                <label for="num">Ingresa un número :</label>
                <input type="number" id="num" name="num"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php
            //Código que nos pide ingresar un número y si este es par
            // nos devuelve el doble , pero si no nos devuelve el triple,
            //  se analiza si el numero ingresado es divisible entre 2 valor distinto a 0, manda nuestro mensaje de resultado.
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Datos de entrada
                $numero=$_POST['num'];
                //Proceso
                if($numero % 2 != 0){
                    $mensaje ="El doble del número ". " " . $numero . " " . "es:" . " " . ($numero * 2);
                }else{
                    $mensaje ="El triple del número" . " " . $numero . " " . "es" . " " .($numero * 3);
                }
                //Dato de salida
              echo $mensaje;
            }

            ?>
            <a href="PRACT26.php">Siguiente práctica</a><br><br>
            </section>
        </main>
<footer>@Luz Vianey</footer><br><br>
</body>
</html>