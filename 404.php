<?php get_header() ?>

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





<?php get_footer() ?>