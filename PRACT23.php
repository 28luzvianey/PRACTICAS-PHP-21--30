<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 23</title>
</head>
<body>
    <header><h1>Determina si un número es multiplo de 3 y 5.</h1></header>
        
        <main>
            <section>
                <form action="" method="post">
                    <label for="num">Ingresa un número</label>
                    <input type="number" id="num" name="num"><br><br>
                    <button type="submit">Operar</button><br><br>
                </form>
                <?php
                 //Código que muestra si el número ingresado es multiplo de 3 y 5,
                 //  almacenamos la variable numero en num, aplicamos condicionales 
                 // if-else para que luego nos arroje nuestro resultado en la varible mensaje
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //Datos de entrada
                    $num=$_POST['num'];
                    //Proceso
                    if($num % 3 == 0  && $num % 5 == 0 ){
                    $mensaje = "El número" . " " . $num ." " ."es multiplo de 3 y 5.";
                    }else{
                    $mensaje = "El número" . " " . $num . " " . " no es multiplo de 3 y 5.";
                     }
                     //Dato de salida
                  echo $mensaje;
                }
            
                ?>
                <a href="PRACT24.php">Siguiente práctica</a><br><br>
                </section>
            </main>
<footer>@Luz Vianey</footer>
</body>
</html>