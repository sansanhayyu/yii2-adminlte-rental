<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailSewaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Sewas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-sewa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Sewa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_nota',
            'no_mobil',
            'id_driver',
            'tgl_kembali',
            'pembayaran',
            //'denda',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
