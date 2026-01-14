<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header__nav">
        <a href="<?php echo home_url('/'); ?>" class="header__nav-logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
        </a>

        <?php wp_nav_menu([
            'theme_location' => 'header', 
            'container' => false,
            'menu_class' => 'header__navbar-nav',
            ]) 
        ?>
    </header>