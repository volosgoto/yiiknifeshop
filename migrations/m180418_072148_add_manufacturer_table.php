<?php

use yii\db\Migration;

/**
 * Class m180418_072148_add_manufacturer_table
 */
class m180418_072148_add_manufacturer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('manufacturer', [
            'id' => $this->primaryKey(),
            'name' => $this->string('100')->notNull()->unique(),
            'keywords' => $this->string('100'),
            'description' => $this->string('255'),
            'status' => $this->integer(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180418_072148_add_manufacturer_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180418_072148_add_manufacturer_table cannot be reverted.\n";

        return false;
    }
    */
}
