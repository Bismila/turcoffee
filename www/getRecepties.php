<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Статьи";
    require_once "blocks/head.php";
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
//require_once "functions/connectDB.php";

?>
<!--основная часть-->
<div id="wrapper">
    <!--левая колонка - статьи и основная часть-->
    <div id="leftCol">
          <?php
            if(isset($_GET['id']))
            {
                $title = htmlentities($_GET['id']) ;
                require_once "functions/connectDB.php";
                connectDBTurcoffee();
                $stmt = $link->query("SELECT * FROM myrecipes");
                $row_count = $stmt->rowCount();
                $rows = $stmt->fetchAll();
                foreach($rows as $row)
                {
                    $id = $row['id'];
                    $str = $row['title'];
                   if($title == $id) {
                        echo "<div id=\"bigArticle\" name=\"$id\">";
                        echo "<img src=\"img/Recepties/".$id.".jpg\" alt=\"image\" class=\"img_Hello\" />";
                        echo "<div id=\"conteiner$id\"> <h3>".$row['title']."</h3>
						     	<p>" . $row['fullText'] . "</p>
						     	</div></div>
								<div class=\"clear\"><br /></div>
								";
                    }
                }
            }
          ?>
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