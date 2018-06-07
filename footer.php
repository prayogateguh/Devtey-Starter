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
			</div>
		</div>
	</footer>
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>
	</body>
	</html>