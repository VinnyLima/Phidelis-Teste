<footer>
    <div class="container">
      <p>&copy; Your Website 2020. All Rights Reserved.</p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </footer>

  <!-- Initialize Swiper -->
  <script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/jquery.min.js"></script>  
  <script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo get_template_directory_uri() ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="<?php echo get_template_directory_uri() ?>/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo get_template_directory_uri() ?>/js/new-age.min.js"></script>

  

   <script>
    var swiper = new Swiper('.swiper-container', {     
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>


</body>

</html>
