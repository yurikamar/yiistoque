<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SaidaProduto */

$this->title = 'Create Saida Produto';
$this->params['breadcrumbs'][] = ['label' => 'Saida Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saida-produto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
