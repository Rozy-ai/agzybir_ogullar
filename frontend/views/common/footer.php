<?php
use common\models\wrappers\ItemWrapper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$ownerDetails = \common\models\OwnerContact::find()->one();
$serviceItems = ItemWrapper::find()->joinWith('category cat')->where(['cat.code' => 'service', 'tbl_item.status' => 1])->limit(5)->all();

?>

<?php
$language = yii::$app->language;
switch ($language){
    case 'en': $logo = 'logo-en.png'; break;
    case 'ru': $logo = 'logo-ru.png'; break;
    default: $logo = 'logo-tm.png'; break;
}
?>

<section class="footer_section">
    <footer>
        <div class="container">
            <div class="row">


<div class="col-12">
          <div class="subscribe_block">
            <h1 style="font-size: 24px;"><?= yii::t('app', 'Stay tuned for more!')?></h1>
            <div class="input-group">
              <input type="email" placeholder="E-mailadres" id="footer-subscribe" class="input-group__field " name="email">
<button class="contact1-form-btn btn btn-outline-success my-2 my-sm-0" style="    position: absolute;
    right: 0;
    top: 20%;
    background-color: inherit;">
<span>
    <i class="fa fa-long-arrow-right" style="color: #2ADFB4" aria-hidden="true"></i>
</span>
                    </button>
            </div>

        </div>
</div>
<div class="col-md-3 col-sm-6 col-12 contact_info">
  <h4><?= yii::t('app', 'Our address')?></h4>
  <p>Aşgabat şäher Gurtly 38-nji öý
</div>
<div class="col-md-3 col-sm-6 col-12 contact_info">
  <h4><?= yii::t('app', 'Phone')?></h4>
  <p>+993 61 000000 <br>+993 61 000000</p>
</div>
<div class="col-md-3 col-sm-6 col-12 contact_info">
  <h4><?= yii::t('app', 'Our email')?></h4>
  <p>test@gmail.com <br>test@gmail.com</p>
</div>
<div class="col-md-3 col-sm-6 col-12 contact_info">
  <h4><?= yii::t('app', 'Social icons')?></h4>
  <ul class="list-unstyled social_link social_link_two">
    <li>
      <a title="linkedin" href="https://www.linkedin.com/company/turkmenportal">
        <i style="color: #fff" class="fa fa-linkedin-square"></i>
        <i style="color: #fff" class="fa fa-linkedin-square"></i>
      </a>
    </li>
    <li>
      <a title="facebook" href="https://www.facebook.com/tphabar">
        <i style="color: #fff" class="fa fa-facebook"></i>
        <i style="color: #fff" class="fa fa-facebook"></i>
      </a>
    </li>
    <li>
      <a title="twitter" href="https://twitter.com/turkmenportal">
        <i style="color: #fff" class="fa fa-twitter"></i>
        <i style="color: #fff" class="fa fa-twitter"></i>
      </a>
    </li>
    <li>
      <a title="instagram" href="https://www.instagram.com/turkmenportal">
        <i style="color: #fff" class="fa fa-instagram"></i>
        <i style="color: #fff" class="fa fa-instagram"></i>
      </a>
    </li>
       <li>
      <a title="vk" href="https://vk.com/turkmenportal">
        <i style="color: #fff" class="fa fa-vk "></i>
        <i style="color: #fff" class="fa fa-vk "></i>
      </a>
    </li>
       <li>
      <a title="youtube" href="https://www.youtube.com/channel/UCaVOiK81-Z30BGDnM2Udslw">
        <i style="color: #fff" class="fa  fa-youtube-play"></i>
        <i style="color: #fff" class="fa  fa-youtube-play"></i>
      </a>
    </li>
  </ul>
  <br>
          
                    <div class="language_box">
                        <?php
                        echo \common\widgets\language\LanguageSwitcherDropdownWidget::widget([
//                            'showFlags' => true
                        ]);0
                        ?>
                    </div>
            
</div>

            </div>
        



        </div>
    </footer>
    <style type="text/css">
      .btn-outline-success:focus{
        outline: none;
        border: none;
      }
      .input-group:hover i.fa-long-arrow-right{
  margin-right: 0px;
  margin-left: 10px;
  transition: 0.2s;
}
        footer {
   background: #25326D;
  padding: 30px 40px;
}

  footer .contact_info p{
 color: #fff;
  }
  footer h1{
  color: #fff;
}
footer h4{
  color: #fff;
  font-weight: bold;
  font-size: 15px;
  line-height: 18px;
  margin-bottom: 16px;
}
footer a{
color: #fff;
}
footer a:hover{
color: #fff;
}
.copyright_block{
  color: #fff;  
}
footer hr{
    background-color: #fff;
}
#site-search-button{
    border: none;
    color: #fff;
    background-color: inherit;
    font-size: 20px;
    outline: none;
}
.input-group input{
    outline: none;
    background-color: inherit;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
}
.input-group input:focus,.input-group input:active{
    outline: none;
    box-shadow: none;
    background-color: inherit;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
}
.flag{
    width: 40px;
    height: 25px;
}
.btn-link label{
    color: #fff;
    padding-left: 5px;
}
.dropdown-toggle::after{
    color: #fff;
}
.dropdown-menu{
    background-color: inherit;
    border: none;
}
.dropdown-menu label{
     padding-left: 5px;
}
.social_block{
    color: #fff;
}
.input-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

input[type=date], input[type=email], input[type=password], input[type=search], input[type=tel], input[type=text], select, textarea {
    padding: 6px 20px 2px;
    display: block;
    height: 64px;
    color: #fff;
    background: #fff;
    background: hsla(0,0%,100%,.05);
    line-height: inherit;
    width: 100%;
    border: 0;
    border-bottom: 2px solid #fff;
    border-radius: 0;
  }
  input[type=date]:focus, input[type=email]:focus, input[type=password]:focus, input[type=search]:focus, input[type=tel]:focus, input[type=text]:focus, select:focus, textarea:focus {
    outline: 0;
    border-color: #2adfb4;
}
.input-group__field:focus+.input-group__button {
    border-color: #2adfb4;
}
.input-group__button {
    height: 64px;
    background: hsla(0,0%,100%,.05);
    border-bottom: 2px solid #fff;
    border-radius: 0;
}

    </style>
</section>


