<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';


    public $css = [
    ];



    public $js = [
        'source/js/popper.min.js',
        'source/js/jquery.min.js',
    ];


    
    public $depends = [
    ];
}
