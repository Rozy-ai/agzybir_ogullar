<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

$ownerDetails = \common\models\OwnerContact::find()->one();
$category = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'services'])->one();
$categorysecond = \common\models\wrappers\CategoryWrapper::find()->where(['code' => 'our_works'])->one();
$catId = $category->id;
$catIdsecond = $categorysecond->id;
$services = \common\models\wrappers\ItemWrapper::find()->where(['category_id' => $catId, 'status' => '1'])->orderBy('Rand()')->limit(8)->all();
$works = \common\models\wrappers\ItemWrapper::find()->where(['parent_category_id' => $catIdsecond, 'status' => '1'])->orderBy('Rand()')->all();
?>
<header class="header_area p_absoulte m_p sticky_nav navbar_fixed">
 <div class="container">
      <div class="row header_top">
        <p class="header_info"> <i class="fa fa-phone"></i> (+99312) 958662 </p>
        <p class="header_info"> <i class="fa fa-envelope"> test@gmail.com</i> </p>
        <p class="header_info"> <i class="fa fa-clock-o"> Du-Sb/ 9:00-8:00 </i> </p>
        <div class="lang_img">
          <img src="img/flag/russia.png" alt="russian">
          <img src="img/flag/turkmenistan.png" alt="turkmen">
        </div>
      </div>
    </div>
    <nav class="navbar" id="header">
        <div class="container-fluid">
            <div class="logo_info">
                <a href="/" class="navbar-brand logo_two">
                    <img src="/source/img/png/logo.png"  alt="">
                    <img src="/source/img/png/logo_dark.png"  alt="">
                </a>
<!--                 <div class="h_contact_info">
                    <a href="#">+99363 959603.</a>
                    <a href="#">info@turkmenportal.com</a>
                </div> -->
            </div>
            <div class="navbar_top">
                <?php
                echo Menu::widget([
                    'items' => $menuItems,
                    'options' => [
                        'class' => '',
                    ],
                    'linkTemplate' => "<a href=\"{url}\" class='' role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{label}</a>",
                    'submenuTemplate' => "\n<ul class=''>\n{items}\n</ul>\n",
                    'itemOptions' => ['class' => ''],
                ]);
                ?>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu_right">
                    <div class="burger_menu">
                                <span class="line"></span>
                        <span class="line line-short"></span>
                        </div>
                    </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--                <ul class="navbar-nav ml-auto menu">-->
<!--                    <li class="nav-item dropdown submenu">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            Pages-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>-->
<!--                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<div class="container header_hide_content">
    <div class="row">
        <div class="col">
             <?php
                echo Menu::widget([
                    'items' => $menuItems,
                    'options' => [
                        'class' => 'navbar-nav ml-auto menu',
                    ],
                    'linkTemplate' => "<a href=\"{url}\" class='nav-link dropdown-toggle' role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{label}</a>",
                    'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n",
                    'itemOptions' => ['class' => 'nav-item dropdown submenu show'],
                ]);
                ?>
        </div>
        <div class="col nav_bottom">
            <h2><?= yii::t('app', 'Services')?></h2>
                  <?php
                    foreach ($services as $service):
                ?>

      <a href="<?= '/item/'.$service->id; ?>"> 
 <?= $service->title ?>
 </a>
                    <?php
                    endforeach;
                ?>
        </div>
        <div class="col nav_bottom">
            <h2><?= yii::t('app', 'Services')?></h2>
                   <?php
                    foreach ($works as $work):
                ?>

      <a href="<?= '/item/'.$work->id; ?>"> 
 <?= $work->title ?>
 </a>
                    <?php
                    endforeach;
                ?>
        </div>
    </div>
</div>
               

                           

                          

            </div>

<!--             <div class="burger_menu side_menu">
                <div class="dot_icon">
                    <span class="dot one"></span>
                    <span class="dot two"></span>
                    <span class="dot three"></span>
                    <span class="dot four"></span>
                    <span class="dot five"></span>
                    <span class="dot six"></span>
                    <span class="dot seven"></span>
                    <span class="dot eight"></span>
                    <span class="dot nine"></span>
                </div>
            </div> -->
<!--                 <div class="menu_right">
                    <div class="burger_menu" style="z-index: 999">

                        <span class="line"></span>
                        <span class="line line-short"></span>
                    </div>
                </div> -->

                           


          
        </div>
    </nav>
</header>


