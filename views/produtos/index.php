<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\Models\Unidade;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdutosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Novo Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Descricao',
            [
                'attribute'=>'IDUnidade',
                'value' => function ($model) {
                    return Unidade::find()->where(['ID' => $model->IDUnidade])->one()->Descricao;
                },
                'filter'=>ArrayHelper::map(Unidade::find()->asArray()->all(), 'ID', 'Descricao'),
            ],
            'ValorUnitario',
            [
                'attribute'=>'Validade',
                'value' => function($model) { 
                        return $model->Validade = date('d/m/Y', strtotime($model->Validade)); 
                }
            ],
            [
                'attribute'=>'Status',
                'value' => function($model) { 
                        if ($model->Status == 1) {
                            return "Ativo"; }
                        else {
                            return "Inativo"; }
                    },
                'filter'=>array("1"=>"Ativo","2"=>"Inativo"),
                ],
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'ID' => $model->ID]);
                     }
                ],
        ],
    ]); ?>

</div>


