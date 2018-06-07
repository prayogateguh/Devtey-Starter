<div class="l-layout">
  <div class="gui-toggler JS-Toggler JS-Toggler-ready">
    <div class="gui-toggler__content JS-Toggler-Content gui-visible-mobile">
      <div class="tags">
        <?php 
        $tags = get_tags(); 

        foreach ($tags as $tag) { ?>
          <a style="font-size:130%;" href="<?php echo get_bloginfo('url'); ?>/tag/<?php echo $tag->slug; ?>/"><?php echo $tag->name; ?></a>
        <?php } ?>
      </div>
    </div>
  </div>

</div>