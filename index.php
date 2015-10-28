<?php get_header() ?>


<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<?php

$src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
$src = $src[0];

?>
<article itemscope itemtype="http://schema.org/Article">
<span class="hidden" itemprop="url"><?php the_permalink() ?></span>
<span class="hidden" itemprop="description"><?php the_excerpt() ?></span>
<span class="hidden" ><img itemprop="image" alt="thumbnail_hidden" src="<?php echo $src ?>"></span>
<div class="parallax-index parallax-window" data-natural-height="100%" data-parallax="scroll" data-image-src="<?php echo $src ?>"></div>

<div class="titleWrapper">
    <div class="titlePage">
        <h2 itemprop="headline"><a href="<?php the_permalink(); ?>" title="Collegamento a <?php the_title() ?>"><?php the_title() ?></a></h2>
        <div class="postInfo">
            <?php if(has_category()) {
                the_category();
                    echo " - ";
                }
            ?>
            <time itemprop="datePublished" datetime="<?php echo get_the_date( "c"); ?>"><?php the_date() ?></time>
        </div>
    </div>
</div>
<div class="container">
    <div itemprop="description" class="col-md-12 thePost">
        <?php the_excerpt() ?>
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
</div>
    
</article>

<?php endwhile; endif; ?>
<?php if (!have_posts()) : ?>
<div class="notFound">
        <?php if ( is_404() ) : ?>
<div class="container404">
    <div class="container">
        <div class="col-md-12">
            <div class="p404">
                <span class="p404title">404</span>
                <span class="message">Pagina non trovata!</span>
            </div>          
        </div>
        <div class="clearfix"></div>    
    </div>
</div>
        <?php endif; ?>
    <div class="container">

        <div class="col-md-12">
            <h2>Trovato niente?</h2>
            <p>Prova fare una ricerca, potresti trovare quello che cerchi.</p>
        </div>
        <div class="col-md-12"><?php get_search_form(); ?></div>
    </div>
</div>

<?php endif; ?>



<?php get_footer() ?>