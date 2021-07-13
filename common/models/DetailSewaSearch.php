<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailSewa;

/**
 * DetailSewaSearch represents the model behind the search form of `common\models\DetailSewa`.
 */
class DetailSewaSearch extends DetailSewa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_nota', 'no_mobil', 'id_driver', 'pembayaran', 'denda'], 'integer'],
            [['tgl_kembali'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetailSewa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no_nota' => $this->no_nota,
            'no_mobil' => $this->no_mobil,
            'id_driver' => $this->id_driver,
            'tgl_kembali' => $this->tgl_kembali,
            'pembayaran' => $this->pembayaran,
            'denda' => $this->denda,
        ]);

        return $dataProvider;
    }
}
