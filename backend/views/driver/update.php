<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Driver */

$this->title = 'Update Driver: ' . $model->id_driver;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_driver, 'url' => ['view', 'id' => $model->id_driver]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driver-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
