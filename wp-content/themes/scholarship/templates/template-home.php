<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mystery Themes
 * @subpackage Scholarship
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				/**
				 * Display the widget area section at homepage
				 *
				 * @since 1.0.0
				 */
	        	if( is_active_sidebar( 'scholarship_home_section_area' ) ) {
	            	if ( !dynamic_sidebar( 'scholarship_home_section_area' ) ):
	            	endif;
	         	}
			?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
