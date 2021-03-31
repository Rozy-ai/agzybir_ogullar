<?php
use yii\helpers\Html;

$list = $this->context->list;
?>

<div class="container">
    <div class="row">
<?php
if (isset($list) && count($list) > 0) { ?>
    <?php foreach ($list as $key => $data) {
        $href = $data->url;
            $date = yii::$app->controller->renderDateToWord($data->date_created);
        ?>

    <div class="col-12 col-md-4">
                     <div class="blog-one__single">
                        <div class="blog-one__single-inner-block">
                            <a href="<?= $data->url; ?>">
                        <div class="scale">
                          <?=html::img($data->getThumbPath(),['alt' => $data->category->name, 'class' => 'scale'])?>
                        </div>
                        </a>        
                        <div style="color: #fff;">
                            <?= $date ?>
                        </div>               
                            <h1 style="font-size: 23px"><?=$data->title?></h1>

                    <div style="position: absolute;bottom: 2%; left: 10%">
                        <?=html::a(yii::t('app', 'Doly maglumat').'  <i class="fa fa-long-arrow-right"></i>',$data->url, ['class' => 'blog-one__link button-underline'])?>
                    </div>
                        </div>
                    </div>
                </div>



        

                            <?php } ?>

<?php } ?>
</div>
</div>