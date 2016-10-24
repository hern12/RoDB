<?php 

namespace app\controllers;

use yii\web\Controller;
use app\models\Mondetail;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
class MdtailController extends Controller{

	public function actionIndex()
	{

		return $this->render('index');

	}

	public function actionCreate()
	{
		$model = new Mondetail();
		$postData  = \Yii::$app->request->post();
		if($model->load($postData))
		{
			$imageName = $model->monster_name;
			$model->imageFile = UploadedFile::getInstance($model, 'imageFile');
			$model->imageFile->saveAs('uploads/monster-images/'.$imageName.'.'.$model->imageFile->extension);
			$model->images = 'uploads/monster-images/'.$imageName.'.'.$model->imageFile->extension;
			$model->save();
			 return $this->render('index');
		}else{
			 return $this->render('create',['model' =>$model]);
		}
	}

	public function actionUpdate()
	{
		$model = new Mondetail();
		$name = $model::findOne("198");
		$name->monster_name = "Kobold_1";
		$name->update();
	}

	protected function findModel($id)
	{

		if(($model = Mondetail::findOne($id) !== null))
		{

			return $model;

		}else{

			throw new NotFoundHttpException("Error Processing Request");

		}

	}

}


?>
