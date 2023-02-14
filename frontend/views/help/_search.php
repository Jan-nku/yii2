<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HelpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="help-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hid') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'donator') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'kind') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
