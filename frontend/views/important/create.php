<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Important */

$this->title = 'Create Important';
$this->params['breadcrumbs'][] = ['label' => 'Importants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="important-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
