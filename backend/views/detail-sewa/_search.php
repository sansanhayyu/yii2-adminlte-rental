<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailSewaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-sewa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_nota') ?>

    <?= $form->field($model, 'no_mobil') ?>

    <?= $form->field($model, 'id_driver') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?= $form->field($model, 'pembayaran') ?>

    <?php // echo $form->field($model, 'denda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
