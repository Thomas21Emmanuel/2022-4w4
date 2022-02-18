<?php get_header() ?>
<main class="principal">
</section>
    <h1>page.php</h1>       
            <?php if (have_posts()): the_post(); ?>
            <?php the_title() ?>
            <?php the_content() ?>
        <?php endif ?>

</main>
<?php get_footer() ?>