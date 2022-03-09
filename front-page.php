<?php get_header() ?>
<main class="site__main">

<section class="animation">
<div class="animation__bloc">Dévelopement de jeux</div>
<div class="animation__bloc">Infographie</div>
<div class="animation__bloc">Dévelopement Web</div>
<div class="animation__bloc">Montage vidéo</div>
<div class="animation__bloc">Création 3D</div>

</section>      
            <?php if (have_posts()): while(have_posts()) : the_post(); ?>
            <?php the_title() ?>
            <?php the_content() ?>
            <?php endwhile; ?>
        <?php endif ?>
</main>
<?php get_footer() ?>
