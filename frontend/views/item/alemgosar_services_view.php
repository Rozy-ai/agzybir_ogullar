<?php 
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
    $date = yii::$app->controller->renderDateToWord($model->date_created);
?>
<section style="margin-top: 5%" class="blog_detail py-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details__content">
                    <div class="blog-details__image">
                        <?=html::img($model->getThumbPath())?>
                        <div class="blog-details__date"><?=$date?></div>
                        <!-- /.blog-details__date -->
                    </div><!-- /.blog-details__image -->
                    <h3 class="blog-details__title"><?=$model->title?></h3><!-- /.blog-details__title -->
                    <p class="blog-details__text">
                        <?=$model->content?>
                    </p><!-- /.blog-details__text -->
                </div><!-- /.blog-details__content -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                <!--     <div class="sidebar__single sidebar__search"> -->
                        <?php 
                        // $form = ActiveForm::begin(['action'=>['site/search'],'method'=>'get', 'options' => ['class' => 'sidebar__search-form']]); 
                        ?>
     <!--                    <input type="text" placeholder="<?=Yii::t('app','Search')?>"  name="query">
                        <input type="hidden"  name="category" value="blog"> -->

                        <?php
                         // ActiveForm::end();
                         ?>
                <!--     </div> -->
                    <!-- /.sidebar__single -->
                    <?php
                        echo \common\widgets\items\lastPosts\LastPosts::widget([

                        ]);
                    ?>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__category-list">
                            <?php
                                // $category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'blog'])->one();
                                // $categories = \common\models\wrappers\CategoryWrapper::find()->where(['parent_id' => $category->id])->all();
                                // foreach ($categories as $category):
                            ?>
<!--                             <li class="sidebar__category-list-item">
                                <?=html::a($category->name, $category->url)?>
                            </li> -->
                            <?php
                                // endforeach;
                            ?>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__tags-list">
                            <?php
                                $tags = $model->tags;
                                foreach ($tags as $tag):
                            ?>
                            <li class="sidebar__tags-list-item">
                                <?=html::a($tag->name.',', '#')?>
                            </li>
                            <?php
                                endforeach;
                            ?>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
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
