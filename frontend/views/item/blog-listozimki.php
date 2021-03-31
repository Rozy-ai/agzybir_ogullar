<?php
    use yii\helpers\Html;
    // use yii\widgets\LinkPager;
   $category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'blog'])->one();
$catId = $category->id;
$projects = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catId, 'status' => '1'])->limit(8)->all();
    $style1 = "this.style.backgroundColor='#9364D4';";
    $style2 = "this.style.backgroundColor='#EF4059';";
    $style3 = "this.style.backgroundColor='#5dd8d3';";
    $style4 = "this.style.backgroundColor='#7E9AE0';";
    $style5 = "this.style.backgroundColor='#ED539B';";
    $style6 = "this.style.backgroundColor='#FD8257';";
    $style7 = "this.style.backgroundColor='#666';";
    $style8 = "this.style.backgroundColor='#CED42A';";
    $style9 = "this.style.backgroundColor='#4700D4';";
    $stylej1 = "background-color: #9364d4;";
    $stylej2 = "background-color: #EF4059;";
    $stylej3 = "background-color: #5dd8d3;";
    $stylej4 = "background-color: #7E9AE0;";
    $stylej5 = "background-color: #ED539B;";
    $stylej6 = "background-color: #FD8257;";
    $stylej7 = "background-color: #666;";
    $stylej8 = "background-color: #CED42A;";
    $stylej9 = "background-color: #4700D4;";
?>
<section>
    <div class="list_services">
        <div class="container-fluid" style="padding-left: 7%; padding-right: 7%">
<!--         <br><br><br>
            <h3 class="text-center animated bounce">Biziň müşderilerimiz biz bilen işlemegi söýýärler!</h3> -->
        <div class="row service_item" style="margin-top: 3%;" >
            <?php
            $i = 0;
                foreach ($projects as $key => $item):
            ?>
        

                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?=$item->url?>">
                    <div class="blog-one__single">
                        <div class="blog-one__single-inner-block" onmouseover="<?php
                        $number = $key+1; 
                        $style = 'style'.$number; 
                        echo $$style;
                        // $style = 'style'.$key+1; 
                        // echo $style;
                         // if ($i == 1) {
                         //    echo $style1;
                         // } else if($i == 2) {
                         //    echo $style2;
                         // } else if($i == 3) {
                         //    echo $style3;
                         // } else if($i == 4) {
                         //    echo $style4;
                         // }else if($i == 5) {
                         //    echo $style5;
                         // } else if($i == 6) {
                         //    echo $style6;
                         // }else if($i == 7) {
                         //    echo $style7;
                         // } else if($i == 8) {
                         //    echo $style8;
                         // } else {
                         //    echo $style9;
                         // } 
                          ?>" onmouseout="this.style.backgroundColor='#fff';" style="height: 520px;">
                          <?php
                            $date = yii::$app->controller->renderDateToWord($item->date_created);
                           
                            ?>
                        <div class="blog-one__date" style="<?php 

                        $stylej = 'stylej'.$number; 
                        echo $$stylej; 
//                         $stylej = 'stylej'.$number; 
//                         echo $$stylej;
//                         if ($i == 1) {
//                             echo $stylej1;
//                          } else if($i == 2) {
//                             echo $stylej2;
//                          } else if($i == 3) {
//                             echo $stylej3;
//                          } else if($i == 4) {
//                             echo $stylej4;
//                          }else if($i == 5) {
//                             echo $stylej5;
//                          } else if($i == 6) {
//                             echo $stylej6;
//                          }else if($i == 7) {
//                             echo $stylej7;
//                          } else if($i == 8) {
//                             echo $stylej8;
//                          } else {
//                             echo $stylej9;
//                          }
                          ?>"><?=$date?></div>


                            <?=html::img($item->getThumbPath(),['style' => 'height : 50%; width : 100%'])?>
                            <h1 class="blog-one__title"><?=$item->title?></h1>
                            <p class="blog-one__text" style="margin-bottom: 10px">
                                <?php
                  $length = strlen($item->description);
                  if($length > 140){
                    $text = mb_substr($item->description, 0, 140);
                    $firsPos = strripos($text, ' ');
                    $text = mb_substr($text, 0, $firsPos); 
                    echo ($text.'...');
                    } else{
                        echo ($item->description);
                    } 
                   ?>
                            </p>
                    <div style="position: absolute;bottom: 2%; right: 10%">
                        <?=html::a(yii::t('app', 'Doly maglumat').'  <i class="fa fa-long-arrow-right"></i>',$item->url, ['class' => 'blog-one__link'])?>
                    </div>
                        </div>
                    </div>
                </a>
                </div>
            <?php
                endforeach;
            ?>
<!-- -->
                    <?php
                    // echo LinkPager::widget([
                    //     'pagination' => $pages,
                    // ]);
                    ?>
<!--                 </div>
            </div> -->
          
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

