<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `position_prent_id_from_ctegory`.
 */
class m180417_060824_drop_position_parent_id_from_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('category', 'parent_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
