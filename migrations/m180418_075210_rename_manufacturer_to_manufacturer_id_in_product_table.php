<?php

use yii\db\Migration;

/**
 * Class m180418_075210_rename_manufacturer_to_manufacturer_id_in_product_table
 */
class m180418_075210_rename_manufacturer_to_manufacturer_id_in_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('product', 'manufacturer');
        $this->addColumn('product', 'manufacturer_id', $this->integer()->after('id'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180418_075210_rename_manufacturer_to_manufacturer_id_in_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180418_075210_rename_manufacturer_to_manufacturer_id_in_product_table cannot be reverted.\n";

        return false;
    }
    */
}
