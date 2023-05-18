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
$nombre = (isset($_POST["Nombre"]) && $_POST["Nombre"]!="") ? $_POST["Nombre"]: false;
if(isset($_FILES['archivo'])){
  $name = $_FILES['archivo']['name'];
  $arch = $_FILES['archivo']['tmp_name'];
  $ext = pathinfo ($name, PATHINFO_EXTENSION);
  $nombreDeArchivo = pathinfo ($name, PATHINFO_FILENAME);
  $base = pathinfo ($name, PATHINFO_BASENAME);
  $dir = pathinfo ($name, PATHINFO_DIRNAME);
  rename ($arch, "./img/subirArchivos.$ext");
  echo "Guardado";
  }else{echo "Error";}


$Dir =opendir("./img");
$hay_archivo = true;
$archivos = [];
while ($hay_archivo){
  $archivo = readdir($Dir);
  if($archivo){
    array_push($archivos, $archivo);
  }else{
    $hay_archivo=false;
  }
}

echo "<table>
<tbody>
  <tr>
     <td>Nombre:</td>
     <td>Imagen</td>
  </tr>
</tbody>";
foreach ($archivos as $archivo){
if($archivo != '.' && $archivo != '..'){
$nombreArch=pathinfo($archivo, PATHINFO_FILENAME);
 echo"<tr>
         <td>".$nombreArch."</td>
         <td><img src="./img/'.$archivo.'" height="200px"></td>
      </tr>";
}
}
echo"</table><br>";
?>
</body>
</html>