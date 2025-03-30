<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 30</title>
</head>
<body>
    <header><h1>Despues de ingresar 4 notas, obtener el promedio<br>de las 3 mejores notas y el mensaje de aprobado<br>
        si el promedio es mayor o igual a 11, <br>
        caso contrario que nos diga reprobado.</h1></header>
        <main>
            <section>
                <form action="" method="post">
                    <label for="nota1">Ingresa la 1era nota</label>
                    <input type="number" id="nota1" name="nota1"><br><br>
                    <label for="nota2">Ingresa la 2da nota</label>
                    <input type="number" id="nota2" name="nota2"><br><br>
                    <label for="nota3">Ingresa la 3era nota</label>
                    <input type="number" id="nota3" name="nota3"><br><br>
                    <label for="nota4">Ingresa la 4ta nota</label>
                    <input type="number" id="nota4" name="nota4"><br><br>
                    <button type="submit">Obtener promedio</button>
                </form>

    <?php

    
//Código que pide ingresar 4 notas obtenidas y muestra el promedio de las 3 mejores,
//almacena los valores en la variable nota1 - nota4, primero los ordena de mayor a menor, y calcula el promedio. 
//Arroja el promedio, si el numero ingresado es mayor o iguala a 0 manda mensaje de aprobado y si no reprobado.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Datos de salida
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    //Proceso
    //Ordenar las notas de mayor a menor
    $notas = array($nota1, $nota2, $nota3, $nota4);
    rsort($notas);//Ordenar de mayor a menor

    //Calcular el promedio de la 3 mejores notas
    $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

    //Mostrar el resultado
    //Datos de salida
    echo "<p>El promedio de las 3 mejores notas es: " . number_format($promedio, 2) ."</p>"; //formatear a 2 decimales

    //Mensaje de aprobado o reprobado
    //Proceso
    if($promedio >=6){
      //Datos de salida
        echo"<p>APROBADO</p>";
    } else {
       //Datos de salida
        echo"<p>REPROBADO</p>";
      }
    
    }
    ?>
            </section>
        </main>
    

<footer><p>@Luz Vianey</p></footer>
</body>
</html>