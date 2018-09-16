<?php

namespace entero\perfectScrollbar;

use yii\web\AssetBundle;

class PerfectScrollbarAsset extends AssetBundle
{
    public $sourcePath = '@bower/perfect-scrollbar';
    public $js = [
        "js/perfect-scrollbar.jquery.min.js",
    ];
    public $css = [
        "css/perfect-scrollbar.min.css",
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
