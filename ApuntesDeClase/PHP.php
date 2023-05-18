<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Comentando
    /*
    seguir
    escribiendo
    */

    //Constantes
    const CONSTANTE = 'Soy una constante';
    
    echo CONSTANTE;
    define("Hola2","56.5");

    //Tipos de datos


       //De tipo entero
    $var1 = 1;
    $var2 = 50;

       //De tipo Flotantes o decimales
    $flotante = 5.5;
    $pi = 3.1416;

      //Nulos
    $sereNulo = NULL;

    echo $var2, $pi, $sereNulo;
    echo "<br>";
    echo $pi;
    echo "<br>";
    echo $pi;

      //Bool
    $variable = true;

      //Cadena (string)
    $cadenita = 'chambear';
    echo $cadenita;

    echo "<br>", $var1, "<br>", $cadenita, "<br>";
    
    print("Soy un print");
    printf("El numero pi es: %s", $pi);
    //en php se puede usar ek código ascci

    echo "<br>";
    //te deja ver el número de bites que ocupa y el tipo de dato, string, etc..
    var_dump($cadenita);
    //Concatenar
    echo "<br>". $var1 . "<br>" . $cadenita . "<br>";

    $entero1 = 10;
    $entero2 = 5;
    $entero3 = 11;
    
    $entero1 = $entero2 % $entero3;

    //$entero1 += $entero2;
    echo $entero1;

    ?>

</body>
</html>