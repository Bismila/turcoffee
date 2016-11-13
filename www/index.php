<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Главная страница";
	include_once "blocks/head.php";
	require_once "functions/connectDB.php";

	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		/**/
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
				<?php

				?>

				<?php
				global $link;
				//$data = array();
				connectDBTurcoffee();
				$result = $link->query('SELECT * from myarticles');
				$row_count = $result->rowCount();
				$rows = $result->fetchAll();
				if($row_count>0) {
					$id=1;
					foreach($rows as $row)
					{
						if($id == $row['articles_id']){
						echo "<div id=\"bigArticle\">";
						echo "<img src=\"img/articles/".$row['articles_id'].".jpg\" alt=\"image\" class=\"img_Hello\" />";
							echo"<h3>".$row['articles_title']."</h3>
						     	<p>".$row['articles_full_text']."</p>
						    	</div>
								<div class=\"clear\"><br />
							</div>";
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