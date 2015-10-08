<?php


$args = array( 
        'numberposts' => '10',
        'post_status' => 'publish',
    );
	$recent_posts = wp_get_recent_posts( $args );
    
    $recent = wp_get_recent_posts( $args );
    
    $solo_uno = "evidenza";

    foreach ( $recent as $recent ) :


        $author = get_the_author_meta('nickname',  $recent["post_author"] );
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
        
           
                    
                    

        
        
if ($solo_uno === "evidenza" ) :    // controlla se è post unico
?>
<div class=" block">
<article class="col-md-12 evidenza">
    <div class="row">
        <div class="copertinaEvidenza">
        <?php echo $copertina ?>
        </div>
        <div class="col-md-12">
            <h2>
                <a href="<?php echo $permalink ?>">
                    <?php echo $titolo ?>
                </a>
            </h2>
            <p><?php echo $content ?></p>
        </div>
        <div class="col-md-12">
        <div class="col-md-12 datiArticolo">
                    <small class="author"><a href="<?php echo $author_url ?>"><?php echo $author ?></a></small>
                    <span class="cat">
                    <?php 
                    
            if (is_array($cats) || is_object($cats)) {
                foreach($cats as $keyval => $catval) {
                    
                    // Prendi l'ID di ciascuna categoria
                    $category_id = get_cat_ID( $catval["name"] );

                    // perndi l'URL della categoria
                    $category_link = get_category_link( $category_id );

                    if ($keyval === 0) {
                        echo '
                        <a href="'.esc_url( $category_link ).'">
                        <small class="cat-'.$keyval.'">'.$catval["name"].'</small> 
                        </a>';
                    }

                    else {                                        
                        get_the_author_link();
                        echo ', 
                        <a href="'.esc_url( $category_link ).'">
                        <small class="cat-'.$keyval.'">'.$catval["name"].'</small>
                        </a>';
                        }

                        $keyval ++;
                    }
                }
            $solo_uno = "padre";   
            // scorri post
           ?>
                    </span>

                </div>
        </div>
    </div>


</article>

<div class="clearfix"></div>

 </div>
<?php 
        
        endif; // non è più 0

        if ($solo_uno === "padre") : // controlla se il blocco padre è stato creato
        
?>
<div id="recenti" class="block">
<?php  
        
        endif; // il blocco padre è stato messo. Procedi
        
if ($solo_uno == "figlio") : // controlla se il blocco padre è stato installato, quindi immetti gli articoli
 
        $copertina = get_the_post_thumbnail( $recent["ID"], "thumbnail");
                        ?>

<article class="col-md-12 others">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <?php echo $copertina ?>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="row">
                
                <div class="col-lg-12">
                    <time datetime="<?php echo $date_iso ?>" class="tempo"><?php echo $pfx_date ?></time>
                    <h3 class="titlePost">
                        <a href="<?php echo $permalink ?>">
                            <?php echo $titolo ?>
                        </a>
                    </h3>

                    <p><?php echo $content ?></p>
                </div>
            </div>
            

            
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-12 datiArticolo">
                    <small class="author"><a href="<?php echo $author_url ?>"><?php echo $author ?></a></small>
                    <small class="cat"><?php 
                        if (is_array($cats) || is_object($cats)) {
                            foreach($cats as $keyval => $catval) {

                            // Get the ID of a given category
                            $category_id = get_cat_ID( $catval["name"] );

                            // Get the URL of this category
                            $category_link = get_category_link( $category_id );

                            if ($keyval === 0) {
                                echo '
                                <a href="'.esc_url( $category_link ).'">
                                <span class="cat-'.$keyval.'">'.$catval["name"].'</span> 
                                </a>';
                            }

                            else {                                        
                                get_the_author_link();
                                echo ', 
                                <a href="'.esc_url( $category_link ).'">
                                <span class="cat-'.$keyval.'">'.$catval["name"].'</span>
                                </a>';
                            }

                            $keyval ++;
                            }
                        }
                        else return false;
                        ?>
                    </small>

                </div>
            </div>
        </div>
    </div>
</article>
<?php 
    endif;
    if ($solo_uno === "padre") {
            $solo_uno = "figlio";
    }
    else
        $solo_uno = "figlio";
    endforeach; // fine del loop
?>

<div class="clearfix"></div> 
</div>