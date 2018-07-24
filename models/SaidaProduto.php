<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%saida_produto}}".
 *
 * @property int $id
 * @property int $id_produto
 * @property int $qtde
 * @property string $data_saida
 * @property string $valor_unitario
 */
class SaidaProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%saida_produto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produto', 'qtde'], 'integer'],
            [['data_saida'], 'safe'],
            [['valor_unitario'], 'number'],
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
            'data_saida' => 'Data Saida',
            'valor_unitario' => 'Valor Unitario',
        ];
    }
}
