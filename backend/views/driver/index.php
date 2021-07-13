<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DriverSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Driver';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="driver-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <?= Html::encode($this->title) ?>
                    </div>
                    <div class="card-tools">
                        <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Data Baru ', ['create'], ['class' => 'btn btn-success btn-sm waves-effect waves-light']) ?>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id_driver',
                            'nama',
                            'alamat:ntext',
                            'no_tlp',
                            //['class' => 'yii\grid\ActionColumn'],
                            [
                                'class'     => 'yii\grid\ActionColumn',
                                'header'    => 'Menu',
                                'template'  => '{leadUpdate} {leadDelete}',
                                'buttons'   => [
                                    'leadUpdate' => function ($url, $model) {
                                        $url = Url::to(['update', 'id' => $model->id_driver]);
                                        return Html::a('<span class="nav-icon fas fa-edit"></span>', $url, ['class' => 'btn btn-warning']);
                                    },
                                    'leadDelete' => function ($url, $model) {
                                        $url = Url::to(['delete', 'id' => $model->id_driver]);
                                        return Html::a('<span class="fa fa-trash"></span>', $url, [
                                            'title' => 'delete',
                                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item ?'),
                                            'data-method' => 'post',
                                            'class' => 'btn btn-danger',
                                        ]);
                                    },
                                ]
                            ]
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
