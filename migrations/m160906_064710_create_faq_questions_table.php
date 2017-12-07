<?php

use yii\db\Migration;

/**
 * Handles the creation for table `faq_questions`.
 */
class m160906_064710_create_faq_questions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%faq_questions}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
            'sort' => $this->integer(),
            'status' => $this->boolean()->defaultValue(1),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('idx-category_id', '{{%faq_questions}}', 'category_id');
        $this->addForeignKey('idx-category_id:faq_categories-id', '{{%faq_questions}}', 'category_id', 'faq_categories', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('idx-category_id:faq_categories-id', '{{%faq_questions}}', 'category_id');
        $this->dropTable('{{%faq_questions}}');
    }
}
