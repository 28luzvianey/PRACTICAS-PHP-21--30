<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 24</title>
</head>
<body>

        <h1>Determina si un número entero es par o impar.</h1>
        
            <main>
                <section>
                <form action="" method="post">
                    <label for="num">Ingresa un número</label>
                    <input type="number" id="num" name="num"><br><br>
                    <button type="submit">Operar</button><br><br>
                </form>
                <?php

                //Práctica que verifica si el número ingresado es par o impar, 
                // utilizamos la variable num para guardar o almacenar el número
                //  luego decimos si num es divisible entre 2 iguala a 0 entonces 
                // nos arrojará el mensaje que se cumplió.
                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    //Datos de entrada
                    $num=$_POST['num'];
                    //Proceso
                    if($num % 2 == 0){
                        $mensaje ="El número" . " " . $num . " " ."ingresado es par.";
                    }else{
                        $mensaje ="El número"." ". $num ." " ."ingresado es impar.";
                    }
                    //Dato de salida
                    echo $mensaje;
                }
                ?>
                <a href="PRACT25.php">Siguiente práctica</a><br><br>
                </section>
            </main>
 <footer>@Luz Vianey</footer>
</body>
</html>