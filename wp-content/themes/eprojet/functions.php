<?php

//Création des zones de widgets :
function eprojet_init_sidebar(){ //notre fonction qui contient la décalration des zones de widgets
    register_sidebar(array(
        'name' => 'région entête', //Nom qui aooaraît dans le back-office
        'id' => 'region-entete',    //Identifiant unique de la pour pour pouvoir l'appeler dans un template
        'description' => 'Cette zone de widget est en entête de la page d\'accueil' //Description qui apparait dans le BO
    ));

    register_sidebar(array(
        'name' => 'colonne de droite', //Nom qui aooaraît dans le back-office
        'id' => 'colonne-droite',    //Identifiant unique de la pour pour pouvoir l'appeler dans un template
        'description' => 'Cette zone de widget est dans la barre latérale de droite' //Description qui apparait dans le BO
    ));

    register_sidebar(array(
        'name' => 'footer de gauche', //Nom qui aooaraît dans le back-office
        'id' => 'footer-gauche',    //Identifiant unique de la pour pour pouvoir l'appeler dans un template
        'description' => 'Cette zibe de widget est dans le footer de gauche' //Description qui apparait dans le BO
    ));
}

add_action('widgets_init','eprojet_init_sidebar'); // j'exécute ma fonction nommée "eproget_init_sidebar" lors de l'initialisation des widgets effectuée par WP : notre fonction est accrochée à celle du coeur de WP (hook).

//--------------------------------------------------

//Création des zones de menus :

function eprojet_init_menu(){
    register_nav_menu('primary','menu principal'); // on déclare une zone de menu d'id "primary" et de nom "menu principal" dans le back-office

    register_nav_menu('secondary','menu footer');
}

add_action('init','eprojet_init_menu'); // WP exécute notre fonction eprojet_init_menu lors de son initialisation (= 'init')