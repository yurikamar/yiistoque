<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaidaProduto */

$this->title = 'Update Saida Produto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Saida Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="saida-produto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
