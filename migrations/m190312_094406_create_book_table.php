<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m190312_094406_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'book_name' => $this->char('100')->notNull(),
            'author_id' => $this->integer(),
        ]);

        $this->addForeignKey('fk-book-author_id', 'book', 'author_id', 'author', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
