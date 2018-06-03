<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Devtey_Starter
 */

?>
	<li class="wallpapers__item" style="width: 300px">
		<a class="wallpapers__link" href="<?php get_permalink(); ?>">
			<span class="wallpapers__canvas">
				<img class="wallpapers__image" src="https://images.wallpaperscraft.com/image/facade_multicolored_rainbow_122070_300x168.jpg"
				    alt="Preview wallpaper <?php the_title(); ?>">
			</span>
			<span class="wallpapers__info">
				<span class="wallpapers__info-rating">
					<span class="gui-icon gui-icon_rating"></span>&nbsp;6.2
				</span>
				1280x720
				<span class="wallpapers__info-downloads">
					<span class="gui-icon gui-icon_download"></span>&nbsp;153
				</span>
			</span>
			<span class="wallpapers__info">
				<?php the_title(); ?>
			</span>
		</a>
	</li>