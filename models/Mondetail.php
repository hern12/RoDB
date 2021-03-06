<?php 
namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
class Mondetail extends ActiveRecord
{

	public $imageFile;

	public static function tableName()
	{

		return 'monsters';

	}

	public function behaviors()
	{
	    return  [
	    	[
            'class' => TimestampBehavior::className(),
            'value' => new Expression('NOW()'),
        	],
        ];

	}


	public function rules(){

		return [
			[['imageFile'], 'file'],
			['images','string'],
			['monster_name','required'],
			['monster_hp','integer'],
			[['monster_race'],'string'],
			['monster_property','string'],
			['monster_size','string'],
			['monster_base_exp','integer'],
			['monster_job_exp','integer'],
			['monster_drop_item','string'],
			
		];

	}
	public function attributeLabels()
	{

		return[

			// 'title' => 'ชื่อ',
			// '2' => 'เลือด',
			// '3' => 'ชนิด',
			// '4' => 'ธาตุ',
			// '5' => 'ขนาด',
			// '6' => 'Base exp',
			// '7' => 'Job exp',
			// '8' => 'ไอเท็มที่ดรอป',

		];

	}

}
?>