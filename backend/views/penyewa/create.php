<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Penyewa */

$this->title = 'Tambah Penyewa';
//$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-create content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
