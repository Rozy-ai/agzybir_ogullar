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

    <div class="col-12">
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
                            <h1 style="font-size: 23px" class="text-centers"><?=$data->title?></h1>

  
                        </div>
                    </div>
                </div>



        <hr style="margin-bottom: 10%">

                            <?php } ?>

<?php } ?>
<a href="/item/blog" class="text-center"><button type="button" class="btn btn-light" style="border:2px solid black;text-align: center;margin-bottom: 10%;"><?= yii::t('app', 'Show all') ?></button></a>
</div>
</div>