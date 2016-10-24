<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.min.css',
        'css/custom.css',
        'css/styles.css',
        'css/image.css'
    ];
    public $js = [
        'js/owl.carousel.min.js',
        'js/useSlider.js',
        'js/jquery.quick.pagination.min.js',
        'js/jquery.scrollUp.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
