<?php
register_sidebar(
    [
        'id' => 'blog-sidebar',
        'name' => 'blog'
    ]
);

register_nav_menus(
    [
        'id' => 'primary-menu',
        'menu-principal' => 'Menu Principal'
    ]
);
