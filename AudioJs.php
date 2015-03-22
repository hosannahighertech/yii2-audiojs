<?php
namespace hosanna\audiojs;

use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class AudioJs extends Widget
{
    public $files;
    public $uploads;
    public $assetBundle;

    public function init()
    {
        parent::init();
        
        if ($this->uploads === null) {
            $this->uploads = Yii::getAlias('@web/uploads');
        }        
        $this->assetBundle = AudioJsAsset::register($this->view); 
    }

    public function run()
    {
        //Register Assets       
        $this->view->registerJs('
            audiojs.events.ready(function() {
                audiojs.createAll();
            });
        ');
        
        $audio = '';
        if(is_array($this->files))
        {
            foreach($this->files as $file)
            {
                $audio = $audio."<audio src='{$this->uploads}/$file?time()' preload='auto' />";
            }
        }
        else
        {
            $audio = "<audio src='{$this->uploads}/{$this->files}?time()' preload='auto' ></audio>";
        }
        return Html::tag('div', $audio);
    }
}
