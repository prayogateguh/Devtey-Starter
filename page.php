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
		<div class="l-layout l-layout_tight">
			<div class="content content_download gui-row">
				<div class="content-sidebar gui-hidden-mobile JS-Fix JS-Fix-ready">
					<h1 class="gui-h2 gui-heading"><?php the_title(); ?></h1>
				</div>
				<div class="content-main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
get_footer();