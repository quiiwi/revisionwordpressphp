        </div> <!-- cette balise ferme un div ouvert dans header.php -->
    </section>  <!-- cette balise ferme une section ouverte dans header.php -->

    <footer class="container-fluid align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <div id="">
                        <?php
                            dynamic_sidebar('footer-gauche');
                        ?>
                    </div>

                </div><!-- fin .col -->

                <div class="col-lg-4">
                    <p>&copy; Mes petites annonces - 2018</p>
                </div><!-- fin .col -->

                <div class="col-lg-4">
                    <?php 
                        wp_nav_menu('secondary'); //On appelle la zone de menus d'id "secondary" directement dans un string (sans array) quand il n'y que l'id en argument
                    ?>
                </div><!-- fin .col -->
            </div><!-- fin .row -->
        </div>
    </footer>

    <?php wp_footer(); ?> <!-- permet d'inclure les éventuelles scripts avant la fermeture du body s'ils sont déclarés dans le fichier functions. Cette inclusion est obligatoire. -->
</body>
</html>