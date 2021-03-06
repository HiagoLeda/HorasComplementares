<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comissao */

$this->title = 'Novo Avaliador';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
        <li><a href="?r=comissao/index"><i class="fa fa-calendar"></i> Comissão Monitoria</a></li>
        <li class="active"><a href="?r=comissao/create">Cadastro</a></li>
    </ol>
</section>
<section class="content">
<div class="box box-success">    
    <div class="comissao-create box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    </div>
</div>
</section>
