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

<div class="row">
    <div class="col-12">
                     <div class="blog-one__single">
                        <div class="blog-one__single-inner-block">
                            <a href="<?= $model->url; ?>">
                        <div class="scale">
                          <img src="<?=$model->getThumbPath()?>" class="scale" alt="">
                        </div>
                        </a>        
                        <div>
                            <?= $date ?>
                        </div>               
                            <h1 class="blog-one__title"><?=$model->title?></h1>

                    <div style="position: absolute;bottom: 2%; left: 10%">
                        <?=html::a(yii::t('app', 'Doly maglumat').'  <i class="fa fa-long-arrow-right"></i>',$model->url, ['class' => 'blog-one__link button-underline'])?>
                    </div>
                        </div>
                    </div>
                </div>


</div>
<?php if($index % 4 == 0): ?>
                            <div class="clearfix"></div>
                        <?php endif; ?>