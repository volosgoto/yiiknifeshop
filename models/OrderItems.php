<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $price
 * @property int $discount_price
 * @property string $name
 * @property int $qty_item
 * @property double $sum_item
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price', 'discount_price', 'qty_item'], 'integer'],
            [['sum_item'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'discount_price' => 'Discount Price',
            'name' => 'Name',
            'qty_item' => 'Qty Item',
            'sum_item' => 'Sum Item',
        ];
    }
}
