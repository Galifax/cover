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
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',
        'http://vjs.zencdn.net/6.2.4/video-js.css',
        'css/emojionearea.css',
        'css/site.css',

    ];

    public $js = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js',
        'http://vjs.zencdn.net/6.2.4/video.js',
        'js/emojionearea.js',
        'https://cdnjs.cloudflare.com/ajax/libs/utf8/2.1.2/utf8.min.js',
        'js/main.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}