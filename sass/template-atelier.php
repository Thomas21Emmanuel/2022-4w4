<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">
    <article class="atelier"></article>
<?php if (have_posts()): the_post(); ?>
<section class="atelier__animateur">
    <?php the_field('animateur');?>
    </section>
    <p class="atelier__local">
    <?php the_field('local');?>
</p>
<p class="evenement__date">
    <?php the_field('date');?>
</p>
<p class="evenement__heure">
    <?php the_field('heure');?>
</p>
<p class="evenement__organisateur">
    <?php the_field('organisateur');?>
</p>
</article>
<?php endif ?>
</main>
<?php get_footer() ?>
