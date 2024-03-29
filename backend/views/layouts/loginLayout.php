<?php

use backend\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->title = 'Agzybir ogullar' ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page" >
<?php $this->beginBody() ?>

<div class="wrap">
    
    <div class="container">
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
