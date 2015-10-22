<?php get_header() ?>


<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<?php

$src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
$src = $src[0];

?>
<article>
<div class="parallax-window parallax-page" data-natural-height="100%" data-parallax="scroll" data-image-src="<?php echo $src ?>"></div>

<div class="titleWrapper">
    <div class="titlePage">
        <h2><?php the_title() ?></h2>
        <div class="postInfo">
        
            <time datetime="<?php echo get_the_date( "c"); ?>"><?php the_date() ?></time>
        </div>
    </div>
</div>
<div class="contentBg">
    <div class="container">
        <div class="col-md-12 thePost">
            <?php the_content() ?>
        </div>
        <div class="col-md-12">
            <div class="authorCredits">
                <div class="authorAvatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?></div>
                <div class="authorLink">
                    <span class="authorName"><?php the_author_link() ?></span>
                    <span class="bio"><?php echo get_the_author_meta( "description" ); ?></span>
                    <span><?php echo get_the_author_meta( "twitter" ); ?></span>
                </div>
            </div>
        </div>

        <?php comments_template(); ?>
    </div>
    <div class="clearfix"></div>
</div>  
</article>

<?php endwhile; endif; ?>



<?php get_footer() ?>