<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use common\models\wrappers\ItemWrapper;
	use common\widgets\items\listview\ListWidget;

$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'our_works'])->one();
$catId = $category->id;
$projects = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catId, 'status' => '1'])->orderBy('Rand()')->limit(8)->all();

?>
	<section class="portfolio">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-2 col-12">
								<div class="filters gallery-filters">
									<p><a href="#" data-filter="*" class="active">Hemmesi</a></p>
									<p><a href="#" data-filter=".sites">Apps</a></p>
									<p><a href="#" data-filter=".apps">Sites</a></p>
								</div>
							</div>						
<div class="col-md-10 col-12">
								<div class="row isotope-wrapper masonry-layout c-mb-15 c-gutter-15 gallery-direction"
									id="gallery-direction" data-filters=".gallery-filters">


  <?php
  $i = 0;
                    foreach ($projects as $project):
                    	$i++;
                ?>
									<div class="col-xl-4 col-sm-6 gallery-hover <?= $project->category->code ?>">
										<a class="gallery-link gl_<?=$i?>" href="<?= '/item/'.$project->id ?>">

											 <?=html::img($project->getThumbPath(),['class' => 'item_img', 'style' => 'height : 300px; width : 100%'])?>
											 <div class="item_text">
											 	
											
											<div class="item_content ic_<?=$i?>">
												<h4>
													<?= $project->title ?>
												</h4>
												<p><?= $project->description ?></p>
											</div>
											
										</div>
										</a>
									</div>
<?php
                    endforeach;
                ?>
								</div>
								<!-- .isotope-wrapper-->
							</div>
						</div>
					</div>
					<div class="divider-5"></div>
				</section>


<?php    

$this->registerCssFile('/source/css/main.css', ['position' => \yii\web\View::POS_HEAD]);

$this->registerJsFile('/source/js/compressed.js', ['depends' => 'frontend\assets\AppAsset','position' => \yii\web\View::POS_END]);
$this->registerJsFile('/source/js/main.js', ['depends' => 'frontend\assets\AppAsset','position' => \yii\web\View::POS_END]);
