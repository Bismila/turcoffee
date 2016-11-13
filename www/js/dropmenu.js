/**
 * Created by Олеся on 13.11.2016.
 */
$(document).ready(function () {

    $("div#rightListArticlesDiv").mouseover(function (event) {
       $("ul#rightListArticlesUL:first").slideDown(1500);

    });
    $("div#rightListArticlesDiv").mouseleave(function () {
        $("ul#rightListArticlesUL:first").slideUp(1000);

    });
   /* $(".liClassMenu").click(function (event) {
      var currentArticle = $(this).attr('id');
        alert(currentArticle);
    })

        $.post(
            "../block/rightBlock.php",
            { 'title':currentArticle },

            function (str) {

            });*/

    });

//});
