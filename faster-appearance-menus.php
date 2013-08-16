<?php 

/*
Plugin Name: Faster Appearance - Menus
Plugin URI: http://sevenspark.com
Description: Fix the bottleneck created by accessibility enhancements to the Appearance > Menus screen in WordPress 3.6
Version: 0.1
Author: Chris Mavricos, SevenSpark
Author URI: http://sevenspark.com
License: GPLv2
Copyright 2013  Chris Mavricos, SevenSpark http://sevenspark.com
*/

define( 'FAST_AM_URL' , plugins_url().'/'.str_replace(basename( __FILE__ ),"",plugin_basename( __FILE__ ) ) );

//add_action( 'admin_print_styles-nav-menus.php', 'fam_swap_core_script' ); 
add_action( 'wp_loaded', 'fam_swap_core_script' ); 	//use wp_loaded instead so we don't lose all localizations
function fam_swap_core_script(){
	if( is_admin() ){
		wp_deregister_script( 'nav-menu' );
		wp_register_script( 'nav-menu', FAST_AM_URL . 'nav-menu.js' , array( 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'wp-lists', 'postbox' ), false , 'faster-0.1' );
		wp_enqueue_script( 'nav-menu' );

		/*
		did_action( 'init' ) && wp_localize_script( 'nav-menu', 'navMenuL10n', array(
			'noResultsFound' => _x('No results found.', 'search results'),
			'warnDeleteMenu' => __( "You are about to permanently delete this menu. \n 'Cancel' to stop, 'OK' to delete." ),
			'saveAlert' => __('The changes you made will be lost if you navigate away from this page.')
		) );

		if ( wp_is_mobile() )
			wp_enqueue_script( 'jquery-touch-punch' );
		*/
	}
	//echo 'dequeue!';
}
