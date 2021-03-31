<?php

use common\models\wrappers\CategoryWrapper;
use common\models\wrappers\ItemWrapper;
use dosamigos\gallery\Carousel;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\slider\Slider;

$this->title = Yii::t('app', 'Home');
//$serviceCategory = CategoryWrapper::find()->where(['code' => 'service'])->andWhere(['OR', 'parent_id is null', 'parent_id=0'])->one();
//$overviewCategory = CategoryWrapper::find()->where(['code' => 'overview'])->andWhere(['OR', 'parent_id is null', 'parent_id=0'])->one();
$categories = CategoryWrapper::find()->where(['status' => '1', 'top' => '1'])->all();
foreach ($categories as $category) {
    $categoryLink = [$category->code => $category->url];
}
?>

     <div id="mouse-scroll" class="ng-scope" style="display: block;">
    <div class="mouse"><div class="wheel"></div></div>
    <div style="padding-left: 6px"><span class="unu"></span> <span class="doi"></span> <span class="trei"></span> </div>
</div>

<div id="fullpage">

   <?php
    $slider1 = \common\models\wrappers\ImageWrapper::findOne(2);
    $imagePath = $slider1->getThumbPath();
    ?>
    <?php
        if  (isset($slider1)):
    ?>

    <div class="section section_first" style="background-color: <?= $slider1->color;?>">
        <div class="t_first p_absoulte">
            <img class="layer layer2" data-depth="-0.20" src="/source/img/png/t_angle.png" alt="">
        </div>
        <div class="t_two p_absoulte">
            <img class="layer layer2" data-depth="0.50" src="/source/img/png/triangle_shap_two.png" alt="">
        </div>
        <div class="t_four p_absoulte">
            <img class="layer layer2" data-depth="0.30" src="/source/img/png/triangle_shap_three.png" alt="">
        </div>
        <div class="t_five p_absoulte">
            <img class="layer layer2" data-depth="0.10" src="/source/img/png/triangle_shap_four.png" alt="">
        </div>
        <div class="s_round r_one p_absoulte"></div>
        <div class="s_round r_two p_absoulte"></div>
        <div class="s_round r_three p_absoulte"></div>
        <div class="intro">
            <div class="container custom_container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="w_content_two">
                            <h2><?=$slider1->title?></h2>
                            <p><?=$slider1->description?></p>
                            <?=html::a($slider1->btn_title,$slider1->btn_link,['class' => 'p_btn'])?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="w_img_one">
                            <div class="round p_absoulte"></div>
                           <?=html::img($imagePath)?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        endif;
    ?>

    <?php
    $slider2 = \common\models\wrappers\ImageWrapper::findOne(3);
    $imagePath = $slider2->getThumbPath();
    ?>

    <?php
        if  (isset($slider2)):
    ?>

    <div class="section section_first" style="background-color: <?= $slider2->color;?>">
        <div class="t_first p_absoulte">
            <img class="layer layer2" data-depth="-0.20" src="/source/img/png/t_angle.png" alt="">
        </div>
        <div class="t_two p_absoulte">
            <img class="layer layer2" data-depth="0.50" src="/source/img/png/triangle_shap_two.png" alt="">
        </div>
        <div class="t_four p_absoulte">
            <img class="layer layer2" data-depth="0.30" src="/source/img/png/triangle_shap_three.png" alt="">
        </div>
        <div class="t_five p_absoulte">
            <img class="layer layer2" data-depth="0.10" src="/source/img/png/triangle_shap_four.png" alt="">
        </div>
        <div class="s_round r_one p_absoulte"></div>
        <div class="s_round r_two p_absoulte"></div>
        <div class="s_round r_three p_absoulte"></div>
        <div class="intro">
            <div class="container custom_container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="w_content_two">
                            <h2><?=$slider2->title?></h2>
                            <p><?=$slider2->description?></p>
                            <?=html::a($slider2->btn_title,$slider2->btn_link,['class' => 'p_btn'])?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="w_img_one">
                            <div class="round p_absoulte"></div>
                           <?=html::img($imagePath)?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        endif;
    ?>

    <?php
    $slider3 = \common\models\wrappers\ImageWrapper::findOne(4);
    $slider3_docs = $slider3->documents;
    if (isset($slider3_docs) && count($slider3_docs) > 0){
        foreach ($slider3_docs as $doc){
            $image[] = $doc->getThumb();
        }
    }
    ?>
    <?php
        if (isset($slider3)):
    ?>
    <div class="section section_third" style="background-color: <?= $slider3->color;?>">
        <div class="t_first p_absoulte">
            <img class="layer layer2" data-depth="-0.20" src="/source/img/png/t_angle.png" alt="">
        </div>
        <div class="t_two p_absoulte">
            <img class="layer layer2" data-depth="0.50" src="/source/img/png/triangle_shap_two.png" alt="">
        </div>
        <div class="t_four p_absoulte">
            <img class="layer layer2" data-depth="0.30" src="/source/img/png/triangle_shap_three.png" alt="">
        </div>
        <div class="t_five p_absoulte">
            <img class="layer layer2" data-depth="0.10" src="/source/img/png/triangle_shap_four.png" alt="">
        </div>

        <div class="intro">
            <div class="container custom_container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="w_content_two">
                            <h2><?=$slider3->title?></h2>
                            <p><?=$slider3->description?></p>
                            <?=html::a($slider3->btn_title,$slider3->btn_link,['class' => 'p_btn'])?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="w_phone_img">
                            <img class="p_absoulte dot" src="/source/img/png/dot2.png" alt="">
                            <?php
                            if (isset($image[0]) && strlen($image[0])>0){
                                echo html::img($image[0],['class' => 'p_one']);
                            }

                            if (isset($image[1]) && strlen($image[1])>0){
                                echo html::img($image[1],['class' => 'p_two p_absoulte']);
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        endif;
    ?>


    <?php
    unset($image);
    $slider4 = \common\models\wrappers\ImageWrapper::findOne(5);
    $slider4_docs = $slider4->documents;
    if (isset($slider4_docs) && count($slider4_docs) > 0){
        foreach ($slider4_docs as $doc){
            $image[] = $doc->getThumb();
        }
    }
    ?>
    <?php
        if (isset($slider4)):
    ?>

    <div class="section section_fourth" style="background-color: <?= $slider4->color;?>">
        <div class="t_first p_absoulte">
            <img class="layer layer2" data-depth="-0.20" src="/source/img/png/t_angle.png" alt="">
        </div>
        <div class="t_two p_absoulte">
            <img class="layer layer2" data-depth="0.50" src="/source/img/png/triangle_shap_two.png" alt="">
        </div>
        <div class="t_four p_absoulte">
            <img class="layer layer2" data-depth="0.30" src="/source/img/png/triangle_shap_three.png" alt="">
        </div>
        <div class="t_five p_absoulte">
            <img class="layer layer2" data-depth="0.10" src="/source/img/png/triangle_shap_five.png" alt="">
        </div>
        <div class="intro">
            <div class="container custom_container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="w_content_two">
                            <h2><?=$slider4->title?></h2>
                            <p><?=$slider4->description?></p>
                            <?=html::a($slider4->btn_title,$slider4->btn_link,['class' => 'p_btn'])?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="w_mockup_img">
                            <?php
                            if (isset($image[0]) && strlen($image[0])>0){
                                echo html::img($image[0],['class' => 'img_screen one']);
                            }

                            if (isset($image[1]) && strlen($image[1])>0){
                                echo html::img($image[1],['class' => 'img_screen two']);
                            }

                            if (isset($image[2]) && strlen($image[2])>0){
                                echo html::img($image[2],['class' => 'img_screen three']);
                            }

                            if (isset($image[3]) && strlen($image[3])>0){
                                echo html::img($image[3],['class' => 'img_four']);
                            }

                            ?>

<!--                            <div class="img_screen one"><img src="/source/img/png/screen_three.jpg" alt=""></div>-->
<!--                            <div class="img_screen two"><img src="/source/img/png/screen_two.jpg" alt=""></div>-->
<!--                            <div class="img_screen three"><img src="/source/img/png/screen_one.jpg" alt=""></div>-->
<!--                            <img class="img_four" src="/source/img/png/code.jpg" alt="">-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        endif;
        ?>


    </div>

    <?php
    $slider5 = \common\models\wrappers\ImageWrapper::findOne(6);
    // $slider5_docs = $slider3->documents;
    // if (isset($slider3_docs) && count($slider3_docs) > 0){
    //     foreach ($slider3_docs as $doc){
    //         $image[] = $doc->getThumb();
    //     }
    // }
    ?>
  <div class="section section_fifth" style="background-color: <?= $slider5->color;?>">
        <div class="t_first p_absoulte">
            <img class="layer layer2" data-depth="-0.20" src="/source/img/png/t_angle.png" alt="">
        </div>
        <div class="t_two p_absoulte">
            <img class="layer layer2" data-depth="0.50" src="/source/img/png/triangle_shap_two.png" alt="">
        </div>
        <div class="t_four p_absoulte">
            <img class="layer layer2" data-depth="0.30" src="/source/img/png/triangle_shap_three.png" alt="">
        </div>
        <div class="t_five p_absoulte">
            <img class="layer layer2" data-depth="0.10" src="/source/img/png/triangle_shap_five.png" alt="">
        </div>
        <div class="intro">
            <h2 style="text-align: center;margin-top: 10%; color: #fff"><?=$slider5->title?></h2>
                            <div class="container-fluid">
                        <section class="center slider">
        <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'partners'])->one();
$catId = $category->id;
$projects = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('Rand()')->limit(8)->all();

?>
                 <?php
                    foreach ($projects as $project):
                ?>
    <div>
        <?php if (isset($project->link_to_partner)) : ?>
            <a href="<?= $project->link_to_partner ?>">
      <?=html::img($project->getThumbPath(),['class' => 'my_img', 'style' => 'height : 200px'])?>
      </a>
      <?php else: ?>

           <a href="<?= $project->getThumbPath(); ?>">
      <?=html::img($project->getThumbPath(),['class' => 'my_img', 'style' => 'height : 200px'])?>
      </a>
        <?php endif;  ?>
        
    </div>
                    <?php
                    endforeach;
                ?>
            


  </section>
  <p class="text-center my-4" style="padding-bottom: 100px">
                <?=html::a(yii::t('app', 'See All'),$category->url, ['class' => 'see_all_btn', 'style' => 'color: #fff'])?>
</p>
        </div>
        </div>


    </div>

</div>





