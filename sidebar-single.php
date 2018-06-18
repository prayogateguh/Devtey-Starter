<?php
// Default arguments
$args = array(
	'posts_per_page' => 3, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

?>

<div class="content-sidebar">
    <h3 class="gui-heading">Related Wallpapers</h3>
    <div class="wallpapers   wallpapers_sm">
        <ul class="wallpapers__list JS-ContentLoader-Target">
        <?php
        // Loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
            <?php 
                $all_image = get_children( array(
					'post_type' => 'attachment',
					'post_parent' => get_the_ID(),
				) );
                $attch_id = array_pop($all_image)->ID; 
            ?>
            <li class="wallpapers__item" style="width: 300px">
                <a class="wallpapers__link" href="<?php the_permalink(); ?>">
                    <span class="wallpapers__canvas">
                        <img class="wallpapers__image" src="<?php echo wp_get_attachment_image_src($attch_id, 'dp-thumb-sidebar')[0]; ?>"
                            alt="Preview <?php the_title(); ?>">
                    </span>
                    <span class="wallpapers__info">
                        <span class="wallpapers__info-rating">
                            <?php $cats = get_the_category(); echo $cats[0]->name; ?>
                        </span>
                        <?php 
                        $img = getimagesize(wp_get_attachment_image_src($attch_id, 'full')[0]);
                        echo "$img[0]x$img[1]"; 
                        ?>
                        <span class="wallpapers__info-downloads">
                            <?php echo ucwords(get_the_author()); ?>
                        </span>
                    </span>
                    <span class="wallpapers__info"><?php the_title(); ?></span>

                </a>
            </li>
        <?php
        // End loop
        endforeach; ?>

        </ul>
    </div>
</div>

<?php 
// Reset post data 
wp_reset_postdata(); ?>