<?php
/*
Plugin Name: WordPress Update Manager Pro
Plugin URI: http://xavierkelly.com
Description: A WordPress plugin to manage your wordpress core, plugin and theme updates.
Version: 1.0
Author: Xavier Kelly
Author URI: http://xavierkelly.com
*/

/* Disable All Updates Start */
/* Disable all automatic updates using the following filter: */
add_filter( 'automatic_updater_disabled', '__return_true' );
/* ---------------------------------End--------------------------------- */

/* Core Updates Start */
// Disable/Enable development updates
add_filter( 'allow_dev_auto_core_updates', '__return_true' ); 
// Disable/Enable minor updates      
add_filter( 'allow_minor_auto_core_updates', '__return_true' );  
// Disable/Enable major updates
add_filter( 'allow_major_auto_core_updates', '__return_true' ); 
/* ---------------------------------End--------------------------------- */

/* Plugin Updates */
// Disable/Enable automatic updates for All plugins:
add_filter( 'auto_update_plugin', '__return_true' );
/* ---------------------------------End--------------------------------- */

/* Theme Updates */
// Disable/Enable automatic updates for All themes:
add_filter( 'auto_update_theme', '__return_false' );
/* ---------------------------------End--------------------------------- */
?>