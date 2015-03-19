<?php
namespace hosanna\audiojs;

use yii\web\AssetBundle;
use Yii;

Yii::setAlias('audiojs', dirname(__FILE__));

class AudioJsAsset extends AssetBundle
{
    public $sourcePath = '@audiojs/assets'; 
    
    public $css = [
        
    ];
    public $js = [
        'audio.min.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
