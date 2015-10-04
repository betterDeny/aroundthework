<?php

foreach ( ultimi_post() as $key => $posts ) : ?>

<div class="col-md-12 others">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <?php echo $posts["copertina"] ?>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="row">
                
                <div class="col-lg-12">
                    <h3 class="titlePost">
                        <a href="<?php echo $posts["permalink"] ?>">
                            <?php echo $posts["titolo"] ?>
                        </a>
                    </h3>
                    <time datetime="<?php echo $posts["data_raw"] ?>" class="tempo"><?php echo $posts["data"] ?></time>
                    <p><?php echo $posts["contenuto"] ?></p>
                </div>
            </div>
            

            
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="col-md-12 datiArticolo">
                    <small class="author"><a href="<?php echo $posts["user_url"] ?>"><?php echo $posts["autore"] ?></a></small>
                    <small class="cat"><?php 

                        foreach ($posts["categoria"] as  $keyval => $catval) {

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

                        ?>
                    </small>

                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
<div class="clearfix"></div>