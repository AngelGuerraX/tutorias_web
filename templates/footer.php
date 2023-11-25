
</main>
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: gray;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Aprende con nuestros tutores en linea</span>
          <button type="button" href="<?php echo $ruta_base ?>contactos.php" class="btn btn-outline-light btn-rounded">
            Contactanos!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: black;">
      © 2023 Copyright:
      <a class="text-white" href="">TutoriasOnline.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>    <!-- place footer here -->
    
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>



  </script>

    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>

<script>
    $(document).ready(  function(){
    $("#tabla_id").DataTable({
      "pageLength":4,
      lengthMenu:[
        [6,10,30,50],
        [6,10,30,50]
      ],
      "language":{
        "url":"https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
      }

    })
  });

</script>


</body>

</html>