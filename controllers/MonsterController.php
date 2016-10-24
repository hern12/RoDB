<?php 
namespace app\controllers;
use yii\web\Controller;
use app\models\Mondetail;
use app\models\MonsterSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\controllers\Json;

class MonsterController extends Controller{

	public function actionIndex()
	{

		
		return $this->render('index');
	
	}

	public function actionMonsterd()
	{
		$request = \Yii::$app->request;
		$monster_name = $request->get('monster_name');
		if($monster_name == null){
			$sql = 'SELECT * FROM monsters WHERE monster_name LIKE "A%" ORDER BY monster_name';
			$monster = MonsterSearch::findBySql($sql)->all();
			\Yii::$app->response->format = 'json';
			return $monster;	
		}else{
			$sql = 'SELECT * FROM monsters WHERE monster_name LIKE "'.$monster_name.'%" ORDER BY monster_name';
			$monster = MonsterSearch::findBySql($sql)->all();
			\Yii::$app->response->format = 'json';
			return $monster;	
		}
	 	
		
	}

 
	
}


 ?>