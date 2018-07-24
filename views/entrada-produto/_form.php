<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntradaProduto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entrada-produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_produto')->textInput() ?>

    <?= $form->field($model, 'qtde')->textInput() ?>

    <?= $form->field($model, 'valor_unitario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_entrada')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
