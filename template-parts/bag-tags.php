<div class="tags" style="margin-bottom:40px;">
    <?php 
    $tags = get_tags(); 

    foreach ($tags as $tag) { ?>
        <a style="font-size:130%;" href="<?php echo get_bloginfo('url'); ?>/tag/<?php echo $tag->slug; ?>/"><?php echo $tag->name; ?></a>
    <?php } ?>
</div>