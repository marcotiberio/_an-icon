$(function() {
    var rotation = 0, 
        scrollLoc = $(document).scrollTop();
    $(window).scroll(function() {
        var newLoc = $(document).scrollTop();
        var x = 1;
        var y = 15;
        var z = 1;
        var rotationStr = "rotate(" + rotation + "45deg)";
        $(".gear").css({
            "-webkit-transform": rotationStr,
            "-moz-transform": rotationStr,
            "transform": rotationStr
        });
    });
})


