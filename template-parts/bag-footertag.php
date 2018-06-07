<div class="l-layout">
  <div class="gui-toggler JS-Toggler JS-Toggler-ready" data-toggler-params="{'cssActiveElement': 'gui-toggler_active'}" data-toggler-events="{'toggler:activate': 'slideDown', 'toggler:inactivate': 'slideUp'}">
    <a class="gui-toggler__switcher JS-Toggler-Switcher gui-visible-mobile" href="javascript:;">
      <span class="gui-toggler__switcher-text">Show tags</span>
      <span class="gui-toggler__switcher-text gui-toggler__switcher-text_alt">Hide tags</span>
    </a>
    <div class="gui-toggler__content JS-Toggler-Content">
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