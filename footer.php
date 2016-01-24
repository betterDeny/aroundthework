<footer>
    <div class="container">
    <div class="row">
            <?php dynamic_sidebar( 'Footer' ); ?>
            <div style="margin-top: 30px" class="col-md-12 credits">
                Workaround.space è stato creato da Daniele e da un piccolo team di volontari. Motorizzato da <a title="Wordpress" href="http://wordpress.org" >wordpress</a>, caricato su <a href="http://hostinger.it/" title="Hostinger">Hostinger</a> e usa il framework <a href="http://getbootstrap.com" title="Bootstrap">Bootstrap</a> che è hostato da <a href="https://www.maxcdn.com/" title="MaxCDN">MaxCDN</a>. I font usati sono Questrial e Noto Serif.<br>
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

<!-- display - cello -->
<span id="adCell" style="display: none">
</span>

<script type="application/ld+json"><?php get_template_part("js/jsonWork") ?></script>



<!-- [[[ Pagina generata in <?php timer_stop(1); ?> secondi. Wow! ]]] -->
</body>
</html>
