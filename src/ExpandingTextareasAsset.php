<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/12
 * Time: 10:27
 */

namespace huijiewei\ExpandingTextareas;

use yii\web\AssetBundle;

class ExpandingTextareasAsset extends AssetBundle
{
    public $sourcePath = '@npm/expanding-textareas/dist';

    public $js = [
        'expanding.jquery.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}