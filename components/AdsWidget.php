<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class AdsWidget extends Widget{
	public $tag = 'div';

	public $options = ['id' => 'adsSection','style'=>''];

	public $headTxt = '<h1>ADS SECTION</h1>';

	public function run()
    {
        echo Html::tag($this->tag,$this->headTxt, $this->options);
    }
}
?>
