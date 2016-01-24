<?php get_header() ?>




<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
<?php

$src = wp_get_attachment_image_src( get_post_thumbnail_id(), "full" );
$srcImg = $src[0];
$srcWidth = $src[1];
$srcHeight = $src[2];

$pubblicato_il = get_the_date( "c");
$modificato_il = get_the_modified_date('c');

?>

<article  itemscope itemtype="http://schema.org/Article">
<span class="hidden" itemprop="url"><?php the_permalink() ?></span>
<span class="hidden" itemprop="description"><?php the_excerpt() ?></span>
    <span class="hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

    <meta itemprop="url" content="<?php echo $srcImg ?>">
    <meta itemprop="width" content="<?php echo $srcWidth ?>">
    <meta itemprop="height" content="<?php echo $srcHeight ?>">

</span>

<!-- <div class="parallax-window" data-parallax="scroll"></div> -->
<div style="background-image: url(<?php echo $srcImg ?>)" class="superHeader">
<div class="nestedHeader">
    <div class="container">
        <h1 id="headline" itemprop="headline"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h1>
        <div class="aboutAuthor"><div class="authorAvatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?><span>A cura di &nbsp;<span itemprop="name" class="authorName"><?php the_author_link() ?></span> in&nbsp;<?php the_category() ?></span></div></div>
    </div>
</div>
<div class="gradienteHeader"></div>
</div>

<div class="contentBg">
    <div class="container">
        <div <?php post_class("col-md-12 thePost"); ?>>
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
            <div itemprop="articleBody" ><?php the_content() ?></div>

            
        </div>
        <div class="col-md-12 socialRow">
        <?php get_template_part("include/sharers") ?>
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

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
  window.___gcfg = {lang: 'it'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php get_footer() ?>
