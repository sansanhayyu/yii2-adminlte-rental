<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailSewa */

$this->title = 'Update Detail Sewa: ' . $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Detail Sewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_nota, 'url' => ['view', 'id' => $model->no_nota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-sewa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
