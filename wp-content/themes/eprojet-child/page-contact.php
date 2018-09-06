<?php 
    get_header(); ; //inclusion de header.php
?>

<div class="col-lg-6">

 <?php
    get_sidebar('droite'); //inclusion de sidebar-droite.php
?>

</div>
<div class="col-lg-6">
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


</div>



<?php
    get_footer(); // inclusion de footer.php
?>