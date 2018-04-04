<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180403_113349_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'password' => $this->string(),

//            'date'=>$this->date(),
//            'image'=>$this->string(),
            'status'=>$this->integer(),
            'isAdmin'=>$this->integer(),
            'created_at'=>$this->date()->notNull(),
            'updated_at'=>$this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
