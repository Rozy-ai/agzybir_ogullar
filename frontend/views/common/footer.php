<?php
// use common\models\wrappers\ItemWrapper;
// use yii\bootstrap\ActiveForm;
// use yii\helpers\Html;
// use yii\helpers\Url;

$ownerDetails = \common\models\OwnerContact::find()->one();


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
              <li>О нас</li>
              <li>Производство</li>
              <li>Как приобрести</li>
              <li>Магазин</li>
              <li>Магазин</li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="right_footer">
            <h3>Контакты</h3>
            <br>
            <i class="fa fa-map-marker"></i> <span>Addres: <br>
              Lorem ipsum dolor sit amet.</span> <br><br>
            <i class="fa fa-phone"></i><span>Addres: <br>
              Lorem ipsum dolor sit amet</span> <br><br>
            <i class="fa fa-envelope"></i> <span>Addres: <br>
              Lorem ipsum dolor sit amet</span> <br><br>
            <i class="fa fa-clock-o"></i> <span>Addres: <br>
              Lorem ipsum dolor sit amet</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

