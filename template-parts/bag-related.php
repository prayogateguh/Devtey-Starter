<?php
// Default arguments
$attachments = get_posts( array(
    'post_type' => 'attachment',
    'posts_per_page' => -1,
    'post_parent' => wp_get_post_parent_id( $post->ID ),
    'exclude'     => $post->ID
) );

?>
<?php if(count($attachments)) { ?>
<h2 class="gui-h1 gui-text-center gui-heading gui-heading_up-shift">Related <?php the_title(); ?></h2>
<?php } ?>
<div class="wallpapers wallpapers_related  JS-ContentLoader JS-ContentLoader-ready" data-contentloader-params="{'startFrom': 1, 'url': '/ajax/images/similar_original?id=122060'} ">
    <ul class="wallpapers__list JS-ContentLoader-Target">
        <?php
        // Loop through posts
        foreach( $attachments as $post ) : setup_postdata( $post ); ?>
            <?php $attch_id = get_the_ID(); ?>
            <li class="wallpapers__item JS-ContentLoader-Item">
                <a class="wallpapers__link" href="<?php the_permalink(); ?>">
                    <span class="wallpapers__canvas">
                        <img class="wallpapers__image" src="<?php echo wp_get_attachment_image_src($attch_id, 'dp-thumb-sidebar')[0]; ?>"
                            alt="Preview <?php the_title(); ?>">
                    </span>
                    <span class="wallpapers__info">
                        <span class="wallpapers__info-rating">
                            <?php $cats = get_the_category(wp_get_post_parent_id( $post->ID )); echo $cats[0]->name; ?>
                        </span>
                        <span class="wallpapers__info-downloads">
                            <?php echo ucwords(get_the_author()); ?>
                        </span>
                    </span>
                </a>
            </li>
        <?php
        // End loop
        endforeach; ?>

    </ul>
</div>

<?php 
// Reset post data 
wp_reset_postdata(); ?>