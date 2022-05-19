<?php /* Template Name: Atlier */ ?>
<?php get_header() ?>
<main class="site__main">
   <?php if (have_posts()): the_post(); ?>
   <?php the_post_thumbnail(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
   <?php endif ?>
</main>
<?php get_footer() ?>
