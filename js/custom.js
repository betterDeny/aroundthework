$(document).ready(function() {
    document.querySelector( "#nav-toggle" )
      .addEventListener( "click", function() {
        this.classList.toggle( "active" );
        $("#navToggle").slideToggle();
        $("#navToggle .mainNavbar").toggleClass("sali").toggleClass("scendi");
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

    $("#compramicose").keyup(function(){
        $("#liveCompramicose > a").attr( "href", "http://paypal.me/Irsuti/" + ($(this).val()) );
    });


    
    function fallbackADB() {
        $("body").addClass("ADB");
    }
    
    if( window.rilevatoreDiStronzi === undefined ){
    // adblock attivo, fai qualcosa!
    fallbackADB();
    }
});
