<?php
use common\models\wrappers\ItemWrapper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$ownerDetails = \common\models\OwnerContact::find()->one();
$serviceItems = ItemWrapper::find()->joinWith('category cat')->where(['cat.code' => 'service', 'tbl_item.status' => 1])->limit(5)->all();

?>

<!-- <footer class="full_footer position-absolute f_footer_one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-6">
                <ul class="list-unstyled social_icon">
                    <li><a href="#"><i class="social_twitter"></i></a></li>
                    <li><a href="#"><i class="social_facebook"></i></a></li>
                    <li><a href="#"><i class="social_googleplus"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-6">
                <div class="pr_details_nav h_slider_nav align-items-end">
                    <span class="prev" id="moveUp">Prev</span>
                    <span class="next moveUp" id="moveDown">Next</span>
                </div>
            </div>
        </div>
    </div>
</footer> -->



