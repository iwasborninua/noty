<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%autor}}`.
 */
class m190312_094356_create_autor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%autor}}', [
            'id' => $this->primaryKey(),
            'autor_name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%autor}}');
    }
}
