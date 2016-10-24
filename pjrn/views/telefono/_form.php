<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Telefono */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefono-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'ciudad_id')->textInput() ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'macaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patrimonio')->textInput(['maxlength' => true]) ?>

    <?php 
	    $items = ArrayHelper::map(\app\models\Central::find()->all(), 'id', 'ip');
	    echo $form->field($model, 'central_id')->dropDownList($items)
	?>

    <?= $form->field($model, 'habilitado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

