<?php 
    get_header(); ; //inclusion de header.php
?>



    <?php
        if (have_posts()) :
            while(have_posts()) : the_post();
    ?>
            <div class="col-lg-12"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
            <div class="col-lg-12"><?php the_field('ville'); ?></div>
            <div class="col-lg-12"><?php the_field('code_postal')?></div>
    <?php
            echo '<br>';
            endwhile;
        else : 
            echo '<p> Aucun contenu ne correspond à votre demande... </p>';
        endif;
    ?>


<?php
    get_footer(); // inclusion de footer.php
?>