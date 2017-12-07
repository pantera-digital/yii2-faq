<?php

namespace pantera\faq\models;

/**
 * This is the model class for table "faq_questions".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $body
 * @property integer $sort
 * @property string $status
 * @property string $created_at
 *
 * @property FaqCategories $category
 */
class FaqQuestions extends \yii\db\ActiveRecord
{

    public function getStatusName()
    {
        return [
            0 => 'Not active',
            1 => 'Active',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq_questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'body'], 'required'],
            [['category_id', 'sort'], 'integer'],
            [['body', 'status'], 'string'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => FaqCategories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'body' => 'Body',
            'sort' => 'Sort',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(FaqCategories::className(), ['id' => 'category_id']);
    }
}
