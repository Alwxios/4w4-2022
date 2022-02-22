<?php get_header() ?>
<main class="site__main">
    <h1>---------- single.php -------</h1>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="cours">
            <h1 class="site__titre">
                <?php echo get_the_title() ?>
            </h1>
            <?php the_post_thumbnail('thumbnail');?>
            <section class="cours__contenu">
                <?php the_content(); ?>
            </section>
        </article>
    <?php endwhile ?>
    <?php endif; ?>
</main>
<?php get_footer() ?>

<!-- Si le code fonctionne pas, voir dans _single_cours.scss --> 