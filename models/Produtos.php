<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $ID
 * @property string|null $Descricao
 * @property int|null $IDUnidade
 * @property float|null $ValorUnitario
 * @property string|null $Validade
 * @property int|null $Status
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descricao', 'IDUnidade', 'ValorUnitario', 'Validade' ], 'required'],
            [['IDUnidade', 'Status'], 'integer'],
            [['ValorUnitario'], 'number'],
            [['Validade'], 'safe'],
            [['Descricao'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Descricao' => 'Descrição',
            'IDUnidade' => 'Unidade',
            'ValorUnitario' => 'Valor Unitário',
            'Validade' => 'Validade',
            'Status' => 'Status',
        ];
    }
}
