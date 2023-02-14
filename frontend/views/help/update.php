<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Help */

$this->title = 'Update Help: ' . $model->hid;
$this->params['breadcrumbs'][] = ['label' => 'Helps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hid, 'url' => ['view', 'id' => $model->hid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="help-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
