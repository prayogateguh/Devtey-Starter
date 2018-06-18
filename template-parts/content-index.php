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
				<img class="wallpapers__image" src="<?php 
				$all_image = get_children( array(
					'post_type' => 'attachment',
					'post_parent' => get_the_ID(),
				) );
				$attch_id = array_pop($all_image)->ID;
				echo wp_get_attachment_image_src($attch_id, 'dp-thumb-index')[0];?>"
				    alt="Preview wallpaper <?php the_title(); ?>">
			</span>
			<span class="wallpapers__info">
				<span class="wallpapers__info-rating">
					<?php $cats = get_the_category(); echo $cats[0]->name; ?>
				</span><?php $img = getimagesize(wp_get_attachment_image_src($attch_id, 'full')[0]); ?>
				<?php echo $img[0]; ?>x<?php echo $img[1]; ?>
				<span class="wallpapers__info-downloads">
					<?php echo ucwords(get_the_author()); ?>
				</span>
			</span>
			<span class="wallpapers__info">
				<?php the_title(); ?>
			</span>
		</a>
	</li>