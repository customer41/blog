<?php

use yii\db\Migration;

class m190717_124108_createCommentsTable extends Migration
{
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'article_id' => $this->integer()->notNull(),
            'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
