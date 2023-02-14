<?php

namespace frontend\controllers;

/**
 * Team: RollRollTeam
 * Coding by 运开 2012619
 * 军事力量对比controller
 */

use Yii;
use common\models\MilitaryComparison;
use frontend\models\MilitaryComparisonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MilitaryComparisonController implements the CRUD actions for MilitaryComparison model.
 */
class MilitaryComparisonController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MilitaryComparison models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MilitaryComparisonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MilitaryComparison model.
     * @param string $country
     * @param string $indicator
     * @param integer $count
     * @param double $millions_capita
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($country, $indicator, $count, $millions_capita)
    {
        return $this->render('view', [
            'model' => $this->findModel($country, $indicator, $count, $millions_capita),
        ]);
    }

    /**
     * Creates a new MilitaryComparison model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MilitaryComparison();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'country' => $model->country, 'indicator' => $model->indicator, 'count' => $model->count, 'millions_capita' => $model->millions_capita]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MilitaryComparison model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $country
     * @param string $indicator
     * @param integer $count
     * @param double $millions_capita
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($country, $indicator, $count, $millions_capita)
    {
        $model = $this->findModel($country, $indicator, $count, $millions_capita);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'country' => $model->country, 'indicator' => $model->indicator, 'count' => $model->count, 'millions_capita' => $model->millions_capita]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MilitaryComparison model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $country
     * @param string $indicator
     * @param integer $count
     * @param double $millions_capita
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($country, $indicator, $count, $millions_capita)
    {
        $this->findModel($country, $indicator, $count, $millions_capita)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MilitaryComparison model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $country
     * @param string $indicator
     * @param integer $count
     * @param double $millions_capita
     * @return MilitaryComparison the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($country, $indicator, $count, $millions_capita)
    {
        if (($model = MilitaryComparison::findOne(['country' => $country, 'indicator' => $indicator, 'count' => $count, 'millions_capita' => $millions_capita])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
