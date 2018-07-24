<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%produto}}".
 *
 * @property int $id
 * @property string $status
 * @property string $descricao
 * @property int $estoque_minimo
 * @property int $estoque_maximo
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%produto}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estoque_minimo', 'estoque_maximo'], 'integer'],
            [['status'], 'string', 'max' => 1],
            [['descricao'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'descricao' => 'Descricao',
            'estoque_minimo' => 'Estoque Minimo',
            'estoque_maximo' => 'Estoque Maximo',
        ];
    }
}
