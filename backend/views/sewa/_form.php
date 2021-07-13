<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sewa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sewa-form card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_penyewa')->textInput() ?>

        <?= $form->field($model, 'tgl_sewa')->textInput() ?>

        <?= $form->field($model, 'jaminan')->textInput(['maxlength' => true]) ?>

        <div class="card-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
