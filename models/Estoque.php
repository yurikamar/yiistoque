<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%estoque}}".
 *
 * @property int $id
 * @property int $id_produto
 * @property int $qtde
 * @property string $valor_unitario
 */
class Estoque extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%estoque}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_produto', 'qtde'], 'integer'],
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
            'valor_unitario' => 'Valor Unitario',
        ];
    }
}
