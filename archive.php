<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Devtey_Starter
 */

get_header(); ?>
	<?php get_template_part( 'template-parts/iklan', 'atas' ); ?>
	<div class="l-layout l-layout_wide">
		<div class="content gui-row">
			<?php get_sidebar('kiri'); ?>
			<div class="content-main">
				<?php get_template_part( 'template-parts/bag', 'title' ); ?>
				<div class="wallpapers wallpapers_zoom wallpapers_main">
					<ul class="wallpapers__list">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'index' );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</ul>			
				</div>
				<?php dp_nav(); ?>
				<?php get_template_part( 'template-parts/iklan', 'bawah' ); ?>
				<?php get_template_part( 'template-parts/bag', 'footertag' ); ?>
			</div><!-- #main -->
			<?php get_sidebar('kanan'); ?>
		</div>
		
	</div><!-- #primary -->

<?php
get_sidebar('kanan');
get_footer();
