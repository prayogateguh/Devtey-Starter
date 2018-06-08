<h1 class="gui-heading">
  <span class="gui-heading__toolbar gui-hidden-mobile">
    <span class="gui-heading__title">
    <?php
    if ( is_category() ) {
      $cat = get_the_category();
      echo 'All Wallpapers by ' . $cat[0]->name . ' Category';
    } elseif ( is_tag() ) {
      $tag = get_the_tags();
      echo 'All Wallpapers by ' . ucwords($tag[0]->name) . ' Tag';
    } else {
      echo get_bloginfo('description');
    } ?>
    </span>
  </span>
</h1>