<?php
use yii\helpers\Html;

    $href = $model->url;
    $date = yii::$app->controller->renderDateToWord($model->date_created);
    // $style1 = "this.style.backgroundColor='#9364D4';";
    // $style2 = "this.style.backgroundColor='#EF4059';";
    // $style3 = "this.style.backgroundColor='#5dd8d3';";
    // $style4 = "this.style.backgroundColor='#7E9AE0';";
    // $style5 = "this.style.backgroundColor='#ED539B';";
    // $style6 = "this.style.backgroundColor='#FD8257';";
    // $style7 = "this.style.backgroundColor='#666';";
    // $style8 = "this.style.backgroundColor='#CED42A';";
    // $style9 = "this.style.backgroundColor='#4700D4';";
    // $stylej1 = "background-color: #9364d4;";
    // $stylej2 = "background-color: #EF4059;";
    // $stylej3 = "background-color: #5dd8d3;";
    // $stylej4 = "background-color: #7E9AE0;";
    // $stylej5 = "background-color: #ED539B;";
    // $stylej6 = "background-color: #FD8257;";
    // $stylej7 = "background-color: #666;";
    // $stylej8 = "background-color: #CED42A;";
    // $stylej9 = "background-color: #4700D4;";
    ?>
    <div class="news_cart">
        <div class="news_cart_block">
            <a href="<?= $model->url; ?>">
                <div class="news_cart_img">
                     <img src="<?=$model->getThumbPath()?>" class="img-fluid" alt="">
                </div>
            </a>
            <div class="news_cart_caption">
                <a href="<?= $model->url; ?>"> 
                    <h4><?=$model->title?></h4>
                </a>
                <div class="news_cart_divider"></div>
                <span class="new_date"><?= $date ?></span>
            </div>
        </div>
    </div>


<?php if($index % 4 == 0): ?>
                            <div class="clearfix"></div>
                        <?php endif; ?>