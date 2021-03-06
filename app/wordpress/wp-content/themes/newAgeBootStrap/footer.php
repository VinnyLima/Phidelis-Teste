<section class="contact bg-primary" id="contact">
    <div class="container">
      <h2>We
        <i class="fas fa-heart"></i>
        new friends!</h2>
      <ul class="list-inline list-social">
        <li class="list-inline-item social-twitter">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item social-google-plus">
          <a href="#">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

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
      loop:true,   
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>


</body>

</html>
