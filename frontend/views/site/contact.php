<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Breadcrumbs;

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
$lat = isset($ownInfo->my_latitude) ? $ownInfo->my_latitude : "0";
$lng = isset($ownInfo->my_longitude) ? $ownInfo->my_longitude : "0";
$style = 'background: linear-gradient(90deg, rgba(204,43,94,1) 0%, rgba(117,58,136,1) 100%) center center no-repeat;background-size: cover;
        background-attachment: fixed;';
?>

<section class="breadcrumb_area_two parallaxie">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row">
            <div class="breadcrumb_content col-12 col-md-4">
                <?php if(isset($this->title) && !isset($this->params['no-title'])) { echo'<h1>'.$this->title.'</h1>'; } ?>
                <?php
                echo Breadcrumbs::widget([
                    'homeLink' => [
                        'label' => Yii::t('app', 'Home'),
                        'url' => Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => [
                            'class' => 'nav'
                    ]
                ]);
                ?>
            </div>
            <div class="breadcrumb_content offset-md-2 col-md-6">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing, elit. Voluptate repellendus adipisci repudiandae laborum, vero exercitationem reprehenderit recusandae cum impedit repellat nisi, ab velit tempore, quidem alias porro, incidunt aperiam quo. </p>
            </div>
            </div>
        </div>
    </section>
<div class="container-fluid" style="background-color: #E9EFFF;">
<div class="container py-5">
    <div class="contact1">
        <div class="container-contact1">
            <div class="row">



<div class="row contact_inner">
<div class="col-md-6">
  <h1><?= yii::t('app', "Let's talk?")?></h1>
  <p style="margin-bottom: 35px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.</p>

  <h4><?= yii::t('app', 'Phone')?></h4>
  <p>+993 61 000000 <br>+993 61 000000</p>

  <h4><?= yii::t('app', 'Our email')?></h4>
  <p>test@gmail.com <br>test@gmail.com</p>

  <h4><?= yii::t('app', 'Our address')?></h4>
  <p>Aşgabat şäher Gurtly 38-nji öý

</div>
                    <?php $form = ActiveForm::begin([
                        'id' => 'contact-form',
                        'options' => [
                            'class' => 'validate-form col-md-6 info_contact',
                        ],
                        'enableClientValidation' => false,
                        'enableAjaxValidation' => false]); ?>
                        <div class="row">
                    <div class="validate-input form-group col-md-6" style="width: 100%" data-validate="Name is required">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control', 'style' => 'background-color: #313C74', 'placeholder' => yii::t('app', 'Name')])->label(false)?>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="validate-input form-group col-6" style="width: 100%" data-validate="Number is required">
                        <?= $form->field($model, 'phone')->textInput(['autofocus' => true, 'class' => 'form-control','style' => 'background-color: #313C74', 'placeholder' => yii::t('app', 'Phone')])->label(false)?>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="validate-input form-group col-6" style="width: 100%" data-validate="Subject is required">
                        <?= $form->field($model, 'subject')->textInput(['class' => 'form-control', 'style' => 'background-color: #313C74','placeholder' => yii::t('app', 'Subject')])->label(false) ?>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="validate-input form-group col-md-6" style="float: right" data-validate="Valid email is required: ex@abc.xyz">
                        <?= $form->field($model, 'email')->textInput(['class' => ' form-control','style' => 'background-color: #313C74', 'placeholder' => yii::t('app', 'Email')])->label(false) ?>
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="validate-input form-group col-12" data-validate="Message is required">
                        <?= $form->field($model, 'message')->textarea(['cols' => 100, 'rows' => 6,  'class' => 'form-control','style' => 'background-color: #313C74', 'placeholder' => yii::t('app', 'Message')])->label(false) ?>
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="form-group col-12 text-right">
                    <button class="contact1-form-btn btn btn-outline-success my-2 my-sm-0">
<span>
<?=yii::t('app','Send')?>
    <i class="fa fa-long-arrow-right" style="color: #2ADFB4" aria-hidden="true"></i>
</span>
                    </button>
                        <?php ActiveForm::end(); ?>
    </div>
    </div>
    </div>
            
<!--             <div class="container">
              <div class="row">
                <img src="/img/Contacts.png">
              </div>
            </div> -->
            </div>
        </div>
    </div>
</div>
</div>
<?php


$script = <<< JS

        // $('#contact-form').on('beforeSubmit', function(e) {
        //     var form = $(this);
        //     var formData = form.serialize();
        //     $.ajax({
        //         url: form.attr("action"),
        //         type: form.attr("method"),
        //         data: formData,
        //         success: function (data) {
        //             alert('Test');
        //         },
        //         error: function () {
        //             alert("Something went wrong");
        //         }
        //     });
        // }).on('submit', function(e){
        //     e.preventDefault();
        // });

      // var map_style=[{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}];

      function initMap() {
            var action=$('#action').val() || 'create';
            var lat=$lat;
            var lng=$lng;
            var infowindow = new google.maps.InfoWindow();
            
            if(lng!==undefined && lat!==undefined && lat!=0 && lng!=0){
              var center = new google.maps.LatLng(lat, lng);
              map = new google.maps.Map(document.getElementById('map'), {
                  center: center,
                  zoom: 16,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  // styles: map_style
                  // mapTypeId: 'satellite'
                  // gestureHandling: 'greedy'
              });
          
              marker = new google.maps.Marker({
                  map: map,
                  position: center,
                  draggable: action=='create',
              });
              
              infowindow.setContent("$ownInfo->my_address");
              infowindow.open(map, marker);
          }
      }
       
      initMap();

JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
