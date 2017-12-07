<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \common\modules\cms\faq\common\models\FaqQuestions */

$this->title = 'Update Faq Questions: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Faq Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="faq-questions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
