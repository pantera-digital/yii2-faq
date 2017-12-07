<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\cms\faq\common\models\FaqCategories */

$this->title = 'Update Faq Categories: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Faq Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faq-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
