<?php
    use yii\helpers\Html;
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
                <p class="product_desc">
                    <?= $model->description ?>               </p>
                    <?php if(!empty($model->skidka)){
                        echo " <div class='product_skidka'>Arzanladyş : ".$model->skidka."</div><br><br>";
                    } ?>
        
                    <?php if(!empty($model->price)){
                        echo " <div class='product_price'>Bahasy : ".$model->price." manat </div><br><br>";
                    } ?>
                


            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 style="font-size: 22px;">Doly maglumat</h3>
                <div class="product_content_block">
                    <p>&nbsp;</p>

<?= $model->content ?>
                </div>
            </div>

        </div>

</div>
</div>