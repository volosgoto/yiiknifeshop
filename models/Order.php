<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 * @property int $qty
 * @property int $status
 * @property double $sum
 * @property double $discount
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $delivery_options
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'qty', 'status', 'delivery_options'], 'integer'],
            [['created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['sum', 'discount'], 'number'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'qty' => 'Qty',
            'status' => 'Status',
            'sum' => 'Sum',
            'discount' => 'Discount',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'delivery_options' => 'Delivery Options',
        ];
    }
}
