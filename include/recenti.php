<article class="col-md-12 evidenza">
    <div class="row">
        <div class="copertinaEvidenza">
        <?php echo ultimo_post()["copertina"] ?>
        </div>
        <div class="col-md-12">
            <h2>
                <a href="<?php echo ultimo_post()["permalink"] ?>">
                    <?php echo ultimo_post()["titolo"] ?>
                </a>
            </h2>
            <p><?php echo ultimo_post()["contenuto"] ?></p>
        </div>
        <div class="col-md-12">
        <div class="col-md-12 datiArticolo">
                    <small class="author"><a href="<?php echo ultimo_post()["user_url"] ?>"><?php echo ultimo_post()["autore"] ?></a></small>
                    <small class="cat"><?php 

                        foreach (ultimo_post()["categoria"] as  $keyval => $catval) {

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


</article>
<div class="clearfix"></div>