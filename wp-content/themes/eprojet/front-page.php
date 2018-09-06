<?php 
    get_header(); ; //inclusion de header.php
?>



    <?php
        if (have_posts()) :
            while(have_posts()) : the_post();
    ?>
            <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="col-lg-12"><?php the_content(); ?></div>
    <?php
            endwhile;
        else : 
            echo '<p> Aucun contenu ne correspond à votre demande... </p>';
        endif;
    ?>


    <div class="col-lg-6"> 
        <?php
            get_sidebar('droite'); //inclusion de sidebar-droite.php
        ?>
    </div>


    <?php
        $arg = array(
            'post_type' => 'professionnel', //slug du CPT "annonce"
            'posts_per_page' => 3   // correspond à LIMIT 1 dans SQL pour sélectionner le premier élément
        );

        $query = query_posts($arg);
    ?>


    <div class="col-lg-6">
        <hr>
        <h2>Derniers inscrits</h2>

        <?php
            if(have_posts()) :
                while (have_posts()) : the_post();
        ?>

        <div>

            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('photo'); ?>" class="img-fluid" alt=""></a>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <div>Code postal : <?php the_field('code_postal'); ?></div>

        </div>

        <?php
                endwhile;
            else :
                echo '<p>Pas encore d\'annonce...</p>';
            endif;
        ?>

    </div>



<?php
    get_footer(); // inclusion de footer.php
?>