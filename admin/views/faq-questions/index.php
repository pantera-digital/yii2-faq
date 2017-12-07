<?php

use pantera\faq\models\FaqCategories;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel \common\modules\cms\faq\common\models\FaqQuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faq Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-questions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Create Faq Questions', ['create'], ['class' => 'btn btn-success index-create-btn']) ?>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            [
                'attribute' => 'category_id',
                'value' => 'category.title',
                'filter' => Html::activeDropDownList($searchModel, 'category_id', FaqCategories::getList(), [
                    'prompt' => '---',
                    'class' => 'form-control',
                ]),
            ],
            'title',
            [
                'attribute' => 'status',
                'format' => 'html',
                'value' => function($model){
                    $class = $model->status ? 'success' : 'danger';
                    return '<span class="label label-' . $class . '">' . $model->getStatusName()[$model->status] . '</span>';
                },
                'filter' => Html::activeDropDownList($searchModel, 'status', $searchModel->getStatusName(), [
                    'prompt' => '---',
                    'class' => 'form-control',
                ]),
            ],
            'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
