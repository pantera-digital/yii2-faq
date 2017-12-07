<?php

namespace pantera\faq\controllers;

use pantera\faq\models\FaqCategories;
use pantera\faq\models\FaqQuestions;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Faq controller
 */
class DefaultController extends Controller
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $categories = FaqCategories::find()->all();
        return $this->render('index', [
            'categories' => $categories
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        $model = FaqQuestions::findOne($id);
        if (is_null($model)) {
            throw new NotFoundHttpException();
        }
        return $model;
    }
}