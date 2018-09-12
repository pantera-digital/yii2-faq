<?php

namespace pantera\faq\admin;

class Module extends \yii\base\Module
{
    public function getMenuItems() {
        return [
            [
                'label' => 'FAQ Категории',
                'url' => ['/faq/faq-categories/index'],
            ],
            [
                'label' => 'FAQ Вопросы',
                'url' => ['/faq/faq-questions/index'],
            ],
        ];
     }
    
}
