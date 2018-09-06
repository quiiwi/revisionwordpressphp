<?php
    get_header();
?>

<div class="col-lg-9">

    <?php
        if (have_posts()) :
            while (have_posts()): the_post();
    ?>

        <h2><?php the_title(); ?></h2>

        <div class="info">
            <span>Téléphone :</span>
            <?php the_field('telephone'); ?>
        </div>

        <div class="info">
            <span>Code postal :</span>
            <?php the_field('code_postal'); ?>
            KM
        </div>

        <div class="info">
            <span>Ville :</span>
            <?php the_field('ville'); ?>
        </div>

    <?php
            endwhile;
        else:
            echo '<p> Aucune annonce ne correspond à vos critères ! </p>';
        endif;
    ?>

    <div>

        <a href="<?php bloginfo('url'); ?>/professionnel">Retour</a>

        <?php wp_nav_menu('third'); ?>

    </div>

    


</div>

<div class="col-lg-3">

    <?php
        get_sidebar('droite'); // inclusion du fichier qui s'appelle sidebar-droite.php
    ?>

</div>


<?php
    get_footer();
?>