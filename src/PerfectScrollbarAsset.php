<?php

namespace entero\perfectScrollbar;

use yii\web\AssetBundle;

class PerfectScrollbarAsset extends AssetBundle
{
    public $sourcePath = '@entero/perfectScrollbar/assets';
    public $js = [
        "js/perfect-scrollbar.js",
    ];
    public $css = [
        "css/perfect-scrollbar.css",
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
