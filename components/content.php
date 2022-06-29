<?php if (have_posts()) : 
  while (have_posts()) : the_post(); ?>
    <div class="p-single-visual">
      <?php
        if(has_post_thumbnail()):
          the_post_thumbnail("full");
        else:
          
        endif;
      ?>
      <h1 class="p-single-visual__title">
        <?php the_title();?>
      </h1>
    </div>

    <div class="p-single-page-wrapper">
      <?php the_content(); ?>
    </div>

  <?php endwhile; 
endif;
?>