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
    
    if( window.single !== undefined ) {
        
        var avviso = '<span id="piccolo" class="selected"><small>A-</small></span><span id="grande"><small>A+</small></span><span class="explain">Cecato? Premi qui per ingrandire il testo.</span>';

        $(".alert-neutro").append(avviso);

            $("#piccolo").on("click", function() {
                $(".thePost").css("font-size","14px");
                $(this).addClass("selected");
                $("#grande").removeClass("selected");
            });

            $("#grande").on("click", function() {
                $(".thePost").css("font-size","22px");
                $(this).addClass("selected");
                $("#piccolo").removeClass("selected");
            });

    }
    
    $(function() {
        var a = $("#logo").height();
        $(".subtitleBg").height(a).css("opacity","1");
    })
});

