<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trade */

$this->title = 'Create Trade';
$this->params['breadcrumbs'][] = ['label' => 'Trades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
