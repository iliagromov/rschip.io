<?php get_header();


 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="entry">
   <?php the_content(); ?>
 </div>

  <?php endwhile; endif; ?>
<?php

          
          get_footer();