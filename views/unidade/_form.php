<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Unidade */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    #form-button {
        margin-top: 10px;
        margin-left: 0%;
    }
</style>

<div class="unidade-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="col-lg-3">
    <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>
</div>
   

    <div id="form-button">
            <?=
                $criar == 1 ?
                    Html::submitButton('Criar', ['class' => 'btn btn-primary']) 
                :  Html::submitButton('Salvar', ['class' => 'btn btn-success'])  
                
            ?>
            </div>

    <?php ActiveForm::end(); ?>

</div>
