
<?php 
include("bd.php");
include("templates/header.php"); 

$sentencia=$conexion->prepare("SELECT * FROM estudiantes");
$sentencia->execute();
$lista_de_estudiantes=$sentencia->fetchAll((PDO::FETCH_ASSOC));

?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>|| ESTUDIANTES ||</h1>
            </div>
          </div>    
          <br>
  <div class="card">
    <div class="card-header">      
    <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>crear_estudiante.php" role="button">Quiero Registrarme como Estudiantes</a>       
    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
       <table class="table" id="tabla_id">
          <thead>
             <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Materia</th>
             </tr>
          </thead>
          <tbody>
       <?php foreach ($lista_de_estudiantes as $registro) { ?>

             <tr class="">
                <td scope="row"><?php echo $registro['id']?></td>
                <td scope="row"><?php echo $registro['nombres']?><?php echo $registro['apellidos']?></td>
                <td scope="row"><img width="100" height="25" src="<?php echo $registro['foto']; ?>" class="img-fluid rounded" alt=""/></td>
                <td scope="row"><?php echo $registro['correo']?></td>
                <td scope="row"><?php echo $registro['telefono']?></td>
                <td scope="row"><?php echo $registro['materia']?></td>
             </tr>
       <?php } ?>
          </tbody>
       </table>
    </div>
    
    </div>
 </div>



 <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
      <br>
      <br>
    </div>
</div>
<br>
<?php include("templates/footer.php"); ?>