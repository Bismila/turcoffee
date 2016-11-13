<div id="rightCol">
    <div class="menuRight">
        <a href="HistoryOfCoffee.php">
            <div class="menuSidebar">А Вы знали об этом?!</div>
        </a>
        <a href="partnerka.php" target="_blank">
            <div class="menuSidebar">ПАРТНЕРКА</div>
        </a>
        <a href="range.php">
            <div class="menuSidebar">Ассортимент</div>
        </a>
        <a href="recipes.php">
            <div class="menuSidebar">Рецепты</div>
        </a>
        <a href="articles.php">
            <div class="menuSidebar" id="rightListArticlesDiv">Статьи
                <ul id="rightListArticlesUL">
                    <?php
                        global $link;
                        //$data = array();
                        connectDBTurcoffee();
                        $result = $link->query('SELECT * from myarticles');
                        $row_count = $result->rowCount();
                        $rows = $result->fetchAll();
                        if ($row_count > 0) {
                            foreach ($rows as $row) {
                                $id = $row['articles_id'];
                                $title = $row['articles_title'];
                                echo "<li class=\"liClassMenu\" id=\"liArticle'.$id.'\">
                                      <a href=\"get.php?id=".$id."\" class=\"liClassMenu\" id=\"aArticle'.$id.'\">".$title."</a></li>
                                      ";
                            }
                        }
                    ?>
                </ul>
           </div>
            <!--<div class="menuSidebar" id="rightListArticlesDiv">Статьи
            <ul id="rightListArticlesUL">
                <li class="liClassMenu" id="liArticle1"><a href="#" class="liClassMenu" id="aArticle1">Приветствую всех посетителей моего сайта "Кофе по-турецки"</a></li>
                <li class="liClassMenu" id="liArticle2"><a href="#" class="liClassMenu" id="aArticle2">75 кофе-фактов</a></li>
                <li class="liClassMenu" id="liArticle3"><a href="#" class="liClassMenu" id="aArticle3">5 болезней от которых помогает уберечься ароматный кофе</a></li>
            </ul>
            </div>-->
        </a>
                <div class="clear"></div>
        <a href="shop.php">
            <div class="menuSidebar">Магазин</div>
        </a>
        <a href="video.php">
            <div class="menuSidebar">Видео</div>
        </a>
    </div>
    <div class="clear"></div>
    <div class="banner">
        <img src="img/coffee_machines.jpg" alt="OKKA" title="OKKA" />
    </div>
    <div class="banner">
        <img src="img/buisnes.jpg" alt="Давай к нам" title="Бизнес" />
    </div>
    <div class="banner">
        <img src="img/banner1.jpg" alt="Работай с нами" title="Работай с нами" />
    </div>
</div>