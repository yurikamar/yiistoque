<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%entrada_produto}}".
 *
 * @property int $id
 * @property int $id_produto
 * @property int $qtde
 * @property string $valor_unitario
 * @property string $data_entrada
 */
class EntradaProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%entrada_produto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produto', 'qtde'], 'integer'],
            [['valor_unitario'], 'number'],
            [['data_entrada'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_produto' => 'Id Produto',
            'qtde' => 'Qtde',
            'valor_unitario' => 'Valor Unitario',
            'data_entrada' => 'Data Entrada',
        ];
    }
}
