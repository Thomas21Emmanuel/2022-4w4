<?php
/**
 *  Le modèle résultats de recherche search.php
 *
 * Affiche les résultats de recherche
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cidw-4w4
 */
?>
<?php get_header() ?>
<main class="site__main">
    <?php if(have_posts()): while (have_posts()): the_post(); ?>
    <?php endwhile; ?>
    <?php else :  ?>
    <?php endif ?>
</main>

<?php get_footer() ?>