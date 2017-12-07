<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $category \pantera\faq\models\FaqCategories */
/* @var $question \pantera\faq\models\FaqQuestions */

$this->title = 'FAQ & help center';
?>

<div class="block-header">
    <h2 class="page-title">
        <?= Yii::t('frontend', 'Help base') ?>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body card-padding">
                <div class="row help-page">
                    <?php foreach ($categories as $category): ?>
                        <?php
                        $questions = $category->activeFaqQuestions;
                        if (empty($questions)) {
                            continue;
                        }
                        ?>
                        <div class="col-md-4 help-group">
                            <h3><?= $category->title ?></h3>
                            <ul>
                                <?php foreach ($questions as $question): ?>
                                    <li class="help-item">
                                        <?= Html::a($question->title, Url::to(['view', 'id' => $question->id]), [
                                            'data' => [
                                                'toggle' => 'modal',
                                                'target' => '#modal'
                                            ],
                                        ]) ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>