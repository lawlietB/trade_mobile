<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\productSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'phonename') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'quality') ?>

    <?= $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'imglink') ?>

    <?php // echo $form->field($model, 'idphone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
