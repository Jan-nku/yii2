<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MilitaryComparison */

$this->title = 'Create Military Comparison';
$this->params['breadcrumbs'][] = ['label' => 'Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="military-comparison-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
