<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'source/css/fullpage.css',
        'source/css/animate.css',
        'source/css/formouse.css',
        'source/css/slick.css',
        'source/css/slick-theme.css',
        'source/css/forslick.css',
//        'source/css/slick.css',
//         'source/css/slick.css',
//         'source/css/slick-theme.css',
        // 'source/css/sweetalert2.min.css',
        //'source/css/bootstrap.min.css?v=1.0.0',
        //'opensans/site.css',
        'source/css/fontawesome.min.css',
//        'source/plugins/nonid/style.css',
        'source/css/site.css?v=1.0.1',
        'source/css/index_site.css?v=1.0.1',
        'source/css/index_responsive.css?v=1.0.1',
    ];
    public $js = [
//        'source/js/popper.min.js',
        'source/js/scroll-overflow.js',
        'source/js/fullpage.js',
        'source/js/parallax.js',
         'source/js/index_myscripts.js?v=1.0.2',
        'source/js/slick.min.js',
        'source/js/forslick.js',
        // 'source/js/sweetalert2.min.js',
        //'source/js/bootstrap.min.js?v=1.0.0',
        // 'source/js/back-to-top.js?v=1.0.2',
        // 'source/js/layout.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'frontend\assets\MainAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
