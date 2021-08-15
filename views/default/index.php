<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $category \pantera\faq\models\FaqCategories */
/* @var $question \pantera\faq\models\FaqQuestions */

$this->title = 'FAQ';
$this->params['breadcrumbs'][] = ['label' => 'FAQ'];

?><h1 class="page-title"><?= Html::encode($this->title) ?></h1>

<div class="faq-page">
<?php foreach ($categories as $category): ?>
    <?php if ($questions = $category->activeFaqQuestions) : ?>
    <div class="faq-category">
        <h3><?= $category->title ?></h3>
        <div class="panel-group" id="faq_category<?= $category->id ?>" role="tablist" aria-multiselectable="true">
            <?php foreach ($questions as $question): ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="faq_question_<?= $question->id ?>">
                    <a class="panel-title" role="button" data-toggle="collapse" data-parent="#faq_category<?= $category->id ?>" href="#faq_question_text_<?= $question->id ?>" aria-expanded="true" aria-controls="faq_question_text_<?= $question->id ?>">
                        <?= $question->title ?>
                    </a>
                </div>
                <div id="faq_question_text_<?= $question->id ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq_question_<?= $question->id ?>">
                    <div class="panel-body">
                        <?= $question->body ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>
