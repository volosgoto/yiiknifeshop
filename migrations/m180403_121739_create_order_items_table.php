<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order_items`.
 */
class m180403_121739_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_items', [

            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'created_at'=>$this->date()->notNull(),
            'name' => $this->string(255),
            'qty_item' => $this->integer(),
            'sum_item' => $this->float(),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order_items');
    }
}
