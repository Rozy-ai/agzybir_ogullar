<?php
// use common\models\wrappers\ItemWrapper;
// use yii\bootstrap\ActiveForm;
// use yii\helpers\Html;
// use yii\helpers\Url;


$ownInfo = \common\models\OwnerContact::find()->one();
?>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col left_footer">
          <img src="img/europlastic-logo-copy.png" alt="">
          <br><br>
          <p><?= yii::t('app', 'Production of various plastic products for household, food and technical purposes.') ?>


          </p>
          <br>
          <hr><br>

          <div class="social_icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-send "></i></a>
            <a href="#"><i class="fa fa-youtube-play "></i></a>
            <a href="#"><i class="fa fa-instagram "></i></a>



          </div>

        </div>
        <div class="col d-flex justify-content-center">
          <div class="center_footer">
            <h3><?= yii::t('app', 'Useful') ?></h3><br>
            <ul>
              <a href="/item/about"> <li><?= yii::t('app', 'About Us') ?></li></a>
              <a href="/item/magazin"> <li><?= yii::t('app', 'Shop') ?> </li></a>
              <a href="/item/about/products"> <li><?= yii::t('app', 'Production') ?></li></a>
              <a href="/item/about/partners"> <li><?= yii::t('app', 'Partners') ?></li></a>
              <a href="/item/blog"> <li><?= yii::t('app', 'Blog') ?></li></a>
            </ul>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="right_footer">
            <h3><?= yii::t('app', 'Contact us') ?></h3>
            <br>

            <i class="fa fa-map-marker"></i> <span><?= yii::t('app', 'Address') ?>: <p>
              <?= $ownInfo->my_address ?></p></span>

            <i class="fa fa-phone"></i><span><?= yii::t('app', 'Phone') ?>: <p><a href="tel: <?= $ownInfo->my_phone ?>">
              <?= $ownInfo->my_phone ?></a> </p> </span> 

            <i class="fa fa-envelope"></i> <span><?= yii::t('app', 'Email') ?>: <p> <a href="mailto:<?= $ownInfo->my_email ?>">
              <?= $ownInfo->my_email ?></a></p></span>

            <i class="fa fa-clock-o"></i> <span><?= yii::t('app', 'Working time') ?>: <p>
              <?= yii::t('app', 'Mon - Sun / 9:00 AM - 8:00 PM') ?></p></span>
          </div>
        </div>
      </div>
    </div>
  </footer>
