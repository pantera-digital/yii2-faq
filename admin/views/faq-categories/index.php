<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel \common\modules\cms\faq\common\models\FaqCategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faq Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Create Faq Categories', ['create'], ['class' => 'btn btn-success index-create-btn']) ?>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'title',
            'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
