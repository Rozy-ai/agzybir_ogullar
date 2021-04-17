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
          <p>Производства различных пластиковых изделий бытового, хозяйственного, пищевого и технического назначения.
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
        <div class="col">
          <div class="center_footer">
            <h3>Полезно</h3><br>
            <ul>
              <a href="/item/about"> <li>О нас</li></a>
              <a href="/item/magazin"> <li>Магазин</li></a>
              <a href="/item/about/products"> <li>Производство</li></a>
              <a href="/item/about/partners"> <li>Partners</li></a>
              <a href="/item/blog"> <li>Blog</li></a>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="right_footer">
            <h3>Контакты</h3>
            <br>
            <i class="fa fa-map-marker"></i> <span>Addres: <br>
              <?= $ownInfo->my_address ?></span> <br><br>
            <i class="fa fa-phone"></i><span>Phone: <br>
              <?= $ownInfo->my_phone ?></span> <br><br>
            <i class="fa fa-envelope"></i> <span>Email: <br>
              <?= $ownInfo->my_email ?></span> <br><br>
            <i class="fa fa-clock-o"></i> <span>Time work: <br>
              Du-Sb/ 9:00-8:00</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

