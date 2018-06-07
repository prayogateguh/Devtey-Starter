<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Devtey_Starter
 */

?>

<h1 class="gui-h2 gui-heading">Download <?php the_title(); ?></h1>

<div class="wallpaper wallpaper_plain">
    <div class="wallpaper__placeholder">
        <img class="wallpaper__image" src="<?php $attch_id = get_the_ID();echo wp_get_attachment_image_src($attch_id, 'full')[0]; ?>" alt="<?php the_title(); ?>">
    </div>

    <div class="wallpaper__tags">
        <?php
			$posttags = get_the_tags($attch_id+1);
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

    <?php the_content(); ?>
    <div class="gui-toolbar gui-toolbar_stretch gui-subheading">
        <div class="gui-toolbar__item gui-hidden-mobile">
            <?php $img = getimagesize(wp_get_attachment_image_src($attch_id, 'full')[0]); ?>
            <a class="gui-button gui-button_full-height" href="<?php $attch_id = get_the_ID();echo wp_get_attachment_image_src($attch_id, 'full')[0]; ?>"
                download="">Download wallpaper <?php echo $img[0]; ?>x<?php echo $img[1]; ?></a>
        </div>

        <div class="author">
            <div class="author__block">
                <div class="author__row">
                    File Size:
					<?php echo size_format(filesize( get_attached_file($attch_id, 'full') )); ?>
                </div>
                <div class="author__row">Uploaded: <?php echo get_the_date(); ?></div>
            </div>

        </div>
    </div>
</div>
