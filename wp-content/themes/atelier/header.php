<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="grid-4 bg-white site-header" role="banner">

		<div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

        <?php
        if (is_active_sidebar('header-1'))
            dynamic_sidebar('header-1');

        if (is_active_sidebar('header-2'))
            dynamic_sidebar('header-2');

        if (is_active_sidebar('header-3'))
            dynamic_sidebar('header-3');
        ?>

	</header>

    <nav id="site-navigation" class="main-navigation bg-blue" role="navigation">
        <?php wp_nav_menu(array(
            'theme_location' => 'menu-header',
            'menu_id' => 'menu-header',
            'menu_class' => 'clean-ul hul',
            'container' => '',
        )); ?>
    </nav>

	<div id="content" class="site-content">
