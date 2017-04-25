
$(document).ready(function () {
    equalize();
});

$(window).resize(function () {
    removeHeights();
    equalize();
});

function equalize() {
    $(".container .height-row").each(function () {
        var heights = $(this).find(".height-equal").map(function () {
            return $(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);
        $(this).find(".height-equal").height(maxHeight);

    });
}

function removeHeights() {
    $(".container .height-row").each(function () {
        $(this).find(".height-equal").height("auto");

    });
}

