<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailSewa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-sewa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_nota')->textInput() ?>

    <?= $form->field($model, 'no_mobil')->textInput() ?>

    <?= $form->field($model, 'id_driver')->textInput() ?>

    <?= $form->field($model, 'tgl_kembali')->textInput() ?>

    <?= $form->field($model, 'pembayaran')->textInput() ?>

    <?= $form->field($model, 'denda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
