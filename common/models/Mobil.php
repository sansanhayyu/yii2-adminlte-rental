<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mobil".
 *
 * @property int $no_mobil
 * @property string $nopol
 * @property string $nama_mobil
 * @property string $jenis_mobil
 * @property string $tahun_pembuatan
 * @property int $harga_sewa
 * @property int $kapasitas_penumpang
 * @property string $status_mobil
 *
 * @property DetailFasilitas[] $detailFasilitas
 * @property DetailSewa[] $detailSewas
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopol', 'nama_mobil', 'jenis_mobil', 'tahun_pembuatan', 'harga_sewa', 'kapasitas_penumpang', 'status_mobil'], 'required'],
            [['harga_sewa', 'kapasitas_penumpang'], 'integer'],
            [['nopol'], 'string', 'max' => 10],
            [['nama_mobil'], 'string', 'max' => 25],
            [['jenis_mobil'], 'string', 'max' => 20],
            [['tahun_pembuatan'], 'string', 'max' => 5],
            [['status_mobil'], 'string', 'max' => 7],
            [['nopol'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_mobil' => 'No Mobil',
            'nopol' => 'Nopol',
            'nama_mobil' => 'Nama Mobil',
            'jenis_mobil' => 'Jenis Mobil',
            'tahun_pembuatan' => 'Tahun Pembuatan',
            'harga_sewa' => 'Harga Sewa',
            'kapasitas_penumpang' => 'Kapasitas Penumpang',
            'status_mobil' => 'Status Mobil',
        ];
    }

    /**
     * Gets query for [[DetailFasilitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailFasilitas()
    {
        return $this->hasMany(DetailFasilitas::className(), ['no_mobil' => 'no_mobil']);
    }

    /**
     * Gets query for [[DetailSewas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSewas()
    {
        return $this->hasMany(DetailSewa::className(), ['no_mobil' => 'no_mobil']);
    }
}
