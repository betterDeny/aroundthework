<figure class="op-tracker">
  <iframe src="#" hidden></iframe>
</figure>
<footer>
    <div class="container">
    <div class="row">
            <?php dynamic_sidebar( 'Footer' ); ?>
            <div style="margin-top: 30px" class="col-md-12 credits">
                Workar0und è stato creato da Daniele e da un piccolo team di volontari. Usa <a title="Wordpress" href="http://wordpress.org" >wordpress</a>, hostato da <a href="http://it.altervista.org/" title="Altervista">Altervista</a> e assets di <a href="http://getbootstrap.com" title="Bootstrap">Bootstrap</a> hostati da <a href="https://www.maxcdn.com/" title="MaxCDN">MaxCDN</a>.<br> I font usati sono Questrial e Noto Serif.<br>
                Template e grafica di <a href="http://www.danieleirsuti.com" title="Daniele Irsuti">Daniele Irsuti</a>
            </div>
            <div class="clearfix"></div>
        </div>
    <div class="row">
        <div class="col-lg-12">
        <?php wp_nav_menu( bot_menu_args("extra-menu-4") ); ?>
        </div>    
    </div>
    
    </div>
<div class="footyfooty">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="licenza">
                <span><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                    <img alt="Licenza Creative Commons" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png">
                </a>

                    Quest'opera è distribuita con Licenza <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribuzione - Non commerciale - Condividi allo stesso modo 4.0 Internazionale</a></span>  
                </div>
            </div>    
        </div>
    </div>
</div>
<span class="title" style="display: none"><?php bloginfo("name","display"); ?></span>
</footer>
<?php wp_footer() ?>
<div id="fb-root"></div>
<!--[if IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Latest compiled and minified JavaScript -->
<script id="writingScript" language="javascript">
document.write("<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'><\/script>");
document.write("<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.js-1.3.1/parallax.min.js'><\/script>");
document.write("<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/ads.js'><\/script>");
document.write("<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/custom.min.js'><\/script>");
var scriptingRemove = document.getElementById("writingScript");
    scriptingRemove.remove(scriptingRemove.selectedIndex);
</script>

<script type="application/ld+json"><?php get_template_part("js/jsonWork") ?></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.4&appId=104522549568";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- [[[ Pagina generata in <?php timer_stop(1); ?> secondi. Wow! ]]] -->
</body>
</html>