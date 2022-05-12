<?php get_header() ?>
<main class="site__main">

</section>  
<h2>Activités au département du TIM</h2>    
<?php
    wp_nav_menu(array("menu"=>"menu_accueil",
                        "container"=>"nav"));
?>
<h2>Évènements pour l'année</h2>
<?php
    wp_nav_menu(array("menu"=>"evenement",
                        "container"=>"nav"));
?>
            <?php if (have_posts()): the_post(); ?>
            <?php the_title() ?>
            <?php the_content() ?>
        <?php endif ?>
</main>
<?php get_footer() ?>
