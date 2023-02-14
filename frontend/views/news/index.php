<?php

/**
 * Team: RollRollTeam
 * Coding by 许健 2013018
 * 新闻检索视图
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\News;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NpArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
body
{
    background-image:url('https://static.runoob.com/images/mix/gradient2.png');
    background-repeat:repeat-x;
}
</style>

<div class="news-index" style="font-size: 20px">

<!--
    <?= Html::encode($this->title) ?>
-->    

    <!--前端无创建功能
    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    -->

    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'label'=>"相关新闻",
                'attribute'=>'title',
                'content'=>function($model){

                    return Html::a($model->title,$model->url);
                }
            ],
        ],
        'layout'=>"{items}\n{pager}"
    ]); ?>

    <?php Pjax::end(); ?>

    <?php
    /*
        $news = News::find()->all();
        foreach ($news as $onenews) {
            echo $onenews->title . '<br>';
        }
    */
    ?>


</div>

