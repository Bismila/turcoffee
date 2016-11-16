<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Рецепты";
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
            <h3>Рецепты кофе...</h3>
            <img src="img/Recepties/0.jpg" alt="Кофе по-ирландски" title="Кофе по-ирландски" class="img_Hello" />

        </div>
        <div class="clear">
            <br />
        </div>
        <?php
        global $link;
        //$data = array();
        connectDBTurcoffee();
        $result = $link->query('SELECT * from myrecipes');
        $row_count = $result->rowCount();
        $rows = $result->fetchAll();
        if($row_count>0) {
            /*$id=1;*/
            foreach($rows as $row)
            {
               $id = $row['id'];
                echo "<div id=\"bigArticle\">";
                echo "<img src=\"img/Recepties/".$id.".jpg\" alt=\"image\" class=\"img_Hello\" />";
                echo"<h3>".$row['title']."</h3>
						     	<p>".$row['introText']."</p>
						    	<a href=\"getRecepties.php?id=".$row['id']."\" id=\"".$row['id']."\" class=\"moreClass\"><div class=\"more\">Далее</div></a>
						    	</div>
								<div class=\"clear\"><br />
							</div>";
            }
        }
        ?>

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