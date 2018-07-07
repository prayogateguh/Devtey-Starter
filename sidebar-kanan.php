<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devtey_Starter
 */

?>

<div class="content-sidebar content-sidebar_shift JS-Fix JS-Fix-ready gui-hidden-mobile">
  <div class="JS-Fix-Target" style="position: static; top: auto; right: auto; bottom: 0px; left: auto; width: auto; z-index: auto;">
    <div class="filters">

      <span class="filters__heading">Menu</span>
        <ul class="filters__list JS-Filters">
        <?php
        $menus = get_registered_nav_menus();
        foreach ($menus as $location => $description) {
          $menu = wp_get_nav_menu_items($location);

          foreach ($menu as $mn) { ?>
          <li class="filters__toggler JS-Toggler JS-Toggler-ready">
            <div class="filter">
              <a class="filter__link filters__toggler-switcher JS-Toggler-Switcher" href="<?php echo $mn->url; ?>">
                <span class="filters__toggler-text"><?php echo $mn->title; ?></span>
              </a>
            </div>
          </li>
          <?php } break; } ?>
        </ul>
    </div>
  </div>
</div>