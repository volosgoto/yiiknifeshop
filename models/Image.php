<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $item_id
 * @property string $file_path
 * @property string $isMain
 * @property string $name
 * @property string $alias
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias'], 'string'],
            [['item_id', 'file_path', 'isMain'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'file_path' => 'File Path',
            'isMain' => 'Is Main',
            'name' => 'Name',
            'alias' => 'Alias',
        ];
    }
}
