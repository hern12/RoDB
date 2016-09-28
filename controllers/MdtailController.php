<?php 

namespace app\controllers;

use yii\web\Controller;
use app\models\Mondetail;
use yii\web\NotFoundHttpException;

class MdtailController extends Controller{

	public function actionIndex()
	{

		return $this->render('index');

	}

	public function actionCreate()
	{
		$model = new Mondetail();
		$postData  = \Yii::$app->request->post();
		if($model->load($postData) && $model->save())
		{
			 return $this->redirect(['index']);
		}else{
			 return $this->render('create',['model' =>$model]);
		}
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
