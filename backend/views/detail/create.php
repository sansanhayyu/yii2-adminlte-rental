<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailSewa */

$this->title = 'Create Detail Sewa';
$this->params['breadcrumbs'][] = ['label' => 'Detail Sewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-sewa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
