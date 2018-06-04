<?php

namespace pantera\faq\controllers;

use pantera\faq\models\FaqCategories;
use pantera\faq\Module;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Faq controller
 * @property Module $module
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
                        'roles' => $this->module->access,

                    ],
                ],
            ],
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