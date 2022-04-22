<?php /* Template Name: Evenement */ ?>
<?php get_header() ?>
<main class="site__main">
    <article class="evenement"></article>
<?php if (have_posts()): the_post(); ?>
<section class="evenement__resume">
    <?php the_field('resume');?>
    </section>
    <p class="evenement__endroit">
    <?php the_field('endroit');?>
</p>
</article>
<?php endif ?>
</main>
<?php get_footer() ?>
