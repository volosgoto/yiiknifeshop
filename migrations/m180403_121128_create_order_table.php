<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m180403_121128_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'created_at'=>$this->date()->notNull(),
            'updated_at'=>$this->date(),
            'qty' => $this->integer(),
            'status' => $this->integer(),
            'sum' => $this->float(),
            'discount' => $this->float(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'address' => $this->string(),

            // TODO add delivery_options, delivery table
            'delivery_options' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
