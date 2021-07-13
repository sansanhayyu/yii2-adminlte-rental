<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $id_driver
 * @property string $nama
 * @property string $alamat
 * @property float $no_tlp
 *
 * @property DetailSewa[] $detailSewas
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'no_tlp'], 'required'],
            [['alamat'], 'string'],
            [['no_tlp'], 'number'],
            [['nama'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_driver' => 'Id Driver',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_tlp' => 'No Tlp',
        ];
    }

    /**
     * Gets query for [[DetailSewas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSewas()
    {
        return $this->hasMany(DetailSewa::className(), ['id_driver' => 'id_driver']);
    }
}
