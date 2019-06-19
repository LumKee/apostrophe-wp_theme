<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>L'Apostrophe</title>

    <link rel="icon" src="icon.png">
    <link href="<?php bloginfo('template_directory');?>/main.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="container">
            <img class="float-left" src="<?php echo THEME_IMG_PATH; ?>/apostrophe.svg" alt=""/>

            <nav class="navigation-principale">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
            </nav>
        </div>
    </div>