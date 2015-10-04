
<div class="col-md-6"> <!-- Colonna SX -->


            <div class=" block">
                <?php get_template_part("include/recenti") ?>
            </div>


            <div id="recenti" class="block">
        <?php get_template_part("include/recenti_multipli") ?>

        </div>
</div>

<div class="col-md-6">    <!-- Colonna SX -->


            <div class="alert alert-warning blockBrother" role="alert"><strong>Ti avviso!</strong> Il sito è in costruzione, potrebbe far schifo.</div>


        
            <?php dynamic_sidebar( 'Avvisi' ); ?>

            <?php dynamic_sidebar( 'Sidebar_12' ); ?>
    <div class="row">
    
            <?php dynamic_sidebar( 'Sidebar_6' ); ?>
    </div>
    
</div>