<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trade */

$this->title = 'Update Trade: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Trades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'username' => $model->username, 'idphone' => $model->idphone]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
