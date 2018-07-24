<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntradaProduto */

$this->title = 'Create Entrada Produto';
$this->params['breadcrumbs'][] = ['label' => 'Entrada Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrada-produto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
