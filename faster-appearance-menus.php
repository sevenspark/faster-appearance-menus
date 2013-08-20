<?php 

/*
Plugin Name: Faster Appearance - Menus
Plugin URI: http://sevenspark.com
Description: Fix the bottleneck created by accessibility enhancements to the Appearance > Menus screen in WordPress 3.6
Version: 0.1.1
Author: Chris Mavricos, SevenSpark
Author URI: http://sevenspark.com
License: GPLv2
Copyright 2013  Chris Mavricos, SevenSpark http://sevenspark.com
*/

define( 'FAST_AM_URL' , plugins_url().'/'.str_replace(basename( __FILE__ ),"",plugin_basename( __FILE__ ) ) );

//add_action( 'admin_print_styles-nav-menus.php', 'fam_swap_core_script' ); 
//add_action( 'wp_loaded', 'fam_swap_core_script' ); 	//use wp_loaded instead so we don't lose all localizations
add_action( 'admin_enqueue_scripts', 'fam_swap_core_script' , 3 ); 


function fam_swap_core_script(){

	global $wp_scripts;
	$custom_script_url = FAST_AM_URL . 'nav-menu.js';

	//This is really really bad to directly access this object, but the original solution (below) of deregistering the script
	//seems to break script dependencies and causes scripts to be loaded in the body... couldn't find a better hook/solution
	//to avoid this, so for now this gets the job done.
	$wp_scripts->registered['nav-menu']->src = $custom_script_url;
	
	return;

	/*

	if( is_admin() ){

		wp_deregister_script( 'nav-menu' );
		wp_register_script( 'nav-menu', $custom_script_url , array( 'jquery-ui-sortable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'wp-lists', 'postbox' ), false , 'faster-0.1' );
		wp_enqueue_script( 'nav-menu' );	//don't queue - only load on pages when it will be queued anyway

		did_action( 'init' ) && wp_localize_script( 'nav-menu', 'navMenuL10n', array(
			'noResultsFound' => _x('No results found.', 'search results'),
			'warnDeleteMenu' => __( "You are about to permanently delete this menu. \n 'Cancel' to stop, 'OK' to delete." ),
			'saveAlert' => __('The changes you made will be lost if you navigate away from this page.')
		) );

		if ( wp_is_mobile() )
			wp_enqueue_script( 'jquery-touch-punch' );

	}
	*/
}
