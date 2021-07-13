<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mobil */

$this->title = 'Tambah Mobil';
//$this->params['breadcrumbs'][] = ['label' => 'Mobils', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-create content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
