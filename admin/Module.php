<?php

namespace pantera\faq\admin;

class Module extends \yii\base\Module
{
	/**
	 *	array of roles
	 */
	public $access = ['admin'];

    public function getMenuItems()
    {
        return [['label' => 'FAQ', 'url' => '#', 'icon' => 'question', 'items' => [
            ['label' => 'FAQ Категории', 'url' => ['/faq/faq-categories/index']],
            ['label' => 'FAQ Вопросы', 'url' => ['/faq/faq-questions/index']],
        ]]];
    }
}
