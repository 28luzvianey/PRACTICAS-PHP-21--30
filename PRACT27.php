<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 27</title>
</head>
<body>
    <header><h1>Elabore un algoritmo que resuelva una ecuación de primer grado. </h1></header>
    <main>
        <section>
        <form action="" method="post">
    <label for="a">Ingresa un número</label>
    <input type="number" name="a" id="a"> <br><br>
    <label for="b">Ingresa el segundo número </label>
    <input type="number" name="b" id="b"> <br><br>
    <button type="submit">Operar</button> <br><br>
        </form>
        <?php
        //Código que permite resolver una ecuación de primer grado almacenando 
        //las variables que se utilizan en a y b. aquí se ingresan los valores de ellos para despues aplicar condicionales 
        // if- else si a == es igual a 0 y calcular el valor de x mediante -b /a para luego devolvernos el resultado.
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if (isset($_POST['a'])&&($_POST['a'])) {
         //Datos de entrada
         $a = $_POST['a']; 
         $b = $_POST['b']; 
        
         //Proceso

         // Verificar que 'a' no sea igual a 0
         if ($a == 0) {
              echo "La ecuación no es de primer grado ya que el coeficiente 'a' es 0.<br><br>";
         } else {
         // Calcular el valor de X
         $x = -$b / $a;
         // Mostrar el resultado
         //Datos de salida
             echo "La solución de la ecuación {$a}X + ({$b}) = 0 es: X = $x <br><br>";
            }


        }
    }
    ?>
    <a href="PRACT28.php">Siguiente práctica</a><br><br>
        </section>
    </main>
    <footer>@Luz Vianey</footer>
</body>
</html>

