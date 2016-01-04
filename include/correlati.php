<?php
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts() {
    global $post;
    $tags = wp_get_post_tags( $post->ID );
    if($tags) {
        $i = 0;
        foreach( $tags as $tag ) {
            if ($i === 0) {
                $tag_arr = $tag->slug . ',';
                $i++;
            }
            
            else {
                $tag_arr .= $tag->slug . ',';
            }
        }
        $args = array(
            'tag' => $tag_arr,
            'numberposts' => 4, /* You can change this to show more */
            'post__not_in' => array($post->ID)
        );
        $related_posts = get_posts( $args );
        if($related_posts) {

        echo '<div id="joints-related-posts" class="container" >';
            echo '<div class="col-md-12"><h5>Leggi anche...</h5></div>
            <div class="row">';
            foreach ( $related_posts as $post ) : setup_postdata( $post ); 
                  // miniatura?>

                <a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <article class="related_post col-md-3">
                    <div class="block">
                	<div>
	                    <figure><?php the_post_thumbnail('medium') ?></figure>
                        <div class="titleGroup">
                            <h6><?php the_title(); ?></h6>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </a>
                </div>
</article>
            <?php endforeach; 
        		echo '</div></div>';
        	}
             
            }
    wp_reset_postdata();
   
}
joints_related_posts();
?>