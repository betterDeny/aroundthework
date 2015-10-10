<?php

// menu

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Top Menu' ),
        'extra-menu-1' => __( 'Bar menu 1' ),
        'extra-menu-2' => __( 'Bar menu 2' ),
        'extra-menu-3' => __( 'Bar menu 3' ),
        'extra-menu-4' => __( 'Bar menu 4' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );



function top_menu_args($variabile) {
$defaults = array(
	'theme_location'  => $variabile,
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

    return $defaults;
}

function bot_menu_args($variabile) {
$defaults = array(
	'theme_location'  => $variabile,
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="footer_stuffs %2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

    return $defaults;
}


// 
function custom_theme_setup() {
add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function test($test) {
    echo "<pre>";
        print_r($test);
    echo "</pre>";
}

function work_search_form( $form ) {
    $form = '
            <form role="search" method="get" id="searchform" action="'.home_url( '/' ).'">
            <div class="input-group">
            <input type="text" value="' . get_search_query() . '" name="s" id="s" class="form-control screen-reader-text" placeholder="Cerca...">
            <span class="input-group-btn">
                <input class="btn btn-default" type="submit" id="searchsubmit" value="'. esc_attr__( 'Cerca' ) .'" >
            </span>
        </div><!-- /input-group -->
        </form>';

    return $form;
}

add_filter( 'get_search_form', 'work_search_form' );


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Avvisi',
		'id'            => 'avvisi',
		'before_widget' => '<aside class=" block"><div class=" col-md-12">',
		'after_widget'  => '</div><div class="clearfix"></div></aside>
        </aside>',
		'before_title'  => '<h3 class="dashBoard">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );




function footer_widget() {

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer',
		'before_widget' => '<div class="col-md-6"><div class="footer-block">',
		'after_widget'  => '</div></div>
        </aside>',
		'before_title'  => '<h3 class="footer_title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'footer_widget' );


function sidebar_12() {

	register_sidebar( array(
		'name'          => 'Sidebar_12',
		'id'            => 'sidebar_12',
		'before_widget' => '<aside class=" block"><div class="col-md-12">',
		'after_widget'  => '</div>
        <div class="clearfix"></div></aside>',
		'before_title'  => '<h3 class="sidebar_12">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'sidebar_12' );



function sidebar_6() {

	register_sidebar( array(
		'name'          => 'Sidebar_6',
		'id'            => 'sidebar_6',
		'before_widget' => '<div class="col-md-6"><aside class=" block"><div class="col-md-12">',
		'after_widget'  => '</div><div class="clearfix"></div></aside></div>',
		'before_title'  => '<h3 class="sidebar_6">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'sidebar_6' );



  ///////////////////////
 // Extra per il tema //-------------------------------------[
///////////////////////

function donami_cose() {
    
$donatutto = '
<div class="compramiCose">
    <strong>Ti è stato di aiuto? Ti va di offrimi un caffè?</strong>
    <small>Qui da noi il caffè costa poco, basta solo un euro!</small>
    <span class="compramiWrapper"><input id="compramicose" type="number" value="1"><span>€</span></span>
    <span id="liveCompramicose">Dona<a href="http://paypal.me/Irsuti/1" title="Donazione" target="_blank"></a>
    </span>
</div>
';
    
return $donatutto;
    
}



add_shortcode("donami_cose", "donami_cose");


add_filter('widget_text', 'do_shortcode');

  ///////////////////////
 // Extra per il tema //-------------------------------------]
///////////////////////
?>