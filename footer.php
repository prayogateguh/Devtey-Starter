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
					<div class="copyright">© 2013–2018, WallpapersCraft</div>
				</div>
				<div class="footer__section footer__section_description">
					<div class="footer-description">
						Desktop Wallpapers, HD Backgrounds
					</div>
				</div>
				<div class="footer__section footer__section_developer">
					<div class="developer">
						Develop by&nbsp;
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'devtey-starter' ) ); ?>" target="_blank">
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

	</body>

	</html>