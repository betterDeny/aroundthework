var rilevatoreDiStronzi = true;

function mobileAds() {
    var larghezzaDoc = $(window).width();
    if (larghezzaDoc < 400) {
        $("#adCell").css({
            "text-align" : "center",
            "display" : "inline-block",
            "height": "60px",
            "width": "100%",
            "position": "fixed",
            "bottom": "0px",
            "left" : "0px",
            "z-index" : "1000"
        });
        $(".licenza").css("padding-bottom","60px");
        $.get("wp-content\/themes/\aroundthework/\js/\mobile\.\html", 
            function(data, status) {
            $("#adCell").append(data);
            console.log(status);
        });
    }

    else {
        $("#adCell").empty().removeAttr( 'style' );
        $(".licenza").css("padding-bottom","0px");
    }
};

mobileAds();
$(window).on('resize', function(){
    mobileAds();
});

function leaderAds() {
    $(".a-d-v").css({
        "height" : "100px",
        "margin" : "5px 0px",
        "width" : "100%",
        "position" : "relative",
        "z-index": "1"
    });
    $.get("wp-content\/themes/\aroundthework/\js/\leadercoso\.\html", 
           function(data, status) {
        $(".a-d-v").html(data);
        console.log(status);
    });
}

leaderAds();
$(window).on('resize', function(){
    if ($(window).width() < 1100 ) {
        leaderAds();
    }
    if ($(window).width() === 1100 ) {
        leaderAds();
    }
});
