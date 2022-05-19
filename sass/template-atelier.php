<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">
    <article class="atelier"></article>
<?php if (have_posts()): the_post(); ?>
<h1 class="atelier__titre">
    <?php the_field('titre');?>
</h1>
<h2>
    Description de l'atelier
</h2>
<section class="atelier__animateur">
    <p>L'animateur de l'atelier :
    <?php the_field('animateur');?>
</p>
    </section>
    <p class="atelier__local">
        <p>L'atelier sera donné au local:
    <?php the_field('local');?>
</p>
</p>
<p class="atelier__description">
    <?php the_field('description');?>
</p>
<h2>Horaire et date de l'atelier</h2>
<p class="atelier__duree">
    <p>La durée de chacune des séances est de:
    <?php the_field('duree');?>
    heures
</p>
</p>
<p class="atelier__date__debut">
    <p>Date de début:
    <?php the_field('date_de_debut');?>
</p>
</p>
<p class="atelier__date__fin">
    <p>Date de fin :
    <?php the_field('date_de_fin');?>
</p>
</p>
<p class="atelier_journee">
    <p>La formation se donnera :
    <?php the_field('journee');?>
    </p>
</p>
<p class="atelier__heure">
    <p>L'horaire : De
    <?php the_field('heure_de_debut');?>
    à
    <?php the_field('heure_de_fin');?>
</p>
</article>
<?php endif ?>
</main>
<?php get_footer() ?>
