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
		'after_widget'  => '</div><div class="clearfix"></div>
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
		'before_widget' => '<div class="col-md-12"><aside class=" block">',
		'after_widget'  => '</aside></div>
        </aside><div class="clearfix"></div>',
		'before_title'  => '<h3 class="sidebar_12">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'sidebar_12' );



function sidebar_6() {

	register_sidebar( array(
		'name'          => 'Sidebar_6',
		'id'            => 'sidebar_6',
		'before_widget' => '<div class="col-md-6"><aside class=" block">',
		'after_widget'  => '</aside></div>
        </aside><div class="clearfix"></div>',
		'before_title'  => '<h3 class="sidebar_6">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'sidebar_6' );



  ///////////////////////
 // Extra per il tema //-------------------------------------[
///////////////////////

function ultimo_post() {
    $args = array( 
        'numberposts' => '1',
        'post_status' => 'publish',
        'category' => 1,
    );
	$recent_posts = wp_get_recent_posts( $args );
    
    $recent = wp_get_recent_posts( $args );

    foreach ( $recent as $recent ) {
                
                $author = get_the_author_meta('user_nicename',  $recent["post_author"] );
                $author_url = get_the_author_meta('user_url', $recent["post_author"] );

                $content = $recent["post_excerpt"];

                $permalink = get_permalink($recent["ID"]);

                $titolo = $recent["post_title"];

                $copertina = get_the_post_thumbnail( $recent["ID"], "large");
        
                $format = "j F, Y";     
                $pfx_date = get_the_date( $format, $recent["ID"] );
        
                $format = "c";
                $date_iso = get_the_date( $format, $recent["ID"] );
               
        
        
                $post_categories = wp_get_post_categories( $recent["ID"] );
                
                $cats = array();
        
                foreach($post_categories as $c){
                    
                    $cat = get_category( $c );
                    
                    $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                    
                    
                }

        $array = array(
                "autore" => $author,
                "contenuto" => $content,
                "permalink" => $permalink,
                "titolo" => $titolo,
                "copertina" => $copertina,
                "categoria" => $cats,
                "user_url" => $author_url,
                "data" => $pfx_date,
                "data_raw" => $date_iso
            );
        return $array;
    }
}

function ultimi_post() {
    $args = array( 
        'numberposts' => '10',
        'post_status' => 'publish',
        'category' => 1,
    );
	$recent_posts = wp_get_recent_posts( $args );
    
    $recent = wp_get_recent_posts( $args );
    
    $i = 0;

    foreach ( $recent as $recent ) {
        
                $author = get_the_author_meta('user_nicename',  $recent["post_author"] );
                $author_url = get_the_author_meta('user_url', $recent["post_author"] );

                $content = $recent["post_excerpt"];

                $permalink = get_permalink($recent["ID"]);

                $titolo = $recent["post_title"];

                $copertina = get_the_post_thumbnail( $recent["ID"], "thumbnail");
        
                $format = "j F, Y";     
                $pfx_date = get_the_date( $format, $recent["ID"] );
        
                $format = "c";
                $date_iso = get_the_date( $format, $recent["ID"] );
               
        
        
                $post_categories = wp_get_post_categories( $recent["ID"] );
                
                $cats = array();
        
                foreach($post_categories as $c){
                    
                    $cat = get_category( $c );
                    
                    $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                    
                    
                }
    
            if ($i !== 0) {
                $array[$i] = array(
                    "autore" => $author,
                    "contenuto" => $content,
                    "permalink" => $permalink,
                    "titolo" => $titolo,
                    "copertina" => $copertina,
                    "categoria" => $cats,
                    "user_url" => $author_url,
                    "data" => $pfx_date,
                    "data_raw" => $date_iso
                );
            }
            
            //test($array);
        
        $i ++;
    }
    
    
     //test($array);
     return $array;
}


  ///////////////////////
 // Extra per il tema //-------------------------------------]
///////////////////////

?>