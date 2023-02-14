<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MilitaryComparison */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="military-comparison-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'country' => $model->country, 'indicator' => $model->indicator, 'count' => $model->count, 'millions_capita' => $model->millions_capita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'country' => $model->country, 'indicator' => $model->indicator, 'count' => $model->count, 'millions_capita' => $model->millions_capita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country',
            'indicator',
            'count',
            'millions_capita',
        ],
    ]) ?>

</div>
