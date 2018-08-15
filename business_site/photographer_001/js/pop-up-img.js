$(function() {
    $(".pic").click(function () {
        var image = $(this);
        var src = image.attr('src');
        $("body").append( "<div class='pop-up'>" + "<div class='pop-up-bg'></div>" +
            "<img src=" + src + " class='pop-up-img'></div>" );

        $(".pop-up").fadeIn(700);

        $(".pop-up-img").click(function() {
            $(".pop-up").fadeOut(700);
        });

        $(".pop-up-bg").click(function() {
            $(".pop-up").fadeOut(700);
        });
    });
});

