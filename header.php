<?php
/**
 * Theme header
 *
 * Contains the theme wrapper start
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
	/**
	 * Display header meta
	 */
	get_template_part( 'views/header/header', 'meta' );
?>

<body <?php body_class(); ?>>

<?php
	/**
	 * svg-defs.svg
	 */
	include_once( 'images/general/svg-defs.svg' );
?>

<div id="page" class="site">

<?php

	/**
	 * Display header
	 */
	get_template_part( 'views/header/header' );

?>

<?php
	/**
	 * htmline_before_page_content hook
	 *
	 * @hooked	htmline_theme_wrapper_start - 10 (outputs opening divs for the page)
	 */
	do_action( 'htmline_before_page_content' );
?>

<?php
	/**
	 * get_sidebar
	 *
	 * Display the sidebar
	 */
	get_sidebar();
?>

<?php
	/**
	 * htmline_before_main_content hook
	 *
	 * @hooked	htmline_theme_content_wrapper_start - 10 (outputs opening divs for the main content)
	 */
	do_action( 'htmline_before_main_content' );
?>