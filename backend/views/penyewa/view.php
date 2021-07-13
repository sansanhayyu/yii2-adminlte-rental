<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Penyewa */

$this->title = $model->id_penyewa;
//$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penyewa-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <?= Html::encode($this->title) ?>
                    </h3>
                    <div class="card-tools">
                        <?= Html::a('Lihat Semua', ['index'], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= Html::a('Ubah', ['update', 'id' => $model->id_penyewa], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Hapus', ['delete', 'id' => $model->id_penyewa], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item ?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="card-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id_penyewa',
                            'nama_lengkap',
                            'password',
                            'email:email',
                            'jenkel',
                            'pekerjaan',
                            'alamat:ntext',
                            'kota',
                            'provinsi',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
