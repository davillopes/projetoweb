<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Unidade;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */

$this->title = $model->Descricao;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produtos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você tem certeza que deseja excluir esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Descricao',
            [
              'attribute'=>'IDUnidade',
              'value' => function($model) { return Unidade::findOne($model->IDUnidade)->Descricao;}, 
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
                    }     
                ],
        ],
         
    ]) 
    
    ?>

</div>
