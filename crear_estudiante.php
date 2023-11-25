
<?php include("bd.php");

if($_POST){
  print_r($_POST);
  print_r($_FILES);

  $nombres=(isset($_POST["nombres"])?$_POST["nombres"]:"");
  $apellidos=(isset($_POST["apellidos"])?$_POST["apellidos"]:""); 

  $foto=(isset($_FILES["foto"]['name'])?$_FILES["foto"]['name']:""); 
  $correo=(isset($_POST["correo"])?$_POST["correo"]:""); 
  $telefono=(isset($_POST["telefono"])?$_POST["telefono"]:""); 
  $materia=(isset($_POST["materia"])?$_POST["materia"]:""); 

  //preparar insercion
$sentencia=$conexion->prepare("INSERT INTO estudiantes (nombres, apellidos, foto, correo, telefono, materia)
VALUES (:nombres, :apellidos, :foto, :correo, :telefono, :materia);");

//Asignando los valores de metodo post(del formulario)
$sentencia->bindParam(":nombres", $nombres);
$sentencia->bindParam(":apellidos", $apellidos); 

$fecha_=new DateTime();
$nombreArchivo_foto=($foto!='')?$fecha_->getTimestamp()."_".$_FILES["foto"]['name']:"";
$tmp_foto=$_FILES["foto"]['tmp_name'];
if($tmp_foto!=''){
  move_uploaded_file($tmp_foto,"./".$nombreArchivo_foto);
}

$sentencia->bindParam(":foto", $nombreArchivo_foto);

$sentencia->bindParam(":correo", $correo);
$sentencia->bindParam(":telefono", $telefono);
$sentencia->bindParam(":materia", $materia);
$sentencia->execute();
header("Location:estudiantes.php");
};


?>
<?php include("templates/header.php"); ?>
<br><br> <br><br>
   
  <div class="container">
<div class="card">
   <div class="card-header">
      Registrate como Estudiante
   </div>
   <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input type="text"
          class="form-control" name="nombres" id="nombres" aria-describedby="helpId" placeholder="Escriba sus nombres">        

        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text"
          class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="Escriba sus apellidos">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Foto:</label>
        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
 
        <label for="correo" class="form-label">Correo:</label>
        <input type="text"
          class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
      </div>

      <div class="mb-3">
        <label for="apellidos" class="form-label">Telefono</label>
        <input type="text"
          class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="No. Telefono">
 
        <label for="apellidos" class="form-label">Materia</label>
        <input type="text"
          class="form-control" name="materia" id="materia" aria-describedby="helpId" placeholder="materia">
      </div> 
      </form>
   </div>
   <div class="card-footer text-muted">
      
   <button type="submit" class="btn btn-success">Agregar Estudiante</button>
      <a name="" id="" class="btn btn-danger" href="estudiantes.php" role="button">Cancelar</a>
   </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include("templates/footer.php"); ?>