<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TelefonoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefono-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'ciudad_id') ?>

    <?= $form->field($model, 'label') ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'serial') ?>

    <?php // echo $form->field($model, 'macaddress') ?>

    <?php // echo $form->field($model, 'patrimonio') ?>

    <?php // echo $form->field($model, 'central_id') ?>

    <?php // echo $form->field($model, 'habilitado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
