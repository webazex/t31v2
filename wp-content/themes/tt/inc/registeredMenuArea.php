<?php
add_action( 'after_setup_theme', 'registerMenu' );

function registerMenu() {
	register_nav_menu( 'header', 'Головне меню' );
	register_nav_menu( 'footer', 'Меню в футері' );
}