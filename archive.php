<?php get_header(); ?>
<div  id="main" >
    <div class="container">
<?php

$colonna = "sinistra";
        
$conta = 1;
        
if (have_posts()) : 
    while (have_posts()) : the_post(); 
        
        
        //echo $conta;
        $author = get_the_author_meta('nickname');
        $author_ID = get_the_author_meta('ID');
        $author_url = get_the_author_meta('user_url');
        $avatar = get_avatar( $author_ID, 30 ); 

        $content = get_the_excerpt();

        $permalink = get_permalink();
        $id_post[] = get_the_ID();
        

        $titolo = get_the_title();
        $data = get_the_date( "c");

        $copertina = get_the_post_thumbnail( get_the_ID(), "large");
        $src = wp_get_attachment_image_src( get_post_thumbnail_id(), array(10,10) );
        $src = $src[0];

        $format = "j F, Y";     
        $pfx_date = get_the_date( $format, get_the_ID() );

        $format = "c";
        $date_iso = get_the_date( $format, get_the_ID() );
        


        $post_categories = wp_get_post_categories( get_the_ID() );

        $cats = array();

        foreach($post_categories as $c){

            $cat = get_category( $c );

            $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
            
        }
        
           
                    
?>
      
<?php if ($conta === 1) : ?>
        <div class="col-md-6"><div class="row">
<?php endif; ?>
<?php $numero_post = $wp_query->found_posts; $diviso = $numero_post/2; if (($conta > $diviso) && (!isset($colonna_dx)) ) : ?>
        </div></div>
        <div class="col-md-6"><div class="row">
<?php $colonna_dx = true; endif; ?>
            

        <div class="col-md-12">

        <?php  $copertina = get_the_post_thumbnail(get_the_ID(), "thumbnail"); ?>


        <div class=" block">
        <article itemscope itemtype="http://schema.org/Article" class="col-md-12 block">
            <div class="row">
                 <div itemprop="author" itemscope itemtype="http://schema.org/Person"  class="col-md-12">
                         <?php echo $avatar ?><small itemprop="name" class="author"><a href="<?php echo $author_url ?>"><?php echo $author ?></a></small><small><i class="fa fa-caret-right"></i> </small><strong> <?php 
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
                        </strong></div>
                <div class="excerptCover col-md-12 col-sm-4">

                   <img itemprop="image" style="width: 100%; height: auto; background: #FFF" alt="cover <?php echo $titolo ?>" src="<?php echo $src ?>">
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="row">

                        <div class="col-lg-12 excerpt">
                            
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
            </article>
        </div>
            </div>
        <?php 
          $conta++;
          endwhile; // fine del loop
            //print_r($id_post);
            //print_r(wp_count_posts()->publish);
             endif;  
        ?>

        
<div class="clearfix"></div> 
    </div>
</div>
        </div>
</div>
  
<?php get_footer(); ?>