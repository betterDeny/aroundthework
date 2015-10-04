<article class="col-md-12 evidenza">
    <div class="row">
        <div class="copertinaEvidenza">
        <?php 
            $recente = ultimo_post();
            echo $recente["copertina"] ?>
        </div>
        <div class="col-md-12">
            <h2>
                <a href="<?php echo $recente["permalink"] ?>">
                    <?php echo $recente["titolo"] ?>
                </a>
            </h2>
            <p><?php echo $recente["contenuto"] ?></p>
        </div>
        <div class="col-md-12">
        <div class="col-md-12 datiArticolo">
                    <small class="author"><a href="<?php echo $recente["user_url"] ?>"><?php echo $recente["autore"] ?></a></small>
                    <small class="cat"><?php 

                        foreach ($recente["categoria"] as  $keyval => $catval) {

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