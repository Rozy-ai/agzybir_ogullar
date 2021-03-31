<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'source/css/fullpage.css',
        // 'source/css/sweetalert2.min.css',
        'source/css/bootstrap.min.css?v=1.0.0',
        //'opensans/site.css',
        'source/css/fontawesome.min.css',
        'source/css/animate.css',
        'source/css/slick.css',
        'source/css/slick-theme.css',
        'source/css/forslick_detail.css',
        // 'source/css/main.css',
//        'source/plugins/nonid/style.css',
        'source/css/site.css?v=1.0.1',
        'source/css/index_responsive.css?v=1.0.1',
        'source/css/responsive.css',
    ];
    public $js = [
       'source/js/popper.min.js',
//        'source/js/index_scroll-overflow.js',
//        'source/js/index_fullpage.js',
//        'source/js/index_parallax.js',
        // 'source/js/sweetalert2.min.js',
        'source/js/bootstrap.min.js?v=1.0.0',
        // 'source/js/back-to-top.js?v=1.0.2',
        // 'source/js/layout.js',
         // 'source/js/compressed.js',
         // 'source/js/main.js',
         'source/js/wow.min.js',
        'source/js/slick.min.js',
        'source/js/forslick_detail.js',
         'source/js/myscripts.js?v=1.0.2',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\MainAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        // 'source/js/jquery.min.js',
    ];
}
