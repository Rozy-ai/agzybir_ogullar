<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\wrappers\ItemWrapper */

$this->title = $model->title;
$category = $model->category;
$imageBreadCrumb = $category;
if ($category->parent_id){
    while ($category->parent_id){
        $category = \common\models\wrappers\CategoryWrapper::findOne($category->parent_id);
        $catCode = $category->code;
    }
} else{
    $catCode = $category->code;
}
if (isset($categoryModel)) {
    $this->params['breadcrumbs'] = $categoryModel->getBreadcrumbs(true);
}
$this->params['breadcrumbs'][] = Yii::$app->controller->truncate($model->title, 8, 65);


$href = $model->url;
$author = (isset($model->author) && strlen(trim($model->author)) > 0) ? $model->author : $model->create_username;
$date = $model->renderDateToWord($model->date_created);
if ($catCode == 'services'){
    $view = 'services_view';
     $style = 'background: linear-gradient(90deg, rgba(67,206,162,1) 0%, rgba(24,90,157,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
} elseif ($catCode == 'blog'){
    $view = 'blog_view';
        $style = 'background: linear-gradient(90deg, rgba(69,104,220,1) 0%, rgba(176,106,179,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;'; 
} elseif ($catCode == 'our_works'){
    $view = 'portfolio_view';
            $style = 'background: linear-gradient(90deg, rgba(170,7,107,1) 0%, rgba(97,4,95,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;'; 
}


if ($imageBreadCrumb->getThumbPath()){
    // $style = 'background: url('.$imageBreadCrumb->getThumbPath().') center center no-repeat; height: 500px;margin-top:-50px ;background-size: cover;
    //     background-attachment: fixed;';
}
?>

<!-- product-details-area are start-->


<section class="breadcrumb_area_two parallaxie">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row">
            <div class="breadcrumb_content col-12 col-lg-4">
                <?php if(isset($this->title) && !isset($this->params['no-title'])) { echo'<h1>'.$this->title.'</h1>'; } ?>
                <?php
                echo Breadcrumbs::widget([
                    'homeLink' => [
                        'label' => Yii::t('app', 'Home'),
                        'url' => Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => [
                            'class' => 'nav'
                    ]
                ]);
                ?>
            </div>
            <div class="breadcrumb_content offset-md-2 col-md-6">
                <p><?=$modelCategory->description;?></p>
            </div>
            </div>
        </div>
    </section>

<?php
    echo $this->render($view, [
            'model' => $model,
            'contact' => $contact,
            'ownInfo' => $ownInfo,
    ])
?>