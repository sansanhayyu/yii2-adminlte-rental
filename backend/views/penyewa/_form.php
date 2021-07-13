<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Penyewa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyewa-form card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <?= Html::encode($this->title) ?>
        </h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenkel')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'kota')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true]) ?>

        <div class="card-footer">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
            </div>
</div>
