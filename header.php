<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">

    <title><?php bloginfo('name','display'); ?><?php wp_title( '&#124;', true, 'left' ); ?></title>
    <meta property="op:markup_version" content="v1.0">
    
    <?php wp_head() ?>
    <!--[if IE]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" type="image/png" />
    <noscript>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic">   
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
    <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/analytics.js"></script>
    <script>
        var host = "<?php bloginfo("wpurl") ?>",
            headTag = document.getElementsByTagName("head")[0],
            themeDirectory = "<?php echo get_stylesheet_directory_uri(); ?>";
        function jsSrc(src) {
        "use strict";
        var preload = document.getElementById("preload"),
            i = 0;
            for (i=0; i < scriptToFireUrl.length; i++) {
                var scriptFired = document.createElement("script");
                scriptFired.src = scriptToFireUrl[i].src;
                scriptFired.async = scriptToFireUrl[i].async;
                if (scriptToFireUrl[i].integrity !== undefined ) {
                    scriptFired.integrity = scriptToFireUrl[i].integrity;
                }
                if (scriptToFireUrl[i].crossorigin !== undefined ) {
                    scriptFired.crossorigin = scriptToFireUrl[i].crossorigin;
                }
                headTag.appendChild(scriptFired);
            }
        }
        function cssSrc(src) {
            for (i=0; i < cssToFireUrl.length; i++) {
                var cssFired = document.createElement("link");
                cssFired.rel = "stylesheet";
                cssFired.type = "text/css";
                cssFired.href = cssToFireUrl[i];
                headTag.appendChild(cssFired);
            }
        }
        var scriptToFireUrl = [ /* Inserisci tutte le risorse JS che servono! */
        {
            "src" : themeDirectory + "\/js\/ads.js",
            "async" : true,
            "crossorigin" : "anonymous"
        },
        {
            "src" : themeDirectory + "\/js\/custom.min.js",
            "async" : true,
            "crossorigin" : "anonymous"
        }
],
            cssToFireUrl = [
                "https:\/\/fonts.googleapis.com\/css?family=Questrial",
                "https://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic",
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
            ];
        function init() {
            cssSrc(cssToFireUrl);
            jsSrc(scriptToFireUrl);
        }
    </script>
<style>#preload { background: #E06055; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9999; text-align: center } .preloadIcon { display: inline-block; position: relative; top: 25%; font-size: 4em; color: #E06055; background: #FFF; border-radius: 50%; padding: 1em; padding-left: 1.25em; padding-right: 1.25em; }</style>
<noscript><style>#preload { display: none } </style></noscript>
</head>
<body <?php body_class() ?> onload="init()">
<div id="preload">
    <div class="preloadIcon">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/loader.gif" alt="loader">
    </div>
</div>
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
