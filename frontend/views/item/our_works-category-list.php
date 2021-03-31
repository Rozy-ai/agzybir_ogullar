<?php
    use yii\helpers\Html;
?>



<section class="py-8">
    <div id="items" class="container">

        <?php

        echo \common\widgets\items\works\main\Works::widget([
            'view' => 'works_list',
        ])

        ?>

    </div>
</section>
