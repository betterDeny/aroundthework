    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
        $("#navToggle").slideToggle();
    });

    $(window).scroll(function() {
        var hHeader = $(".theTitle").height();
        var topScroll = $(window).scrollTop();
        if ( hHeader < topScroll ) {
            var titolo = $(".title");
            $("#theTitlecopied").html(titolo.html());
            $(".navigate").removeClass("freeNavigate");
            $(".navigate").addClass("blockNavigate");

        }
        
        else {
            $("#theTitlecopied").html("");
            $(".navigate").removeClass("blockNavigate");
            $(".navigate").addClass("freeNavigate");
        }
    });