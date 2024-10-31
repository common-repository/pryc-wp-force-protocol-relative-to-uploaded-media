<?php
/*
 * Plugin Name: PRyC WP: Force protocol relative to uploaded media
 * Plugin URI: 
 * Description: Force protocol relative (\\ instead http:\\ or https:\\) for files added in the content editor (eg. post, page)
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.3
 */
 


/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ----- ----- ----- ----- ----- ----- ----- ----- */


if ( ! function_exists( 'pryc_wp_force_protocol_relative_to_uploaded_media' ) ) :
	function pryc_wp_force_protocol_relative_to_media( $content ) {
	  $content = str_replace( array( 'http://','https://' ), '//', $content );
	  return $content; 
	}
endif;
add_filter( 'image_send_to_editor', 'pryc_wp_force_protocol_relative_to_uploaded_media' );


/* END */

