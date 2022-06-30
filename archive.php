<?php get_header(); ?>

    <article class="l-article p-article">

      <div class="p-archive-visual">
        <div class="p-archive-visual__box">
          <h2 class="p-archive-visual__title c-title">
            Menu:<p class="p-archive-visual__text"><?php single_cat_title(); ?></p>
          </h2>
        </div>
      </div>

      <div class="p-archive-wrapper">

        <div class="p-subheading">
          <?php echo category_description(); ?>
        </div>

          <?php get_template_part('components/archive'); ?>

      </div>

      <?php wp_pagenavi(); ?>

    </article>

  </main>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>