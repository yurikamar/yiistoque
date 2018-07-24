<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaidaProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Saida Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saida-produto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Saida Produto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_produto',
            'qtde',
            'data_saida',
            'valor_unitario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
