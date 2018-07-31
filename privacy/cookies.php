<?php
/**
 * Template Name: Cookie Policy
 * The template for displaying cookie law policy.
 *
 * @package WordPress
 * @subpackage Isotype_Theme
 * @since Isotype 1.0
 */
$owner_id = get_option('owner_id');
if(function_exists('pll_current_language')){
	$lang = pll_current_language();
} else {
	$locale = get_locale();
	$lang = substr($locale, 0, 2);
}
get_header();
?>
<?php
while ( have_posts() ) : the_post();
?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('content-container section'); ?>>
				<header class="section-padding-bottom header page-header">
<?php
	if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<nav class="breadcrumbs page-padding-h padding-v">','</nav>');
	}
?>
<?php
	the_title( '<h1 class="color1">', '</h1>' );
	the_content();
	include(locate_template('privacy/cookies-it.php'));
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'isotype' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) );
?>
			</div><!-- #post-## -->
<?php
	if (function_exists('sharing_display')){
		echo sharing_display();
	}
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?>
<?php
get_sidebar();
get_footer();
?>