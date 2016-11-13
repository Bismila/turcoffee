<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Статьи";
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
                include_once "functions/connectDB.php";
                $stmt = $link->query("SELECT * FROM myarticles");
                $row_count = $stmt->rowCount();
                $rows = $stmt->fetchAll();
                foreach($rows as $row)
                {
                    $id = $row['articles_id'];
                    $str = $row['articles_title'];
                   // echo $str." = ".$id."<br/> ";

                    if($title == $id) {
                        echo "<div id=\"bigArticle\" name=\"$id\">";
                        echo "<img src=\"img/articles/" . $id . ".jpg\" alt=\"image\" class=\"img_Hello\" />";
                        echo "<div id=\"conteiner$id\"> <h3>" . $row['articles_title'] . "</h3>
						     	<p>" . $row['articles_full_text'] . "</p>
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