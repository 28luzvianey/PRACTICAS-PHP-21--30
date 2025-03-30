<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 26</title>
</head>
<body>
    <header><h1>Dado 3 números, devolver en orden ascendente. </h1></header>
    <main>
        <section>
            <form action="" method="post">
                <label for="num1">Ingresa el número 1</label>
                <input type="number" id="num1" name="num1"><br><br>
                <label for="num2">Ingresa el número 2</label>
                <input type="number" id="num2" name="num2"><br><br>
                <label for="num3">Ingresa el número 3</label>
                <input type="number" id="num3" name="num3"><br><br>
                <button type="submit">Enviar</button><br><br>
            </form>
            <?php
            //Practica que nos ordena de manera ascendente los 3 numeros ingresados
            // y los guarda en una variable cada una utilizamos condicionales para
            //determinar el numero menor, así como tambien para el numero mayor,
            // para el número intermedio se suman los tres numeros y se suman el mayor
            // y menor para luego restarlo alos 3 numeros  y así obtnerlo por ultimo
            //  agarroja el mensaje.

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Datos de salida
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $n3 = $_POST['num3'];
              //Proceso
                if($n1>$n2 && $n1<$n3){
                  $menor = $n1;
                }else if($n2<$n1 && $n2<$n3){
                    $menor = $n2;
                }else{
                    $menor =$n3;
                }

                if($n1>$n2 && $n1>$n3){
                    $mayor =$n1;
                }else if($n2>$n1 && $n2>$n3){
                    $mayor =$n2;
                }else{
                    $mayor =$n3;
                }
                $intermedio=
                ($n1+$n2+$n3)-($mayor+$menor);
                //Datos de salida
                echo"El número menor es $intermedio,". " "  ."el número intermedio es $menor ,"."  " ."el mayor es $mayor " ." .<br><br>";
               
            }
            ?>

        <a href="PRACT27.php">Siguiente práctica</a><br><br>
        </section>
    </main>
    <footer>@Luz Vianey</footer>
</body>
</html>