<?php
use common\models\wrappers\CategoryWrapper;
use common\models\wrappers\ItemWrapper;
use dosamigos\gallery\Carousel;
use common\widgets\SubscriptionWidget\SubscriptionWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\slider\Slider;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;


$this->title = Yii::t('app', 'Home');
// $serviceCategory = CategoryWrapper::find()->where(['code' => 'service'])->andWhere(['OR', 'parent_id is null', 'parent_id=0'])->one();
// $overviewCategory = CategoryWrapper::find()->where(['code' => 'overview'])->andWhere(['OR', 'parent_id is null', 'parent_id=0'])->one();
// $categories = CategoryWrapper::find()->where(['status' => '1', 'top' => '1'])->all();
// foreach ($categories as $category) {
//     $categoryLink = [$category->code => $category->url];
// }
?>


  <!-- Carusel -->

  <section class="container-fluid corusel_top p-0">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
    $sliders = \common\models\wrappers\ImageWrapper::find()->all();
    ?>
    <?php foreach ($sliders as $key => $slider): ?>
    <?php 
        $imagePath = $slider->getThumbPath();
 ?>

        <div class="carousel-item <?= ($key==1)?'active':'' ?>" data-bs-interval="5000">
         
          <?=html::img($imagePath,['class'=>'corusel_top_img','alt'=>'...'])?>
          <div class="carousel-caption d-none d-md-block">
            <div class="slider_text_block">
              <div class="layer-3-3">
                <h1 class="a-1"><?=$slider->title?></h1>
              </div>
              <div class="layer-1-3" style="margin-bottom: 100px;">
                <p class="a-2"><?=$slider->description?></p>
              </div>
              <div class="layer-1-4">
                <?php if ($slider->btn_link != ''): ?>
                <p class="slider_btn_block a-6"><?=html::a($slider->btn_title,$slider->btn_link,['class' => 'btn btn_in_slider'])?></p>
              <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; ?>
    </div>
      </div>
    </div>
  </section>
  <!-- end carusel -->

  <!-- Start advantages -->
   <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'advantage'])->one();
$catId = $category->id;
$advantages = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('id')->all();

?>
  <section class="about_us">
    <div class="container">
      <div class="row">
        <?php foreach ($advantages as $key => $advantage): ?>
        <div class="col-md-4">
          <h3> <?=html::img($advantage->getThumbPath(),['class' => '']) ?> <span><?=$advantage->title?></span> </h3>
          <br>
          <p><?= $advantage->content ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
  <section class="index_tab">
    <div class="container">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><?= yii::t('app', 'New  ') ?></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link second_tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><?= yii::t('app', 'Popular') ?></button>
  </li>

</ul>
   <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'products'])->one();
$catId = $category->id;
$new_products = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catId, 'status' => '1'])->orderBy('id desc')->all();
$hit_products = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catId, 'status' => '1'])->orderBy('raiting desc')->all();

?>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="regular_tab slider">
            <?php foreach ($new_products as $key => $product): ?>
          <div class="card" style="width: 18rem;">
            <?=html::img($product->getThumbPath(),['class' => 'card-img-top']) ?>
            <div class="eye select_box d-flex justify-content-center align-items-center"><a href="<?= '/item/'.$product->id; ?>"><i class="fa fa-eye"></i></a></div>
            <div class="reload select_box d-flex justify-content-center align-items-center"><a href="/"><i class="fa fa-refresh"></i></a></div>
            <div class="like select_box d-flex justify-content-center align-items-center"><a class="like-Unlike" href="<?= Url::to(['site/like', 'id' => $product->id]) ?>" data-id="<?= $product->id?>"><i class="fa fa-heart-o"></i></a></div>
<!--             <div class="market select_box d-flex justify-content-center align-items-center"><a href="#"><i class="fa fa-cart-plus"></i></a></div> -->
            <div class="card-body">
              <h5 class="card-title"><?= $product->title ?></h5>
            </div>
          </div>
<?php endforeach; ?>

        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <a href="<?= $category->url?>"><button type="button" class="btn btn-light" style="border:1px solid black"><?= yii::t('app', 'See All') ?></button></a>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">      <div class="row">
        <div class="regular_tab slider">
            <?php foreach ($hit_products as $key => $product): ?>
          <div class="card" style="width: 18rem;">
            <?=html::img($product->getThumbPath(),['class' => 'card-img-top']) ?>
            <div class="eye select_box d-flex justify-content-center align-items-center"><a href="<?= '/item/'.$product->id; ?>"><i class="fa fa-eye"></i></a></div>
            <div class="reload select_box d-flex justify-content-center align-items-center"><a href="/"><i class="fa fa-refresh"></i></a></div>
            <?php 
$liked = $product->liked;
             ?>
            <div class="like select_box d-flex justify-content-center align-items-center"><a class="like-Unlike" href="<?= Url::to(['site/like', 'id' => $product->id]) ?>" data-id="<?= $product->id?>"><i class="fa fa-heart-o"></i></a></div>


 <!--            <div class="market select_box d-flex justify-content-center align-items-center"><a href="#"><i class="fa fa-cart-plus"></i></a></div> -->
            <div class="card-body">
              <h5 class="card-title"><?= $product->title ?></h5>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <a href="<?=$category->url?>"><button type="button" class="btn btn-light" style="border:1px solid black"><?= yii::t('app', 'See All') ?></button></a>
        </div>
      </div>
    </div>
</div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3>ХО «Agzybir ogullar»</h3>
          <p>Наша компания работает на рынке по производству различных пластиковых изделий бытового, хозяйственного,
            пищевого и
            технического назначения которые вырабатываются из гранул полипропилена и полиэтилена.</p>
        </div>

      </div>
    </div>
  </section>
  <section class="blog">
    <div class="container">
         <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'blog'])->one();
$catId = $category->id;
$blogs = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('id desc')->all();
?>
      <h2>Блог</h2>
      <div class="row">
        <div class="regular slider">


           <?php foreach ($blogs as $key => $blog): ?>
            <?php  $date = yii::$app->controller->renderDateToWord($blog->date_created);
?>

          <div class="card" style="width: 18rem;">
            <?=html::img($blog->getThumbPath(),['class' => 'card-img-top','alt'=>'$blog->title']) ?>
            <div class="card-body">
              <span><?= $date ?></span>
              <a href="<?= $blog->url; ?>" style="text-decoration: none; color: #000;"> 
              <h5 class="card-title"><?= $blog->title; ?></h5>
            </a>
              <p class="card-text"><?= $blog->description; ?></p>
            </div>
          </div>
           <?php endforeach; ?>

        </div>

        <div class="col-12 d-flex justify-content-center">
          <a href="<?=$category->url?>"><button type="button" class="btn btn-light" style="border:1px solid black"><?= yii::t('app', 'See All') ?></button></a>
        </div>
      </div>
    </div>

  </section>
  <section class="write">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h3>Подпишитесь на нас</h3>
        </div>
        <div class="col-sm-7 d-flex justify-content-end">

    <?php $form = ActiveForm::begin([
            'action' => yii\helpers\Url::to(['site/subscribe']),
        ]); ?>
        <div class="row write_form_in">
          <div class="col-8">
            <?=$form->field($model, 'email')->textInput(['placeholder'=>'Email  адрес', 'class' =>'form-control'])->label(false);?>
          </div>
          <div class="col-4">
            <?=Html::submitButton('Подписаться',  ['class' => 'btn btn-primary mb-2']); ?>
          </div>
        </div>
    
    
    <?php ActiveForm::end(); ?>

    <div style="clear:both;"></div>

       
        </div>

      </div>
    </div>
  </section>
  <section class="partners">
            <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'partners'])->one();
$catId = $category->id;
$partners = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('Rand()')->limit(8)->all();
$categoryLink = [$category->code => $category->url];
?>

    <div class="center slider">
 <?php foreach ($partners as $key => $partner): ?>

        <?=html::img($partner->getThumbPath(),['class' => 'my_img', 'style' => 'height : 200px'])?>
      <?php endforeach; ?>

    </div>
      <p class="text-center my-4">
                <?=html::a(yii::t('app', 'See All'),$category->url, ['class' => 'see_all_btn'])?>
</p>
  </section>

  <?php
  $this->registerJS('
    
    var next = "'.yii::t('app','next').'"
    var prev = "'.yii::t('app','prev').'"

    $(".regular_tab").slick({
        dots: false,
        infinite: true,
        fade: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: "<div class=\'slick_prev\'> "+prev+"</div>",
        nextArrow: "<div class=\'slick_next\'> "+next+"   | </div>",
          responsive: [
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
      });

  ',\yii\web\View::POS_END);





