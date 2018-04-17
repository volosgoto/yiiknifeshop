<?php

use yii\db\Migration;

/**
 * Class m180417_122431_move_manufacturer_collum_in_product_table
 */
class m180417_122431_move_manufacturer_collum_in_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('product', 'manufacturer', $this->integer()->after('category_id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180417_122431_move_manufacturer_collum_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
