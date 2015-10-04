<div id="navToggle" class="navContainer" style="display: none">
<div class="container">
    <div class="row mainNavbar">
        <div class="col-sm-4 col-md-4">
            <?php wp_nav_menu( top_menu_args("header-menu") ); ?>

        </div>
        <div class="col-sm-4 col-md-4">

            <?php wp_nav_menu( top_menu_args("extra-menu-1") ); ?>
        </div>
        <div class="col-sm-4 col-md-4">
            <?php get_search_form(); ?>

        </div>
    
    </div>
    <div class="clearfix"></div>
    
</div>


</div>


<script>
    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
        $("#navToggle").slideToggle();
    });

    $(window).scroll(function() {
        var hHeader = $(".theTitle").height();
        var topScroll = $(window).scrollTop();
        if ( hHeader < topScroll ) {
            var titolo = $(".title");
            $("#theTitlecopied").html(titolo.html());
            $(".navigate").removeClass("freeNavigate");
            $(".navigate").addClass("blockNavigate");

        }
        
        else {
            $("#theTitlecopied").html("");
            $(".navigate").removeClass("blockNavigate");
            $(".navigate").addClass("freeNavigate");
        }
    });
</script>