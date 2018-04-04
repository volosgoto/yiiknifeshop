<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_contacts`.
 */
class m180404_073755_create_user_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_contacts', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'phone'=>$this->string(),
            'country'=>$this->string(),
            'region'=>$this->string(),
            'street'=>$this->string(),
            'house'=>$this->string(),
            'appartment'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user_contacts');
    }
}
