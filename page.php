<?php get_header(); ?>
  <article class="l-article p-article">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            if (has_post_thumbnail()) :
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src($id, 'full');
            else :
                $img = array(get_template_directory_uri() . 'images/pc_tomato-cheese.png');
            endif;
            ?>
            <div class="p-single-visual">
              <h1 class="p-main p-main__topImages" style="background-image: url('<?php echo $img[0]; ?>');">
                <a class="p-main__topTitle"><?php the_title(); ?></a>
              </h1>
            </div>
            <div class="p-single-page-wrapper">
              <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
  </article>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>