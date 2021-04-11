<?php
use yii\helpers\Html;
?>
    <div class="container">
        <div class="row">

<section>
    <div class="list_services">
    <div class="container">
        <div class="row">
                    <?php
                    $layoutPager = '<div class="clearfix"></div><div class="col-12"><div class="blog-post-pagination text-center">{pager}</div></div>';

                    echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                                           // 'class' => 'item',
                        'options' => [
                            'class' => 'row'
                        ],
                        'id' => 'item-list',
                        'itemView' => '_blog_list',
                        'viewParams' => [],
                        'itemOptions' => ['class' => 'col-sm-4 col-6'],
                        'layout' => "{items}" . $layoutPager,
                        'pager' => [
                            'options' => [
    'class' => 'pagination justify-content-center',
],
                            'nextPageLabel' => '<i class="fa fa-arrow-right"></i>',
                            'prevPageLabel' => '<i class="fa fa-arrow-left"></i>',
                            'maxButtonCount' => 5,
                            'disabledPageCssClass' => 'disablePager',
                        ],
                    ]);
                     ?>
            </div>

        </div>
    </div>
</section>