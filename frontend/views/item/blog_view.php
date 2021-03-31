<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
    $date = yii::$app->controller->renderDateToWord($model->date_created);
?>


<section style="margin-top: 5%" class="blog_detail py-8">
    <div class="container">
        <div class="row">
            <div class="offset-1 col-lg-10">
                <div class="blog-details__content">
             
                      
                        <div><?=$date?></div>

                        <!-- /.blog-details__date -->
         
                    <h3 class="blog-details__title"><?=$model->title?></h3><!-- /.blog-details__title -->
                    <p class="blog-details__text">
                        <?=$model->content?>
                    </p><!-- /.blog-details__text -->
                </div><!-- /.blog-details__content -->
            </div><!-- /.col-lg-8 -->

        </div>
<!--         <div class="subscribe_block text-center">
            <h1>Habarlarymyzdan habardar boluň!</h1>
            <form action="#">
                <input type="text" name="sub_email">
                <button type="submit">Send</button>
            </form>
        </div> -->
    </div>
</section>
<section class="last_posts" style="padding-top: 40px;">
    <div class="container">
    <h3>End of story. <br>
You might be interested in:</h3>
        </div>
                        <?php
                        echo \common\widgets\items\lastPosts\LastPosts::widget([

                        ]);
                    ?>
</section>
<section style="padding: 40px 0">
    <div class="container">
        <h2><?= yii::t('app', "Let’s be friends, tell us about your project")?></h2>
                      <a href="/site/a/contact">   <button class="contact1-form-btn btn btn-outline-success my-2 my-sm-0">
<span>
<?=yii::t('app','Send')?>
    <i class="fa fa-long-arrow-right" style="color: #2ADFB4" aria-hidden="true"></i>
</span>
                    </button></a>
    </div>
</section>
