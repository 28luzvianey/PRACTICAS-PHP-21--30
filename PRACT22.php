<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 22</title>
</head>
<body>
    <header><h1>Dado un cáracter determinar si es una vocal.</h1></header>
    
    <main>
        <section>
            <form action="" method="post">
                <label for="caracter"> Ingresa un caracter:</label>
                <input type="text" id="caracter" name="caracter"><br><br>
                <button type="submit">Verificar</button><br><br>
            </form>

            <?php
            // En el siguinete código utilice condicionales if-else if-else
            //  para determinar si el caracter que ingresamos en el formulario
            //  es una vocal o no y almacenamos el mensaje en la variable resultado.
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //Datos de entrada
$caracter=$_POST['caracter'];
    //proceso
    if($caracter =='A'||$caracter =='a'){
        $resultado = "Es vocal";
    }else if($caracter =='E'||$caracter =='e'){
        $resultado = "Es vocal";
    }else if($caracter =='I'||$caracter =='i'){
        $resultado = "Es vocal";
    }else if($caracter =='O'||$caracter =='i'){
        $resultado = "Es vocal";
    }else if($caracter =='U'||$caracter =='u'){
        $resultado = "Es vocal";
    }else {
       $resultado ='No es vocal';
        }
        //Dato de salida
        echo"El caracter ingresado: $resultado.";

    }
        ?>
            <a href="PRACT23.php">Siguiente práctica</a><br><br>

        
      </section>
    </main>
    <footer>@Luz Vianey</footer>
</body>
</html>