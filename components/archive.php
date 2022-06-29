<?php
  if(have_posts()):
    while(have_posts()):
      the_post(); ?>
      <div class="p-card c-card">
      <?php
        if(has_post_thumbnail()):
          the_post_thumbnail("full");
        else :
          ?>
          <img src=“<?php echo esc_url( get_template_directory_uri() . "/../images/cheese-burger.png" ); ?>” alt=“” />
        <?php endif;?>
        <div class="p-card__content">
          <h3 class="p-card__content--titile"><?php the_title();?></h3>
          <div class="p-card__content--field">
            <?php the_excerpt(); ?>
          </div>
           <div class="p-card__content--button">
             <a href="<?php the_permalink(); ?>">詳しく見る</a>
           </div>
        </div>
      </div>
    <?php endwhile;
  endif;
?>







