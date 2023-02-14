<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\NpArticleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<!--
    <?= $form->field($model, 'nid') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'url') ?>
-->

    <div style="col-lg-5">
    <?= $form->field($model, 'title') ?>
    </div>
    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        
        <!--
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
        -->
    </div>


    <?php ActiveForm::end(); ?>

</div>
