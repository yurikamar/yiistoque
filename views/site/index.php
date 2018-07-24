<?php

/* @var $this yii\web\View */

$this->title = 'Yiistoque';
?>
<div class="site-index">

    <div class="jumbotron">
        
<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach ($pessoas as $pessoa): ?>
        <li>
            <?= $pessoa->nome . ' ' . $pessoa->email ?><br />
            <small><?= $pessoa->cidade . ' (' . $pessoa->estado . ')' ?></small>
        </li>
    <?php endforeach ?>
    
</ul>

<h1>Produtos</h1>
<hr>

<ul>
    <?php foreach ($produtos as $produto): ?>
        <li>
            <?= 'Descrição: ' . $produto->descricao . ' - ' . ' Status: ' . $produto->status ?><br />
            <small><?= 'Estoque Minimo: ' . $produto->estoque_minimo . 'Estoque Maximo: ' . ' (' . $produto->estoque_maximo . ')' ?></small>
        </li>
    <?php endforeach ?>

</ul>

    </div>

    <div class="body-content">


    </div>
</div>
