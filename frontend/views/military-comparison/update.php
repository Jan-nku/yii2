<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MilitaryComparison */

$this->title = 'Update Military Comparison: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'country' => $model->country, 'indicator' => $model->indicator, 'count' => $model->count, 'millions_capita' => $model->millions_capita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="military-comparison-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
