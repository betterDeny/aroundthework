<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    
    <title><?php bloginfo('name','display'); ?><?php wp_title( '&#124;', true, 'left' ); ?></title>
    <meta property="op:markup_version" content="v1.0">
    
    <?php wp_head() ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic">   
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body <?php body_class() ?> >
<!-- <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.67180.js"></script> -->
<!-- // -->
<div class="theTitle">
    <header>
        <div class="container">
            <a href="<?php bloginfo("wpurl") ?>">
                <img id="mainLogo" alt="<?php bloginfo("name","display"); ?>" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
                <span class="scnd"><?php bloginfo("description"); ?></span>
            </a>
        </div>
    </header>
</div>
<div class="feelFree">
<div class="navigate freeNavigate">
    <div class="container">
        <a class="linkTitle" href="<?php bloginfo("wpurl") ?>" title="<?php bloginfo("name","display"); ?>">
        <span id="theTitlecopied"></span></a>
    <div class="navWrapper">
        
        <span id="nav-toggle"><span></span></span></div>
    </div>
</div>
    
<?php get_template_part("include/navbar") ?>
</div>