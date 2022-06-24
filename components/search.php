<?php
  if(have_posts() && get_search_query()):
    while(have_posts()):
      the_post(); ?>
      <div class="p-card c-card">
      <?php
        if(has_post_thumbnail()):
          the_post_thumbnail("full");
        endif;?>
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
    <?php endwhile;?>
  <?php elseif (!get_search_query()) : ?>
    <p>検索ワードが入力されてないから入力してね！</p>
  <?php else : ?>
    <p>該当する記事はないんで〜！</p>
  <?php endif; ?>