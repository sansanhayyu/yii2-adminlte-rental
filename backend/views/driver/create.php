<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Driver */

$this->title = 'Tambah Driver';
//$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
