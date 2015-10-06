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