
$(document).ready(function () {
    equalize();
});

$(window).resize(function () {
    removeHeights();
    equalize();
});

function equalize() {
    $(".container .height-row .price-contant").each(function () {
        var heights = $(this).find("p").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);
        $(this).find("p").height(maxHeight);

    });
}

function removeHeights() {
    $(".container .height-row .price-contant").each(function () {
        $(this).find("p").height("auto");

    });
}

