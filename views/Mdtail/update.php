<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;
 ?>

 <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	<?= $form->field($model, 'imageFile')->fileInput() ?>	
 	<?= $form->field($model,'monster_name')->textInput(['type' => 'string']) ?>
 	<?= $form->field($model,'monster_hp')->textInput(['type' => 'number']) ?>
 	<?= $form->field($model,'monster_race')->textInput(['type' => 'string']) ?>
 	<?= $form->field($model,'monster_property')->textInput(['type' => 'string']) ?>
 	<?= $form->field($model,'monster_size')->textInput(['type' => 'string']) ?>
 	<?= $form->field($model,'monster_base_exp')->textInput(['type' => 'number']) ?>
 	<?= $form->field($model,'monster_job_exp')->textInput(['type' => 'number']) ?>
 	<?= $form->field($model,'monster_drop_item')->textInput(['type' => 'string']) ?>
 	<div class="form-group">
 		<?=Html::submitButton('ส่งข้อมูล',['class'=>'btn btn-primary'])?>
 	</div>
<?php ActiveForm::end() ?>