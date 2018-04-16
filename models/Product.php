<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property int $status
 * @property double $price
 * @property double $discount
 * @property string $keywords
 * @property string $description
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'status'], 'integer'],
            [['content'], 'string'],
            [['price', 'discount'], 'number'],
            [['created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'keywords', 'description', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'content' => 'Content',
            'status' => 'Status',
            'price' => 'Price',
            'discount' => 'Discount',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
