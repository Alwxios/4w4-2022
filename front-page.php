<?php get_header() ?>
<main class="site__main">

<h2>Activités en TIM</h2>
<?php 
        wp_nav_menu(array("menu"=>"menu_accueil",
                            "container"=>"nav"));
?>
<h2>Les événements importants pour l'année</h2>
<?php 
        wp_nav_menu(array("menu"=>"Evenement",
                            "container"=>"nav"));
?>
<h2>Les ateliers à venir</h2>
<?php
        wp_nav_menu(array("menu"=>"Atelier",
                            "container"=>"nav"));
?>

   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>