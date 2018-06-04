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
		<a class="wallpapers__link" href="<?php echo get_permalink(); ?>">
			<span class="wallpapers__canvas">
				<img class="wallpapers__image" src="<?php $attch_id = get_the_ID()-1;echo wp_get_attachment_image_src($attch_id, 'dp-thumbnail')[0]; ?>"
				    alt="Preview wallpaper <?php the_title(); ?>">
			</span>
			<span class="wallpapers__info">
				<span class="wallpapers__info-rating">
					Anime
				</span><?php $img = getimagesize(wp_get_attachment_image_src($attch_id, 'full')[0]); ?>
				<?php echo $img[0]; ?>x<?php echo $img[1]; ?>
				<span class="wallpapers__info-downloads">
					Prayoga Teguh
				</span>
			</span>
			<span class="wallpapers__info">
				<?php the_title(); ?>
			</span>
		</a>
	</li>