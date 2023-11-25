<?php
$url_base="http://localhost/tutorias/";

$servidor="localhost";
$BaseDeDatos="tutoriasonline";
$usuario="root";
$contrasenia="";

try{ 
    $conexion= new PDO("mysql:host=$servidor;bdname=$BaseDeDatos",$usuario,$contrasenia);
    $conexion->exec("USE $BaseDeDatos");
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>
<?php $ruta_base = 'http://localhost/tutorias/'; ?>
<!doctype html>
<html lang="en">
<head>
  <title>Tutorias Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo $ruta_base ?>css/menu.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $ruta_base ?>img/favicon.ico">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="<?php echo $ruta_base ?>css/principal.css" />  
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head> 
 
<body onload="init();"><header>

<ul class="menu">
  <li><a href="<?php echo $ruta_base ?>index.php">INICIO</a></li>

  <li>
    <a href="<?php echo $ruta_base ?>tutores.php">TUTORES</a>
  </li>
  <li>
    <a href="<?php echo $ruta_base ?>estudiantes.php">ESTUDIANTES</a>
  </li>

</header>