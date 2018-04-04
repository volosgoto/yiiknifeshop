<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180403_115716_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->text(),
            'status'=>$this->integer(),
            'price' => $this->float(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'image' => $this->string(),
//            'hit' => $this->integer(),
//            'new' => $this->integer(),
//            'sale' => $this->integer(),
            'created_at'=>$this->date()->notNull(),
            'updated_at'=>$this->date(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
