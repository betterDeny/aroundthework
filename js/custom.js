$(document).ready(function () {
    "use strict";
    document.querySelector("#nav-toggle")
        .addEventListener("click", function () {
            this.classList.toggle("active");
            $("#navToggle").slideToggle();
            $("#navToggle .mainNavbar").toggleClass("sali").toggleClass("scendi");
        });

    $(window).scroll(function () {
        var hHeader = $(".theTitle").height(),
            topScroll = $(window).scrollTop(),
            titolo = $(".title");
        if (hHeader < topScroll) {
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

    $("#compramicose").keyup(function () {
        $("#liveCompramicose > a").attr("href", "http://paypal.me/Irsuti/" + ($(this).val()));
    });


    
    function fallbackADB() {
        $("body").addClass("ADB");
        $(".ADB").append('<span id="blockblock"></span>');
        $("#blockblock").css({
            "z-index": "10000",
            "position": "fixed",
            "width": "100%",
            "height": "100%",
            "background": "#DB4437",
            "background-image": "url(" + themeDirectory + "/img/adblockdetected.png)",
            "background-image": "url(" + themeDirectory + "/img/adblockdetected.svg)",
            "background-size": "contain",
            "background-position": "center center",
            "background-repeat": "no-repeat",
            "top": "0px",
            "right": "0px",
            "display": "none"
        });
        setTimeout(function () {
            $("#blockblock").fadeIn("slow");
            setTimeout(function () {
                $("#blockblock").fadeOut("slow");
            }, 5000);
        }, 10000);
    }
    
    if (window.rilevatoreDiStronzi === undefined) {
    // adblock attivo, fai qualcosa!
        fallbackADB();
    }
    
    if ($(".alert-neutro").length === 1) {
        
        var avviso = '<span id="piccolo" class="selected"><small>A-</small></span><span id="grande"><small>A+</small></span><span class="explain">Il testo è troppo piccolo? Premi qui per ingrandirlo.</span>';

        $(".alert-neutro").append(avviso);

        $("#piccolo").on("click", function () {
            $(".thePost").css("font-size", "16px");
            $(this).addClass("selected");
            $("#grande").removeClass("selected");
        });

        $("#grande").on("click", function () {
            $(".thePost").css("font-size", "22px");
            $(this).addClass("selected");
            $("#piccolo").removeClass("selected");
        });

    }
    
    $(function () {
        var a = $("#logo").height();
        $(".subtitleBg").height(a).css("opacity", "1");
    });
});

var cookies = document.cookie;
if (!cookies.match("accettazione")) {
    $("body").append('<div id="cookies"> <div class="container-fluid"> <div class="col-md-8 cookieInfo">Workaround richiede di accettare i cookie per scopi legati a prestazioni, social media e annunci pubblicitari. Lo so, è una seccatura, ma navigando su questo sito stai accettando di utilizzarli.</div><div class="col-md-4 cookieButtons"> <button id="cookieAccept">Accetto</button> <button id="cookieInfo" onclick="window.location.href=\'http://workaround.space/cookie-policy\'">Ulteriori Informazioni</button> </div></div></div>');
}

function setCookie(cname, cvalue, exdays) {
    "use strict";
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

$("#cookieAccept").click(function () {
    "use strict";
    setCookie("accettazione", 1, 60);
    $("#cookies").fadeOut("slow");
});

function underTitleHeight() {
    "use strict";
    var altezzaTitolo = $(".theTitle").height(),
        altezzaFinestra = $(window).height(),
        diffAltezze = altezzaFinestra - altezzaTitolo;
    $(".superHeader").height(diffAltezze);
}


underTitleHeight();

$(window).resize(function () {
    "use strict";
    underTitleHeight();

});


(function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.4&appId=104522549568";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

setTimeout(function () {
    "use strict";
    $("#preload").remove();
}, 1000);
