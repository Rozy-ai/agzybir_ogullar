<?php 
use yii\helpers\Html;
 ?>
 <section class="about_us_view">
 	<div class="container">
 		<div class="row">
 						<?php 
			$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'about'])->one();
?>

 			<div class="col-md-6">
 				 <h3 style="margin-bottom: 30px">ХО «Agzybir ogullar»</h3>
                 <p><i>"<?=$category->description?>"</i></p>
                        <p style=" color: #828699; margin-bottom: 30px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat sed quisquam suscipit totam inventore eligendi amet iste maxime, eius laudantium eveniet facilis, iusto voluptate. Nulla, nisi dolorem dicta aspernatur!
    Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Dignissimos atque pariatur voluptate, asperiores provident odio obcaecati corporis quidem temporibus impedit iste! Animi, possimus quos accusantium. Magni praesentium incidunt suscipit accusantium?
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti nulla cumque rem a atque tempora, eveniet architecto harum, neque mollitia vel temporibus ducimus ad, ea dolorum inventore accusamus possimus dolore.</p>
                        <div class="btn_black_div">
                            <a href="/item/magazin" class="about_us_view_button" role="button"><?= Yii::t('app', 'Products') ?> </a>
                        </div>
                        
 			</div>
 			<div class="col-md-6">
 				<?=html::img($category->getThumbPath(),['class' => 'about_view_img']) ?>
 			</div>
 		</div>
 	</div>
 </section>
<section class="about_view">
	<div class="container">
		<div class="row">
			<?php 
			$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'advantage'])->one();
$catId = $category->id;
$advantages = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('id')->all(); 
?>

			<div class="col-lg-6">
 <?php foreach ($advantages as $key => $advantage): ?>
                <div class="row" style="margin-bottom: 30px;">
                	<div class="box-body-img col-4 d-flex align-self-center">
                        <?=html::img($advantage->getThumbPath(),['class' => '']) ?>
                    </div>
                    <div class="col-8">
                        <h3 class=""><?=$advantage->title?></h3>
                        <p></p><p><?= $advantage->content ?></p>
<p></p>
                    </div>

                </div>

			<?php endforeach; ?>
			</div>

			<div class="col-lg-6">
				<?=html::img($category->getThumbPath(),['class' => 'about_view_img']) ?>
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

        <?=html::img($partner->getThumbPath(),['class' => 'my_img', 'style' => 'height : 150px'])?>
      <?php endforeach; ?>

    </div>
    <!--   <p class="text-center my-4"> -->
                <?php 
                // echo html::a(yii::t('app', 'Show all'),$category->url, ['class' => 'see_all_btn'])
                ?>
             <!--    <a href=" -->
                <?php  
                // echo $category->url
                ?>
              <!--   "><button type="button" class="btn btn-light" style="border:2px solid black"> --><?php 
                // echo yii::t('app', 'Show all') 
                ?>
                  
<!--                 </button></a>
</p> -->
  </section>
