<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Devtey_Starter
 */

get_header();
?>

	<div class="l-body">
		<?php get_template_part( 'template-parts/iklan', 'singlemobileatas' ); ?>
		<?php get_template_part( 'template-parts/iklan', 'singleatas' ); ?>
		<div class="l-layout l-layout_tight">
			<div class="content content_wp gui-row">
				<?php get_sidebar('kiri'); ?>
				<div class="content-main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'single' );

					endwhile; // End of the loop.
					?>
				</div>
				<?php get_sidebar('single'); ?>
				<!-- #main -->
			</div>
		</div>
		<div class="l-tight gui-hidden-mobile">
			<div class="banner banner_bottom">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ads-atas.png">
			</div>
			<div class="l-mb-layout gui-hidden-mobile">
				<?php get_template_part( 'template-parts/bag', 'tags' ); ?>
			</div>
		</div>
		<?php get_template_part( 'template-parts/iklan', 'singlemobileatas' ); ?>
	</div>
	<?php
get_footer();