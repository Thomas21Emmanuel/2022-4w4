<?php
       
        $categories = get_the_category();
        //var_dump($categories);
    ?>
<article class="formation__cours <?php echo $categories[1]->slug; ?>">
    <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 4, -6);
                       // $nbHeures = substr($titre, -6);
                        $nbHeures = get_field("nombre_dheures");
                        $departement = get_field('departement');
                        $descCours = get_the_content();
                        $no_departement = substr($departement,0,3);
                        $sigleCours =  substr($titre, 0, 4);
                        ?>
                        <code style='display:none'><?= $descCours; ?></code>
    <?php echo the_post_thumbnail("thumbnail"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?></a></h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= wp_trim_words($descCours, 15, '<button class="cours__desc__suite"> la suite </button>'); ?></p>
    <p class="cours__dep"><?= $departement; ?></p>
</article>