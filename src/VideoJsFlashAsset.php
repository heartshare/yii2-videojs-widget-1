<?php
/**
 * Created by PhpStorm.
 * User: hzhihua
 * Date: 17-8-5
 * Time: 上午10:26
 */

namespace hzhihua\videojs;

class VideoJsFlashAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/videojs-flash/dist';

    public function init()
    {
        parent::init();

        $this->js = array_merge($this->js, $this->getJs());
        $this->css = array_merge($this->css, $this->getCss());
        $this->depends = array_merge($this->depends, $this->getDepends());
    }

    public function getDepends()
    {
        return [
            'yii\\web\\JqueryAsset',
            'yii\\bootstrap\\BootstrapAsset',
        ];
    }

    public function getJs()
    {
        return [
            'videojs-flash.min.js',
        ];
    }

    public function getCss()
    {
        return [];
    }

}