<?php

namespace mbi\datatables;

use yii\web\AssetBundle;

class BootstrapDatatableAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatable/media';

    public $css = [
        'css/dataTables.bootstrap.min.css'
    ];

    public $js = [
        'js/jquery.dataTables.min.js',
        'js/dataTables.bootstrap.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}