<?php wp_nav_menu(
    array(
        'theme_location' => 'footer',
        'menu_id' => 'footer-menu',
        'menu_class' => 'nav navbar-nav nav-menu',
        'before_menu'   => '<div col-md-8 col-sm-12 text-center>',
        'after_menu'    =>  '</div>'
    )
);
?>