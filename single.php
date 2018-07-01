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
		<div class="l-tight">
			<?php get_template_part( 'template-parts/iklan', 'bawah' ); ?>
			<div class="l-mb-layout gui-hidden-mobile">
				<?php get_template_part( 'template-parts/bag', 'tags' ); ?>
			</div>
		</div>
	</div>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		showDivs(slideIndex += n);
		}

		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName('mySlides');
		if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = 'none';  
		}
		x[slideIndex-1].style.display = 'block';  
		}
	</script>
	<?php
get_footer();