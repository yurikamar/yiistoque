<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntradaProduto;

/**
 * EntradaProdutoSearch represents the model behind the search form of `app\models\EntradaProduto`.
 */
class EntradaProdutoSearch extends EntradaProduto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_produto', 'qtde'], 'integer'],
            [['valor_unitario'], 'number'],
            [['data_entrada'], 'safe'],
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
        $query = EntradaProduto::find();

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
            'id' => $this->id,
            'id_produto' => $this->id_produto,
            'qtde' => $this->qtde,
            'valor_unitario' => $this->valor_unitario,
            'data_entrada' => $this->data_entrada,
        ]);

        return $dataProvider;
    }
}
