<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 28</title>
</head>
<body>
    <header><h1>Dado la edad de una persona determinar <br>si es mayor de edad o menor de edad,<br>
     considere que mayor de edad es mayor o igual a 18.</h1></header>
    <main>
        <section>
            <form action="" method="post"> 
            <label for="edad">Ingresa tú edad:</label>
            <input type="number" id="edad" name="edad"><br><br>
            <button type="submit">Enviar</button><br><br>
            </form>

            <?php
            // Código que muestra si eres mayor de edad o no al ingresar tú edad
            // utilizando condicionales if-else if-else y así mostrarnos el mensaje
            //  de acuerdo ala condición
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Datos de entrada
                $edad=$_POST['edad'];
                //Proceso
                if($edad<=17){
                   //Datos de salida
                 echo "Eres menor de edad.<br><br>";
                
                }else if($edad>=18){
                   //Datos de salida
                 echo "Eres mayor de edad.<br><br>" ;
                }else{
                    //Datos de salida
                 echo "Error";
                }
            }
            ?>
            <a href="PRACT29.php">Siguiente práctica</a><br><br>
        </section>
    </main>
<footer>@Luz Vianey</footer>
</body>
</html>