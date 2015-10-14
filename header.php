<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    
    <title><?php bloginfo('name','display'); ?><?php wp_title( '&#124;', true, 'left' ); ?></title>
    <meta property="op:markup_version" content="v1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?> >
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.js-1.3.1/parallax.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.67180.js"></script> -->
<!-- // -->
<div class="theTitle">
    <header>
        <a href="<?php bloginfo("wpurl") ?>">
        <span class="cerchio">
            
        </span>
        <span class="titleGroup">
            <h1 class="title"><?php bloginfo('name','display'); ?></h1>
            <span class="subTitle"><?php bloginfo('description'); ?></span>
        </span>
        </a>
    </header>
</div>
<div class="feelFree">
<div class="navigate freeNavigate">
    <div class="container">
        <a class="linkTitle" href="<?php bloginfo("wpurl") ?>" title="<?php bloginfo("name","display"); ?>"><span id="theTitlecopied"></span></a>
    <div class="navWrapper">
        
        <span id="nav-toggle"><span></span></span></div>
    </div>
</div>
    
<?php get_template_part("include/navbar") ?>
</div>