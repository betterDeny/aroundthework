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
        $author_ID = get_the_author_meta('ID',  $recent["post_author"] );
        $author_url = get_the_author_meta('user_url', $recent["post_author"] );
        $avatar = get_avatar( $author_ID, 22 ); 

        $content = $recent["post_excerpt"];

        $permalink = get_permalink($recent["ID"]);
        $id_post[] = $recent["ID"];
        

        $titolo = $recent["post_title"];
        $data = get_the_date( "c", $recent["ID"] );

        $copertina = get_the_post_thumbnail( $recent["ID"], "large");
        $src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
        $src = $src[0];

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
<div <?php post_class("block") ?>>
<article itemscope itemtype="http://schema.org/Article" class="col-md-12 evidenza">
    <div class="row">
        <div class="copertinaEvidenza">
        <?php echo $copertina ?>
        </div>
        <div class="col-md-12 ">
            <h2>
                <a itemprop="url" href="<?php echo $permalink ?>">
                    <span itemprop="headline"><?php echo $titolo ?></span>
                </a>
            </h2>
            <img itemprop="image" alt="cover <?php echo $titolo ?>" src="<?php echo $src ?>" class="hidden">
            <time class="hidden" itemprop="datePublished" datetime="<?php echo $data ?>"><?php the_date() ?></time>
            <p itemprop="description"><?php echo $content ?></p>
        </div>
        <div class="col-md-12">
        <div class="col-md-12 datiArticolo">
            <?php echo $avatar ?><small itemprop="author" itemscope itemtype="http://schema.org/Person" class="author"></php><a href="<?php echo $author_url ?>"><span itemprop="name" class="authorName"><?php echo $author ?></span></a></small>
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
<div id="recenti" class="moreBlocks">
<?php  
        
        endif; // il blocco padre è stato messo. Procedi
        
if ($solo_uno == "figlio") : // controlla se il blocco padre è stato installato, quindi immetti gli articoli
 
        $copertina = get_the_post_thumbnail( $recent["ID"], "thumbnail");
                        ?>

<article itemscope itemtype="http://schema.org/Article" <?php post_class("col-md-12 others block") ?>>
    <div class="row">
        <div class="excerptCover col-md-4 col-sm-4">
            <?php echo $copertina ?>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="row">
                
                <div class="col-lg-12 excerpt">
                    <img itemprop="image" alt="cover <?php echo $titolo ?>" src="<?php echo $src ?>" class="hidden">
                    <time class="hidden" itemprop="datePublished" datetime="<?php echo $data ?>"><?php the_date() ?></time>
                    <h3 class="titlePost">
                        <a itemprop="url" href="<?php echo $permalink ?>">
                            <span itemprop="headline"><?php echo $titolo ?></span>
                        </a>
                    </h3>

                    <p itemprop="description"><?php echo $content ?></p>
                </div>
            </div>
            

            
        </div>
        
        <div class="clearfix"></div>
            
                <div class="col-md-12 excerptWrapper">
                    <div itemprop="author" itemscope itemtype="http://schema.org/Person"  class="excerptAuthor">
                    <?php echo $avatar ?><small itemprop="name" class="author"><a href="<?php echo $author_url ?>"><?php echo $author ?></a></small>
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
            
        <div class="clearfix"></div>
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
    //print_r($id_post);
    //print_r(wp_count_posts()->publish);
?>

<div class="clearfix"></div> 
</div>
