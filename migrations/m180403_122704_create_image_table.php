<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m180403_122704_create_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('image', [
            'id' => $this->primaryKey(),
            'item_id' => $this->string(255),
            'file_path' => $this->string(255),
            'isMAin' => $this->string(255),
            'name' => $this->text(),
            'alias' => $this->text(),
            // Пока так. Потом можно добавть в зависисости что прикручивать как менеджер изображений
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('image');
    }
}
