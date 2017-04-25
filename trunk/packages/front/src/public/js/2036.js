$(document).ready(function () {
    //Initiate equalize on load
    equalize();
});

//Equalize on resizing of window
$(window).resize(function () {
    removeHeights();
    equalize();
});

function equalize() {

    $(".container .height-row").each(function () {
        var heights = $(this).find(".box").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);

        $(this).find(".box").height(maxHeight);

    });
}

function removeHeights() {

    $(".container .height-row").each(function () {

        $(this).find(".box").height("auto");

    });
}