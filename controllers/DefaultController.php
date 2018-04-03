<?php

namespace pantera\faq\controllers;

use pantera\faq\models\FaqCategories;
use pantera\faq\models\FaqQuestions;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Faq controller
 */
class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

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