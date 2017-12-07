<?php

use yii\db\Migration;

/**
 * Handles the creation for table `faq_categories`.
 */
class m160906_064633_create_faq_categories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%faq_categories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%faq_categories}}');
    }
}
