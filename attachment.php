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
			<div class="content content_download gui-row">
				<?php get_sidebar('kiri'); ?>
				<div class="content-main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'attachment' );
                    endwhile; // End of the loop.
                    get_template_part( 'template-parts/iklan', 'attachment' );
                    ?>
                    <h2 class="gui-h1 gui-text-center gui-heading gui-heading_up-shift">Related Wallpapers graffiti, street art</h2>
                    <?php get_template_part( 'template-parts/bag', 'related' ); ?>
                    <?php get_template_part( 'template-parts/bag', 'tags' ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php
get_footer();