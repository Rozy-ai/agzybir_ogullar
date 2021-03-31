<?php
    use yii\helpers\Html;
    $items = \common\models\wrappers\ItemWrapper::find()->where(['category_id' =>$modelCategory->id, 'status' => '1'])->all();
    $style1 = "this.style.backgroundColor='#9364D4';";
    $style2 = "this.style.backgroundColor='#EF4059';";
    $style3 = "this.style.backgroundColor='#5dd8d3';";
    $style4 = "this.style.backgroundColor='#7E9AE0';";
    $style5 = "this.style.backgroundColor='#ED539B';";
    $style6 = "this.style.backgroundColor='#FD8257';";
    $style7 = "this.style.backgroundColor='#666';";
    $style8 = "this.style.backgroundColor='#CED42A';";
    $style9 = "this.style.backgroundColor='#4700D4';";
?>
<section>
    <div class="list_services">
        <div class="container-fluid" style="padding-left: 7%; padding-right: 7%">
<!--         <br><br><br>
            <h3 class="text-center animated bounce">Biziň müşderilerimiz biz bilen işlemegi söýýärler!</h3> -->
        <div class="row service_item" style="margin-top: 3%;" >
            <?php
            $i = 0;
                foreach ($items as $key => $item):
            ?>
            <?php $i++ ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?=$item->url?>">
                    <div class="blog-one__single">
                        <div class="blog-one__single-inner-block" onmouseover="<? 
                         if ($i == 1) {
                            echo $style1;
                         } else if($i == 2) {
                            echo $style2;
                         } else if($i == 3) {
                            echo $style3;
                         } else if($i == 4) {
                            echo $style4;
                         }else if($i == 5) {
                            echo $style5;
                         } else if($i == 6) {
                            echo $style6;
                         }else if($i == 7) {
                            echo $style7;
                         } else if($i == 8) {
                            echo $style8;
                         } else {
                            echo $style9;
                         } 
                          ?>" onmouseout="this.style.backgroundColor='#fff';" style="height: 520px">
                            <?=html::img($item->getThumbPath())?>
                            <h1 class="blog-one__title"><?=$item->title?></h1>
                            <p class="blog-one__text" style="margin-bottom: 10px">
                                <?=$item->description?>
                            </p>
                    <div style="position: absolute;bottom: 2%; left: 10%">
                        <?=html::a(yii::t('app', 'Doly maglumat').'  <i class="fa fa-long-arrow-right"></i>',$item->url, ['class' => 'blog-one__link'])?>
                    </div>
                        </div>
                    </div>
                    </a>
                </div>
            <?php
                endforeach;
            ?>
<!--             <form style="margin: 100px auto" action="#" class="site-footer__subscribe-form">
                <input type="text" name="email" placeholder="Email salgynyzy yazyn">
                <button type="submit">Ugrat</button>
            </form> -->
            </div>
        </div>
    </div>
</section>
<?php
// $this->registerJsFile('/source/js/wow.js', ['position' => \yii\web\View::POS_END]);

