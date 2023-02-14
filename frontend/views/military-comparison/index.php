<?php

/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 * 军事力量对比视图
 * 还有四个子文件，放在web目录下
 */


use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MilitaryComparisonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Military Comparisons';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
body
{
    background-image:url('https://www.aljazeera.com/wp-content/uploads/2022/03/INTERACTIVE-Russia-Ukraine-map-Who-controls-what-in-Ukraine-DAY-8.png?resize=770%2C513&quality=80');
    background-size:cover;
    background-repeat:repeat;
}
</style>
<div class="military-comparison-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'rowOptions'=>function($model,$key, $index){

            
        //         return ['style'=>[
        //             'background: #e8edff', 
        //             'font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif',
        //             'font-size: 12px',
        //             'margin: 45px',
        //             'width: 480px',
        //             'text-align: left',
        //             'border-collapse: collapse',
        //             'padding: 8px',
	    //             'color: #669'
        //         ]];
            
        // },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            

            ],

            [
                'label'=>'country',
                'enableSorting'=>false,
                'attribute'=>'country',
                //'contentOptions' => ['style'=>'color:DarkTurquoise'],

            ],
            [
                'label'=>'indicator',
                'attribute'=>'indicator',
                'content'=>function($model){
                    $attributes = $model->getAttributes();
                    // echo Html::beginTag('ul');
                    // foreach ($attributes as $attributeName => $attributeValue) {
                    //     echo Html::tag('li', $attributeName . ': ' . Html::encode($attributeValue));
                    // }
                    // echo Html::endTag('ul
                    if($model->indicator=="Air force"){
                        return Html::a($model->indicator,'../web/view_Airforce.php', ['class' => 'btn btn-info']);
                    }        
                    else if($model->indicator=="Land power"){
                        return Html::a($model->indicator,'../web/view_Land_power.php', ['class' => 'btn btn-info']);
                    }             
                    else if($model->indicator=="Naval force"){
                        return Html::a($model->indicator,'../web/view_Naval_force.php', ['class' => 'btn btn-info']);
                    }
                    else if($model->indicator=="Personnel"){
                        return Html::a($model->indicator,'../web/view_Personnel.php', ['class' => 'btn btn-info']);
                    }     
                    else {
                        return Html::encode($model->indicator);
                    }
                },

            ],
            [
                'label'=>'count',
                'enableSorting'=>false,
                'attribute'=>'count',
                //'contentOptions' => ['style'=>'color:DarkTurquoise'],

            ],
            [

                'label'=>'millions_capita',
                'enableSorting'=>false,
                'attribute'=>'millions_capita',
                //'contentOptions' => ['style'=>'color:DarkTurquoise'],
            ]
            
        ],
        'layout'=>"{items}\n{pager}"
    ]); ?>

    <?php Pjax::end(); ?>

</div>
