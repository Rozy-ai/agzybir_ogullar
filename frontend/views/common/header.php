<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;
use yii\bootstrap\ActiveForm;

$ownerDetails = \common\models\OwnerContact::find()->one();

$language = yii::$app->language;
switch ($language){
    case 'en': $logo = 'logo-en.png'; break;
    case 'ru': $logo = 'logo-ru.png'; break;
    default: $logo = 'logo-tm.png'; break;
}



// $category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'services'])->one();
// $categorysecond = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'our_works'])->one();
// $catId = $category->id;
// $catIdsecond = $categorysecond->id;
// $services = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('Rand()')->limit(8)->all();
// $works = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catIdsecond, 'status' => '1'])->orderBy('Rand()')->all();
?>
  <header>
    <div class="container">
      <div class="row header_top">
        <div class="col-sm-0 col-md-8">
          <p class="header_info"> <i class="fa fa-phone"></i> (+99312) 958662 </p>
          <p class="header_info"> <i class="fa fa-envelope"> </i> test@gmail.com</p>
          <p class="header_info"> <i class="fa fa-clock-o"></i> Du-Sb/ 9:00-8:00  </p>
        </div>
        <div class="lang_img col-sm-12 col-md-4 d-flex justify-content-end language_box">
                              
                        <?php
                        echo \common\widgets\language\LanguageSwitcherDropdownWidget::widget([
                           // 'showFlags' => true
                        ]);0
                        
                        ?>
                 
        </div>
      </div>
    </div>

  </header>
  <div class="container bottom_header">
    <div class="row">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="col-5 logo">
            <a class="navbar-brand" href="/"><img src="/source/img/europlastic-logo.jpg" alt="Logo"></a>
          </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                echo Menu::widget([
                    'items' => $menuItems,
                    'options' => [
                        'class' => 'col-12 navbar-nav d-flex justify-content-around',
                    ],
                    'linkTemplate' => "<a href=\"{url}\" class='nav-link ' role=\"button\"  aria-expanded=\"false\">{label}</a>",
                    'submenuTemplate' => "\n<ul class='dropdown-menu' aria-labelledby=\"navbarDropdown\"><li><a class='dropdown-item' href=\"{url}\">\n{items}\n</a></li></ul>\n",
                    'itemOptions' => ['class' => 'nav-item dropdown'],
                ]);
                ?>
            </div>
          <div class="col-1 icon d-flex justify-content-end">
            <!-- BEGIN TOP SEARCH -->
            
            <!-- END TOP SEARCH -->
                                <?php $form = ActiveForm::begin(['action'=>['site/search'],'method'=>'get']); ?>
                    <div class="input-group">             
  <button type="button" id="show" class="call_btn">
      <span class="fa fa-search"></span>
    </button>

    <button type="button" id="hide" class="call_btn">
      <span class="fa fa-search"></span>
    </button>

  

      <input type="text" placeholder="<?=Yii::t('app','Search')?>" class="search"  name="query">
   <!--    <input type="submit" class="search_submit"> -->
      <button type="submit" class="search_submit"><?= Yii::t('app','Send') ?></button>
      </div>

      <?php ActiveForm::end(); ?>
    <!--         <a href=""><i class="fa fa-user"></i></a>
            <a href=""><i class="fa fa-shopping-cart"></i></a> -->
          </div>        
        </div>
    </nav>
        </div>
  </div>



