<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sewa".
 *
 * @property int $no_nota
 * @property int $id_penyewa
 * @property string $tgl_sewa
 * @property string $jaminan
 *
 * @property DetailSewa $detailSewa
 * @property Penyewa $penyewa
 */
class Sewa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sewa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penyewa', 'tgl_sewa', 'jaminan'], 'required'],
            [['id_penyewa'], 'integer'],
            [['tgl_sewa'], 'safe'],
            [['jaminan'], 'string', 'max' => 15],
            [['id_penyewa'], 'exist', 'skipOnError' => true, 'targetClass' => Penyewa::className(), 'targetAttribute' => ['id_penyewa' => 'id_penyewa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_nota' => 'No Nota',
            'id_penyewa' => 'Id Penyewa',
            'tgl_sewa' => 'Tgl Sewa',
            'jaminan' => 'Jaminan',
        ];
    }

    /**
     * Gets query for [[DetailSewa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailSewa()
    {
        return $this->hasOne(DetailSewa::className(), ['no_nota' => 'no_nota']);
    }

    /**
     * Gets query for [[Penyewa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenyewa()
    {
        return $this->hasOne(Penyewa::className(), ['id_penyewa' => 'id_penyewa']);
    }
}
