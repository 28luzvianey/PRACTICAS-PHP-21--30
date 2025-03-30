<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 21</title>
</head>
<body>
    <header><h1>Dado 3 números enteros diferentes,<br> devolver el mayor.</h1></header>
    <main>
        <section>
            
        
        
    
    <form action="" method="POST">
        <label for="numero1">Ingresa el 1er número</label>
        <input type="number" id="numero1" name="numero1"><br><br>
        <label for="numero2">Ingresa el 2do número</label>
        <input type="number" id="numero2" name="numero2"><br><br>
        <label for="numero3">Ingresa el 3er número</label>
        <input type="number" id="numero3" name="numero3"><br><br>
        <button type="submit">Enviar</button><br><br>
    </form>
    <?php
    //Este código nos muestra el resultado de ingresar 3 números y compararlos, 
    // para así arrojarnos  el numero mayor de los que ingresamos, utilizando las condionales de if-else if-else 
    //insertamos un link  para  enlazarnos ala siguiente prática, así como lo hice en las demás
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Datos de entrada
        $numero1 =$_POST['numero1'];
        $numero2 =$_POST['numero2'];
        $numero3 =$_POST['numero3'];
        
        //Proceso
        if($numero1>$numero2 && $numero2>$numero3){
         //Datos de salida
         echo"El número mayor es: $numero1 ";
        }else if($numero2>$numero1 && $numero2>$numero3){
         //Datos de salida
          echo"El número mayor es: $numero2 .";
        }else{
            //Dato de salida
           echo"El número mayor es: $numero3. ";
        }

        }
    
        
    ?>
    <a href="PRACT22.php">Siguiente práctica</a>
      </section>
      </main>
    <footer>
         <p>@Luz Vianey</p>
    </footer>
    
</body>
</html>