<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidade".
 *
 * @property int $ID
 * @property string|null $Descricao
 *
 * @property Produtos[] $produtos
 */
class Unidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Descricao'], 'required'],
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
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::className(), ['IDUnidade' => 'ID']);
    }
}
