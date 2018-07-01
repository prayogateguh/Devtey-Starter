<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Devtey_Starter
 */

?>

	<h1 class="gui-h2 gui-heading"><?php the_title(); ?></h1>

	<div class="wallpaper ">
		<div class="wallpaper__placeholder">
			<img class="wallpaper__image" src="
			<?php 
			$all_image = get_children( array(
				'post_type' => 'attachment',
				'post_parent' => get_the_ID(),
			) );
			$attch_id = array_pop($all_image)->ID;
			echo wp_get_attachment_image_src($attch_id, 'dp-thumb-single')[0]; 
			?>
			"
			    alt="<?php the_title(); ?>">
		</div>

		<div class="wallpaper__tags">
			<?php
			$posttags = get_the_tags();
			if ($posttags) {
				$x = 0;
				$len = count($posttags);
				foreach($posttags as $tag) {
					$burl = get_bloginfo('url');
					if ($x == $len-1) {
						echo "<a href=\"{$burl}/tag/{$tag->slug}/\">{$tag->name}</a>";
					} else {
						echo "<a href=\"{$burl}/tag/{$tag->slug}/\">{$tag->name}</a>, ";
					}
					
					$x++;
				}
			}
			?>
		</div>

		<div class="author author_margin">
			<div class="author__block gui-hidden-mobile">

				<div class="author__row">Author: <?php echo ucwords(get_the_author()); ?></div>


				<div class="author__row">
					Category: <?php $cats = get_the_category(); ?>
					<span><a href="<?php echo get_bloginfo('url') .'/category/'. $cats[0]->slug; ?>/"><?php echo $cats[0]->name; ?></a></span>
				</div>
			</div>

			<div class="author__block author__block_source">
				<span class="gui-icon gui-icon_source"></span>
				<a class="author__link" href="<?php echo get_attachment_link($attch_id); ?>">Download</a>
			</div>


		</div>

		<section class="resolutions__section resolutions__section_torn" style="padding:15px;">
			<?php
			function get_string_between($string, $start, $end){
				$string = ' ' . $string;
				$ini = strpos($string, $start);
				if ($ini == 0) return '';
				$ini += strlen($start);
				$len = strpos($string, $end, $ini) - $ini;
				return substr($string, $ini, $len);
			}
			$_buang_gambar = "<img" . get_string_between(get_the_content(), '<img', '>') . ">";
			$_no_gambar = str_replace($_buang_gambar,"",get_the_content());
			(substr( get_the_content(), 0, 4 ) === "<img") ? $manual = true : $manual = false;
			echo ($manual) ? apply_filters('the_content',$_no_gambar) : get_the_content();
			?>
			<?php //the_content(); ?>
			<?php
				$media = get_attached_media('image', get_the_ID()); // Get image attachment(s) to the current Post
				array_shift($media); // hapus element pertama karena sudah ditampilkan
			?>
		</section>

	</div>