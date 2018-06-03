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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="l-wrapper">
	<header class="l-header">
		<div class="l-layout">
			<div class="header JS-MobileSearch JS-MobileSearch-ready">
				<div class="header__item header__menu gui-visible-mobile">
					<span class="header__menu-button gui-icon gui-icon_menu JS-Menu-Button"></span>
				</div>
				<div class="header__item header__logo">
					<a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="WallpapersCraft"></a>
				</div>
				<div class="header__item header__search">
					<form class="search JS-SearchForm" action="/search/">
						<span class="search__toggler gui-visible-mobile JS-MobileSearch-Toggler"></span>

						<input class="input search__input JS-SearchForm-Input" name="query" type="text" placeholder="Search">
						<button class="search__submit" type="submit" title="Search">
							<span class="gui-icon gui-icon_search"></span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="l-body">
