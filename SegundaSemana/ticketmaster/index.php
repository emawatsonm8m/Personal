<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="formato.css" type="imagen/icon">
</head>
<body>
    <?php

$nombre = (isset($_POST["Nombre"]) && $_POST["Nombre"]!="") ? $_POST["Nombre"]: false;
$apellido = (isset($_POST["Apellido"]) && $_POST["Apellido"]!="") ? $_POST["Apellido"]: false;
$zona = (isset($_POST["Zona"]) && $_POST["Zona"]!="") ? $_POST["Zona"]: false;
$boletos = (isset($_POST["Boletos"]) && $_POST["Boletos"]!="") ? $_POST["Boletos"]: false;
$artista = (isset($_POST["Artista"]) && $_POST["Artista"]!="") ? $_POST["Artista"]: false;
$fecha = (isset($_POST["Fecha"]) && $_POST["Fecha"]!="") ? $_POST["Fecha"]: false;
$extras = (isset($_POST["Extras"]) && $_POST["Extras"]!="") ? $_POST["Extras"]: false;
$tiempo = time()+(10*1);
setcookie ("Nombre", $nombre, $tiempo);
setcookie ("Apellido", $apellido, $tiempo);
setcookie ("Zona", $zona, $tiempo);
setcookie ("Boletos", $boletos, $tiempo);
setcookie ("Artista", $artista, $tiempo);
setcookie ("Fecha", $fecha, $tiempo);
setcookie ("Extras", $extras, $tiempo);

$zona1 = "Tepito <br><img class=claseImagen id=imagen1 src=Tepito.jpg alt=Tepito>";
$zona2 = "Arena México <br><img class=claseImagen id=imagen2 src=ArenaMexico.jpg alt=ArenaMexico>";
$zona3 = "Bellas Artes <br><img class=claseImagen id=imagen3 src=BellasArtes.jpg alt=BellasArtes>";
$zona4 = "Estadio Azteca <br><img class=claseImagen id=imagen4 src=EstadioAzteca.jpg alt=EstadioAzteca>";

$Tepito = "Tepito";
$ArenaMexico = "ArenaMexico";
$BellasArtes = "BellasArtes";
$EstadioAzteca = "EstadioAzteca";

if($zona == $Tepito){
$zona= $zona1;
}
if($zona == $ArenaMexico){
$zona= $zona2;
}
if($zona == $BellasArtes){
$zona= $zona3;
}
if($zona == $EstadioAzteca){
$zona=$zona4;
}


$zona11 = "Rap Local (he he he eh)<br><img class=claseArtista id=imagen1 src=1.jpg alt=Rap>";
$zona22 = "La Rosalia (Moto mami) <br><img class=claseArtista id=imagen2 src=2.jpg alt=Rosalia>";
$zona33 = "Orquesta Sinfónica  (La paraelisa)<br><img class=claseArtista id=imagen3 src=3.jpg alt=Orquesta>";
$zona44 = "Futbol (gooooooooool)<br><img class=claseArtista id=imagen4 src=4.jpg alt=Fut>";

$rap = "Rap";
$arena = "Rosalia";
$arte = "Orquesta";
$azteca = "Fut";

if($artista == $rap){
    $artista= $zona11;
    }
if($artista == $arena){
    $artista= $zona22;
    }
if($artista == $arte){
    $artista= $zona33;
    }
if($artista == $azteca){
    $artista=$zona44;
    }


if($boletos<=15){
    for($contador=1; $contador<=$boletos; $contador++){
        echo "<table>
        <thead>
          <tr>
            <th >TiketMaster    <img class=claseImagen id=imagen src=Código.jpg alt=Código para escanear></th>
          </tr>
        </thead>
    
        <tbody>
          <tr>
             <td>Comprador: $nombre $apellido</td>
          </tr>

          <tr>
             <td>Para: $zona</td>
          </tr>

          <tr>
             <td>Concierto de: $artista</td>
          </tr>

          <tr>
             <td>El día: $fecha</td>
          </tr>

          <tr>
             <td>Otros servicios: $extras</td>
          </tr>

          <tr>
             <td>Asiento: H$contador</td>
          </tr>
        </tbody>
    </table><br>";
    }
}else{
    for($contador=1; $contador<16; $contador++){
        echo "<table>
        <thead>
          <tr>
            <th >TiketMaster    <img class=claseImagen id=imagen src=Código.jpg alt=Código para escanear></th>
          </tr>
        </thead>
    
        <tbody>
          <tr>
             <td>Comprador: $nombre $apellido</td>
          </tr>

          <tr>
             <td>Para: $zona</td>
          </tr>

          <tr>
             <td>Concierto de: $artista</td>
          </tr>

          <tr>
             <td>El día: $fecha</td>
          </tr>

          <tr>
             <td>Otros servicios: $extras</td>
          </tr>

          <tr>
             <td>Asiento: H$contador</td>
          </tr>
        </tbody>
    </table><br>";
    }
    $boletos = $boletos-15;
    echo "<h2>Son más de 15 boletos. Faltan: $boletos</h2>";
}
if($boletos<1){
    echo "<h1>Error</h1>";
}
   ?>
</body>
</html>