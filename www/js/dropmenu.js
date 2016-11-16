/**
 * Created by Олеся on 13.11.2016.
 */
$(document).ready(function () {

    $("div#rightListArticlesDiv").mouseover(function (event) {
       $("ul#rightListArticlesUL:first").slideDown(800);

    });
    $("div#rightListArticlesDiv").mouseleave(function () {
        $("ul#rightListArticlesUL:first").slideUp(1000);

    });
    $("div#rightListReceptiesDiv").mouseover(function (event) {
        $("ul#rightListReceptiesUL:first").slideDown(800);

    });
    $("div#rightListReceptiesDiv").mouseleave(function () {
        $("ul#rightListReceptiesUL:first").slideUp(1000);

    });
});

//});
