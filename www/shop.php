<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Магазин";
    include_once "blocks/head.php";
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {});
    </script>
</head>
<body>
<!--шапка сайта-->
<?php
require_once "blocks/header.php";
?>

<!--основная часть-->
<div id="wrapper">
    <!--левая колонка - статьи и основная часть-->
    <div id="leftCol">
        <div id="bigArticle">
            <img src="img/uc.png" alt="идет работа" title="Страница в разработке" class="img_Hello" />
            <h3>Заходите позже...</h3>
        </div>
        <div class="clear">
            <br />
        </div>

    </div>
    <!--правая колонка - меню и банера-->
    <?php
    require_once "blocks/rightBlock.php";
    ?>
</div>
<!--подвал сайта - footer-->
<?php
require_once "blocks/footer.php";
?>

</body>
</html>