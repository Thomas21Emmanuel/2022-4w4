<?php get_header() ?>
<main class="site__main">
    <h1>Cours</h1>
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme de TIM</h2>
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