<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Driver */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-form card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'no_tlp')->textInput(['maxlength' => true]) ?>

        <div class="card-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
