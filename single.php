<?php get_header() ?>




<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<?php

$src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
$src = $src[0];

$pubblicato_il = get_the_date( "c");
$modificato_il = get_the_modified_date('c');

?>

<article  itemscope itemtype="http://schema.org/Article">
<span class="hidden" itemprop="url"><?php the_permalink() ?></span>
<span class="hidden" itemprop="description"><?php the_excerpt() ?></span>
<span class="hidden" ><img itemprop="image" alt="thumbnail_hidden" src="<?php echo $src ?>"></span>
<div class="parallax-window parallax-page" data-natural-height="100%" data-parallax="scroll" data-image-src="<?php echo $src ?>"></div>

<div class="titleWrapper">
    <div class="titlePage">
        <h2 itemprop="headline"><?php the_title() ?></h2>
        <div class="postInfo">
        <?php the_category() ?>
        
        </div>
    </div>
</div>
<div class="contentBg">
    <div class="container">
        <div itemprop="articleBody" class="col-md-12 thePost">
            <div class="row">
            <div class="alert alert-neutro" role="alert">

            </div>

            <div class="col-md-12 pubblicatoIl text-right">

                <div <?php if ($pubblicato_il !== $modificato_il) { echo 'class="hidden"'; } ?>>
                    <strong>Pubblicato: </strong>
                    <time itemprop="datePublished" datetime="<?php echo get_the_date( "c"); ?>"><?php the_date() ?></time>
                </div>
                <?php                    
                    if ($pubblicato_il !== $modificato_il) :
                ?>
                <div>
                    <strong>Aggiornato: </strong>
                    <time itemprop="dateModified" datetime="<?php echo the_modified_date('c'); ?>"><?php echo the_modified_date(); ?></time>
                </div>
                <?php endif; ?>

            </div>

            </div>
            <?php the_content() ?>

            
        </div>

        <div class="col-md-12 theTags">
            <?php the_tags(); ?>

        </div>

        <div class="col-md-12">
            
            <div itemprop="author" itemscope itemtype="http://schema.org/Person" class="authorCredits">
                
                <div class="authorAvatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?></div>
                <div class="authorLink">

                        <span itemprop="name" class="authorName"><?php the_author_link() ?></span>
                   
                    <span class="bio"><?php echo get_the_author_meta( "description" ); ?></span>
                    
                    
                    <span><?php echo get_the_author_meta( "twitter" ); ?></span>
                </div>             
            </div>
        </div>
        <?php comments_template(); ?>
    </div>
</div>
<div id="correlati">
    
    <?php get_template_part("include/correlati") ?>
    <div class="clearfix"></div>
    
</div>
</article>

<div id="topAds">
    <div class="a-d-v container"></div>
</div>

<?php endwhile; endif; ?>



<?php get_footer() ?>