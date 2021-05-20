<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
     $date = yii::$app->controller->renderDateToWord($model->date_created);
?>

<div class="container">
        <div class="row">


        <div class="row main_product_info">
            <div class="col-md-7 test_slider">



        <!-- Carusel -->


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-touch="true" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php 
                                    $documents = $model->documents;
                                    $counter=0;
                                    foreach($documents as $key => $document):
                                    $counter++; ?>
                                    <div class="carousel-item <?= ($counter==1)?'active':'' ?>" data-interval="true">
                                      
                                                    <?= html::img($document->getThumb(), ['class' => 'img_blog']); ?>
                                                
                                        
                                    </div>
                                    <?php
                                    endforeach;
                                    ?>

                                </div>
                            </div>

 

  <!-- end carusel -->

            </div>
            <div class="col-md-5">
                <h1>
                    <?= $model->title ?>                </h1>
                <p class="product_desc" style="margin-top: 5%;">
                    <?= $model->description ?>               </p>
                    
        
                    <?php if(!empty($model->price || $model->skidka)){
                        echo " <div class='product_price'>Bahasy : ".$model->price." manat <span class='skidka'>".$model->skidka."</span></div><br><br>";
                    } ?>
                <p class="product_desc"> <b>Kategoriya:</b> <?= $model->category->code ?></p>
<!-- <div class="view_select">
    <a class="like-Unlike" href=" -->
    <? 
    // echo Url::to(['site/like', 'id' => $product->id]) ?>
    <!-- " data-id=" -->
    <? 
    // echo $product->id;
    ?>
    <!-- "><i class="fa fa-heart-o"></i></a>
    
</div>
<div class="view_select"> -->
    <!-- <a href=" -->
    <? 
    // echo $document->getThumb();
    ?>
    <!-- " -->
    <!-- > -->
     <!-- <i class="fa fa-refresh"></i> </a> -->
    
<!-- </div> -->
<div class="clearfix"></div>




            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 style="font-size: 22px;" class="text-center"><?= Yii::t('app', 'Overview'); ?></h3>
                <div class="product_content_block">
                   

<?= $model->content ?>
                </div>
            </div>

        </div>

</div>
                        <h2 style="margin-top: 6%" class="slick_arrow_text"><?= yii::t('app', 'YOU MAY ALSO LIKE...') ?></h2>
                        <section class="index_tab">
        <?php
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'products'])->one();
$catId = $category->id;
$projects = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catId, 'status' => '1'])->orderBy('raiting')->limit(8)->all();

?>
    <div class="row">
        <div class="regular_tab slider">
            <?php foreach ($projects as $key => $product): ?>
          <div class="card" style="width: 18rem;">
            <a href="<?= '/item/'.$product->id; ?>"><?=html::img($product->getThumbPath(),['class' => 'card-img-top']) ?></a>
            <?php if(isset($product->skidka)){
                        echo " <span class='skidka'>".$product->skidka."</span>";
                    } ?>
            <div class="eye select_box d-flex justify-content-center align-items-center"><a href="<?= '/item/'.$product->id; ?>"><i class="fa fa-eye"></i></a></div>
         <!--    <div class="reload select_box d-flex justify-content-center align-items-center"><a href="/"><i class="fa fa-refresh"></i></a></div> -->
            <div class="like select_box d-flex justify-content-center align-items-center"><a class="like-Unlike" href="<?= Url::to(['site/like', 'id' => $product->id]) ?>" data-id="<?= $product->id?>"><i class="fa fa-heart-o"></i></a></div>
<!--             <div class="market select_box d-flex justify-content-center align-items-center"><a href="#"><i class="fa fa-cart-plus"></i></a></div> -->
            <div class="card-body">
              <h5 class="card-title text-center"><?= $product->title ?></h5>
            </div>
          </div>
<?php endforeach; ?>

        </div>
      </div>
            

        </section>

</div>
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
        nextArrow: "<div class=\'slick_next\'> "+next+"<span>" + " | "+" </span></div>",
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