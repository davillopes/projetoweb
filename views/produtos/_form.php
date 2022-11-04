<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Unidade;

use yii\bootstrap5\Modal;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Produtos */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    #form-button{
        position: relative;
        margin-left: 0%;
        margin-top: 10px;
        
    }

    #checkboxdiv {
        margin-top: 30px;
    }
</style>
<script>
    function handleClick(cb) {
        if (cb.checked == true) {
            $("#produtos-status").val(1).trigger("change");
        } else {
            $("#produtos-status").val(2).trigger("change");
        }
    }
</script>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="checkboxdiv" class="col-lg-2"> 
        <label><input type='checkbox' onclick='handleClick(this);'> Ativo</label>
        </div>
        <?= $form->field($model, 'Status')->hiddenInput()->label(false); ?>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <?php 
                $unidade = \app\models\Unidade::find()->all(); 
                $listData = ArrayHelper::map($unidade,'ID','Descricao'); 
            ?>

            <?= $form->field($model, 'IDUnidade')->dropDownList($listData,['prompt'=>'']) ?>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <?= $form->field($model, 'ValorUnitario')->textInput([
                'maxlength' => true,
                ])->input('decimal', ['min' => 0, 'max' => 10000, 'step' => 1]) ?>
        </div>
    </div>


    <div class="col-md-2">
        <?= $form->field($model, 'Validade')->widget(DatePicker::className(), [
            'options' => ['placeholder' => 'Selecione a validade ...'],
            'pluginOptions' => [
                'format' => 'dd/mm/yyyy',
                'todayHighlight' => true,
                'autoclose' => true,
        ]
    ])->label('Validade');
    ?>
    </div>
    <div class="row">
       
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div id="form-button">
            <?=
                $criar == 1 ?
                    Html::submitButton('Criar', ['class' => 'btn btn-primary']) 
                :  Html::submitButton('Salvar', ['class' => 'btn btn-success'])  
                
            ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
