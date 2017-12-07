<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \common\modules\cms\faq\common\models\FaqQuestions */

$this->title = 'Create Faq Questions';
$this->params['breadcrumbs'][] = ['label' => 'Faq Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-questions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
