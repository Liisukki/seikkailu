<?php
register_nav_menus(['primary' => 'Päävalikko']);

function seikkailu_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'seikkailu_assets');

function seikkailu_widgets_init()
{
    register_sidebar(
        array(
            'name' => 'Sivupalkki',
            'id' => 'sidebar',
            'before' => '<div>',
            'after' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        )
    );
}
add_action('widgets_init', 'seikkailu_widgets_init');
?>