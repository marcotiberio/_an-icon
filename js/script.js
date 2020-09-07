$(function() {
    var rotation = 0, 
        scrollLoc = $(document).scrollTop();
    $(window).scroll(function() {
        var newLoc = $(document).scrollTop();
        var diff = scrollLoc - newLoc;
        rotation += diff, scrollLoc = newLoc;
        var rotationStr = "rotate3d(" + rotation + "deg)";
        $("#logo").css({
            "-webkit-transform": rotationStr,
            "-moz-transform": rotationStr,
            "transform": rotationStr
        });
    });
})