<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * productSearch represents the model behind the search form about `app\models\Product`.
 */
class productSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phonename', 'brand', 'imglink', 'idphone'], 'safe'],
            [['price', 'quality', 'age'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Product::find();

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
            'price' => $this->price,
            'quality' => $this->quality,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'phonename', $this->phonename])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'imglink', $this->imglink])
            ->andFilterWhere(['like', 'idphone', $this->idphone]);

        return $dataProvider;
    }
}
