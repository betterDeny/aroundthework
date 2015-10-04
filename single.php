<?php get_header() ?>


<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<?php

$src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
$src = $src[0];

?>
<article>
<div class="thumbnailWrapper">
    <img alt="<?php the_title() ?>" src="<?php echo $src ?>">
</div>
<div class="titleWrapper">
    <div class="titlePage">
        <h2><?php the_title() ?></h2>
        <div class="postInfo">
        <?php the_category() ?> -
        
            <time datetime="<?php echo get_the_date( "c"); ?>"><?php the_date() ?></time>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12 thePost">
        <?php the_content() ?>
    </div>

</div>
</article>

<?php endwhile; endif; ?>



<?php get_footer() ?>