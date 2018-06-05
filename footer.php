<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devtey_Starter
 */

?>

	</div>
	<!-- #content -->

	<footer class="l-footer">
		<div class="l-layout">
			<div class="footer">
				<div class="footer__section footer__section_copyright">
					<div class="copyright">© <?php echo date("Y"); ?>, <?php echo get_bloginfo('name'); ?></div>
				</div>
				<div class="footer__section footer__section_developer">
					<div class="developer">
						Devtey Starter by
						<a href="<?php echo esc_url( __( 'https://devtey.com/', 'devtey-starter' ) ); ?>" target="_blank">
							<?php
            				printf( esc_html__( '%s', 'Devtey Starter' ), 'Devtey' );
          					?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		showDivs(slideIndex = n);
		}

		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" w3-white", "");
		}
		x[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " w3-white";
		}
	</script>
	</body>
	</html>