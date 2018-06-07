<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devtey_Starter
 */

?>

<div class="content-sidebar gui-hidden-mobile JS-Fix JS-Fix-ready">
  <div class="JS-Fix-Target" style="position: static; top: auto; right: auto; bottom: 0px; left: auto; width: auto; z-index: auto;">
    <div class="filters">

      <a class="filters__heading" href="/">All</a>
      <?php 
      $cats = get_categories(); 

      foreach ($cats as $cat) { ?>
      <ul class="filters__list JS-Filters">        
          <li class="filter ">
            <a class="filter__link" href="<?php echo get_bloginfo('url'); ?>/category/<?php echo $cat->slug; ?>/">
              <?php echo $cat->name; ?><span class="filter__count"><?php echo $cat->count; ?></span>
            </a>
          </li>
      </ul>
      <?php } ?>
    </div>
  </div>
</div>