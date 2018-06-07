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
			<img class="wallpaper__image" src="<?php $attch_id = get_the_ID()-1;echo wp_get_attachment_image_src($attch_id, 'dp-thumb-single')[0]; ?>"
			    alt="<?php the_title(); ?>">
		</div>

		<div class="wallpaper__tags">
			<?php
			$posttags = get_the_tags();
			if ($posttags) {
				$x = 0;
				$len = count($posttags);
				foreach($posttags as $tag) {
					if ($x == $len-1) {
						echo "<a href=\"/tag/{$tag->slug}/\">{$tag->name}</a>";
					} else {
						echo "<a href=\"/tag/{$tag->slug}/\">{$tag->name}</a>, ";
					}
					
					$x++;
				}
			}
			?>
		</div>

		<div class="author author_margin">
			<div class="author__block">

				<div class="author__row">Author: <?php echo ucwords(get_the_author()); ?></div>


				<div class="author__row">
					Category:
					<span><?php $cats = get_the_category(); echo $cats[0]->name; ?></span>
				</div>
			</div>

			<div class="author__block author__block_source">
				<span class="gui-icon gui-icon_source"></span>
				<a class="author__link" href="<?php echo get_attachment_link($attch_id); ?>">Download</a>
			</div>


		</div>

		<div class="wallpaper-info">
			<div class="gui-row">
				<div class="wallpaper-info__item gui-col gui-col-6">
					<div class="wallpaper-votes JS-Vote JS-Vote-ready" data-vote-params="{'url': '/ajax/votes/vote.json?image_id=122060', 'method': 'POST', 'blockOnProcessed': true }">

						<span class="wallpaper-votes__button JS-Vote-Option" title="Like" data-name="vote" data-value="yes">
							<span class="gui-icon gui-icon_like"></span>
						</span>
						<span class="wallpaper-votes__rate JS-Vote-Rating"></span>
						<span class="wallpaper-votes__button JS-Vote-Option" title="Dislike" data-name="vote" data-value="no">
							<span class="gui-icon gui-icon_dislike"></span>
						</span>
						<span class="wallpaper-votes__count">
							<span class="JS-Vote-Total">0</span> Votes</span>
					</div>
				</div>
				<div class="wallpaper-info__item gui-col gui-col-6">
					<div class="wallpaper-table">
						<div class="wallpaper-table__row">
							<span class="wallpaper-table__cell">Original Resolution</span>
							<span class="wallpaper-table__cell">
								<?php $img = getimagesize(wp_get_attachment_image_src($attch_id, 'full')[0]); ?>
								<?php echo $img[0]; ?>x<?php echo $img[1]; ?>
							</span>
						</div>
						<div class="wallpaper-table__row">
							<span class="wallpaper-table__cell">Views</span>
							<span class="wallpaper-table__cell">446</span>
						</div>

						<div class="wallpaper-table__row">
							<span class="wallpaper-table__cell">Uploaded</span>
							<span class="wallpaper-table__cell"><?php echo get_the_date(); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="resolutions__section resolutions__section_torn" style="padding:5px;">
			<?php the_content(); ?>
			<?php
				$media = get_attached_media('image', get_the_ID()); // Get image attachment(s) to the current Post
				array_shift($media); // hapus element pertama karena sudah ditampilkan
			?>
			<?php if(count($media) > 0) { ?>
				<h3 style="text-align:center;text-decoration:underline;">Attached Galler<?php echo (count($media) > 1) ? 'ies':'y' ?></h3>
			<?php } ?>
			<div class="w3-content w3-display-container" style="max-width:800px">
				<?php foreach ($media as $med) { ?>
					<a href="<?php echo $med->post_name; ?>/"><img class="mySlides" src="<?php echo $med->guid; ?>" style="width:100%"></a>
				<?php } ?>
				
				<?php if(count($media) > 1) { ?>
				<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
					<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
					<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
					<?php if (count($media) > 1) { ?>
						<?php $x=1; foreach ($media as $med) { ?>
						<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(<?php echo $x; ?>)"></span>
						<?php $x++; } ?>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</section>

	</div>