<?php
/**
 * Template Name: Restaurant front page template
 *
 * The template for displaying pages in full-width.
 * Add class .full-width to body_class in add_filter action in functions.php
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
// load images in php for template development.
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
	
	<?php
		if (is_front_page() || is_home()) {
		    echo do_shortcode("[metaslider id=15]");
		}
	?>

	<div id="primary" class="site-content front-page">
		<div id="content" role="main">
			<?php //while( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'content', 'page' ); ?>
			<?php //endwhile; ?>

		</div>
	</div><!-- #primary -->
<?php get_sidebar('front'); ?>
<?php get_footer(); ?>