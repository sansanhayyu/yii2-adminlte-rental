<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sewa */

$this->title = 'Tambah Sewa';
//$this->params['breadcrumbs'][] = ['label' => 'Sewas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sewa-create content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
