<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devtey_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/css/w3.css' ?>">
	<?php wp_head(); ?>
</head>

<body>
<div class="l-wrapper">
	<header class="l-header">
		<div class="l-layout">
			<div class="header JS-MobileSearch JS-MobileSearch-ready">
				<div class="header__item header__menu gui-visible-mobile">
				</div>
				<div class="header__item header__logo">
					<a href="<?php echo get_bloginfo('url'); ?>"><img class="logo" src="<?php echo (get_option('dp-logo') != '') ? esc_attr( get_option('dp-logo') ) : get_template_directory_uri() .'/img/logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
				</div>
				<div class="header__item atas gui-hidden-mobile">
				<?php
				$menus = get_registered_nav_menus();
				foreach ($menus as $location => $description) {
					$menu = wp_get_nav_menu_items($location);

					foreach ($menu as $mn) {
						echo "<a href='$mn->url'>$mn->title</a>&nbsp;";
					}
				}
				?>
				</div>
				<div class="header__item header__search">
					<form class="search JS-SearchForm" action="<?php echo get_bloginfo('url'); ?>/?s=">
						<input class="input search__input JS-SearchForm-Input" name="s" type="text" placeholder="Search">
						<button class="search__submit gui-hidden-mobile" type="submit" title="Search">
							<span class="gui-icon gui-icon_search"></span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="l-body">
