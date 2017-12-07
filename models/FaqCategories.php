<?php

namespace pantera\faq\models;

use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "faq_categories".
 *
 * @property integer $id
 * @property string $title
 * @property string $created_at
 *
 * @property FaqQuestions[] $faqQuestions
 * @property FaqQuestions[] $activeFaqQuestions
 */
class FaqCategories extends \yii\db\ActiveRecord
{

    /**
     * Возврашает список всех элементов модели
     * @param bool $map Если true то вернет массив для селекта
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getList($map = true)
    {
        $models = self::find()->all();
        if ($map) {
            $models = ArrayHelper::map($models, 'id', 'title');
        }
        return $models;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqQuestions()
    {
        return $this->hasMany(FaqQuestions::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActiveFaqQuestions()
    {
        return $this->hasMany(FaqQuestions::className(), ['category_id' => 'id'])
            ->where(['=', 'status', '1'])
            ->orderBy(['sort' => SORT_ASC]);
    }
}
