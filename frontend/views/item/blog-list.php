<?php
use yii\helpers\Html;
?>
<section>
    <div class="list_services">
    <div class="container-fluid" style="padding-left: 7%; padding-right: 7%">
        <div class="row service_item" style="margin-top: 3%;" >
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
                        'itemOptions' => ['class' => 'col-12 col-md-6 col-lg-3'],
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