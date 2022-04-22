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
<p class="evenement__date">
    <?php the_field('date');?>
</p>
<p class="evenement__heure">
    <?php the_field('heure');?>
</p>
<p>
    <?php the_field('organisateur');?>
</p>
<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</article>
<?php endif ?>
</main>
<?php get_footer() ?>
