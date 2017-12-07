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
}