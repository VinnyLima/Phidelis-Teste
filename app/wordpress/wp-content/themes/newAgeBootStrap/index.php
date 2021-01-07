<?php

get_header( );?>

<?php 
if(have_posts(  )):
  while (have_posts()):
    the_post(  );
    ?>

    <?php
    endwhile;
  else: ?>
    <h3>Posts not found!</h3>
    <?php endif; ?>

<?php get_footer( );