<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

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
class Product extends ActiveRecord
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

            [['created_at'], 'date', 'format'=>'php:Y-m-d'],
            [['created_at'], 'default', 'value' => date('Y-m-d')],

            [['updated_at'], 'date', 'format'=>'php:Y-m-d'],
            [['updated_at'], 'default', 'value' => date('Y-m-d')],

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

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
