<?php
add_action('widgets_init','portfolio_init_sidebar');//on créer un hook çad on accroche une fonction de wordpress
//pr pouvoir s'en servir
//widget_init->fonction wordpress
//portfolio-init-sidebar->fonction utilisateur qu'on va declarer ci-dessous
add_action('init','portfolio_init_menu');
//permet de recuperer les fonctionalite du menu wordpresse ds le back-officeds apparences->widgets
//fonction permettant de creer des regions on les retrouve ds le back office

function portfolio_init_sidebar()
{
    register_sidebar(array('name'=> __('Haut gauche','portfolio2'),
    'id'=>'Haut-gauche',
    'description'=> __('region en haut à gauche','portfolio2')
));
    register_sidebar(array('name'=> __('Haut centre','portfolio2'),
    'id'=>'Haut-centre',
    'description'=> __('region en haut centre','portfolio2')
));
    register_sidebar(array('name'=> __('Haut droit','portfolio2'),
    'id'=>'Haut-droit',
    'description'=> __('region en haut à droite','portfolio2')
));
    register_sidebar(array('name'=> __('entetes','portfolio2'),
    'id'=>'entetes',
    'description'=> __('region entetes ','portfolio2')
));
    register_sidebar(array('name'=> __('bas-gauche','portfolio2'),
    'id'=>'bas-gauche',
    'description'=> __('region en bas à gauche','portfolio2')
));
    register_sidebar(array('name'=> __('bas centre','portfolio2'),
    'id'=>'bas centre',
    'description'=> __('region en bas centre','portfolio2')
));
    register_sidebar(array('name'=> __('bas droite','portfolio2'),
    'id'=>'bas droite',
    'description'=> __('region en bas droite','portfolio2')
));

//creer les differents r"egions haut-centre;haut-droit,entetes,bas-gauche,bas-centre ,bas-droit
}


//fonction qui permet de creer le menu principal du theme portfolio que ns allons positioner ds le code
function portfolio_init_menu()
{
    register_nav_menu('primary',__('Primary Menu','Portfolio'));
}