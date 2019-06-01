<?php

use yii\db\Migration;

class m190531_155802_addAdminToUsersTable extends Migration
{
    public function safeUp()
    {
        $this->insert('users', [
            'username' => 'Admin',
            'password' => '$2y$13$WvCKerkKIOWp39is0tfyduzxgFDgluHHK.3lJcgOIEcoeh1SZpa1a',
            'email' => 'alien1986cs@gmail.com',

        ]);
    }

    public function safeDown()
    {
        $this->delete('users', ['username' => 'Admin']);
    }
}
