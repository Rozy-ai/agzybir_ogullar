<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$catCode = '';
if (isset($modelCategory)) {
    $catCode = $modelCategory->code;
    $this->title = $title = $modelCategory->name;
    $this->params['breadcrumbs'] = $modelCategory->getBreadcrumbs();
};
$category = $modelCategory;
if ($category->parent_id){
    while ($category->parent_id){
        $category = \common\models\wrappers\CategoryWrapper::findOne($category->parent_id);
        $catCode = $category->code;
    }
} else{
    $catCode = $category->code;
}
if (!isset($view)){
    if ($catCode == 'services'){
        $view = 'services_list';
        $style = 'background: linear-gradient(90deg, rgba(33,147,176,1) 0%, rgba(109,213,237,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
    } elseif ($catCode == 'blog'){
        $view = 'blog-list';
        $style = 'background: linear-gradient(90deg, rgba(204,43,94,1) 0%, rgba(117,58,136,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
    } elseif ($catCode == 'our_works'){
        $view = 'portfolio-list';
        $style = 'background: linear-gradient(90deg, rgba(234,205,163,1) 0%, rgba(214,174,123,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
    } elseif ($catCode == 'partners'){
        $view = 'partners-list';
        $style = 'background: linear-gradient(90deg, rgba(204,43,94,1) 0%, rgba(117,58,136,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
    }
}
// if ($category->getThumbPath()){
//     $cateogryImage = $category->getThumbPath();
// //     background: rgb(204,43,94);
// // background: linear-gradient(90deg, rgba(204,43,94,1) 0%, rgba(117,58,136,1) 100%);
    
// }
?>

    <section class="breadcrumb_area_two parallaxie">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row">
            <div class="breadcrumb_content col-12 col-md-4">
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
   echo $this->render($view,[
            'dataProvider' => $dataProvider,
            'modelCategory' => $modelCategory,
    ])

?>