<?php get_header(); ?>

<article class="l-article p-article">

   <div class="p-archive-visual">
     <div class="p-archive-visual__box">
       <h2 class="p-archive-visual__title c-title">Search:</h2><p class="p-archive-visual__text"><?php echo get_search_query(); ?></p>
     </div>
   </div>

   <div class="p-archive-wrapper">

     <div class="p-subheading">
       <?php echo category_description(); ?>
     </div>

     <?php get_template_part('components/search'); ?>

   </div>

   <?php wp_pagenavi(); ?>

 </article>

</main>

<?php get_sidebar(); ?> 

<?php get_footer(); ?>