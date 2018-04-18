<?php

use yii\db\Migration;

/**
 * Class m180418_073642_roll_back_parent_id_category_table
 */
class m180418_073642_roll_back_parent_id_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'parent_id', $this->integer()->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180418_073642_roll_back_parent_id_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180418_073642_roll_back_parent_id_category_table cannot be reverted.\n";

        return false;
    }
    */
}
