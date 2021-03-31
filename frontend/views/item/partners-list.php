<?php

use yii\helpers\Html;
$items = \common\models\wrappers\ItemWrapper::find()->where(['category_id' =>$modelCategory->id, 'status' => '1'])->all();

?>

<section id="" style="background-color: #EEF3FA; padding-bottom: 50px">
    <div class="container">
        <div class="row">
                <h1 style="margin-top: 100px; font-size: 50px"><?= yii::t('app', "Those who trust us")?></h1>
                <p>We are proud to work with some of the biggest entertainment, technology, and media companies in the world, along with many top consumer brands. You can see a selection of these companies below and see what they have to say about us in their testimonials.</p>

          <?php
                foreach ($items as $key => $item):
            ?>

            <div class="col-12 col-sm-6 col-md-3">
                <p class="text-center"><img style="width: 100%; height: 200px; border-radius: 10px;" src="<?= $item->getThumbPath()?>"></p>
              
            </div>
            <?php
                         endforeach;
                    ?>

        </div>
    </div>
</section>

    <?php

                        if (isset($model->link_to_project)):
                    ?>
                    <a href="<?=$model->link_to_project?>" class="g_hover" target="_blank">Live Project</a>
                    <?php
                        endif;
                    ?>

