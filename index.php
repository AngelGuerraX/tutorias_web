
<?php 
include("bd.php");
include("templates/header.php"); 
?> 
  <br>  
  <div class="container">
      <div class="center">
          <div class="card">
            <div class="card-body">
              <h1>TUTORIAS ONLINE</h1>
            </div>
          </div>    
          <br>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="img/tutor1.jpg" height="280" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tutores</h5>
        <p class="card-text">Aqui podras encontrar tutores especializados en sus determinadas areas.</p>
        <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>tutores.php" role="button">Ver Tutores</a> 
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="img/est1.jpg" height="280" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Estudiantes</h5>
        <p class="card-text">Aqui podras aplicar para ser un estudiante de el tutor que seleccione.</p>
        <a name="" id="" class="btn btn-dark" href="<?php echo $ruta_base ?>Estudiantes.php" role="button">Ver Estudiantes</a> 
      </div>
    </div>
  </div>

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
<?php include("templates/footer.php"); ?>