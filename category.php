<?php get_header() ?>
<main class="site__main">
    <h1>Catégories</h1>
    
    <a href="?cletri=title&ordre=asc">Ascendant</a>
    <a href="?cletri=title&ordre=desc">Descendant</a>
        <?php wp_nav_menu(array(
            "menu"=> "categorie_cours",
            "container" => "nav"
        ));
        ?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php
                if(is_category(array('cours', 'web', 'jeu', 'creation-3d', 'utilitaire', 'design', 'video'))):
                    get_template_part('gabarit/content','cours');
                else:
                    get_template_part('gabarit/content','macrame');
            endif
                ?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>