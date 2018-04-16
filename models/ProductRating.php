<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_rating".
 *
 * @property int $id
 * @property int $product_id
 * @property int $hit
 * @property int $new
 * @property int $sale
 * @property int $rating
 */
class ProductRating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_rating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'hit', 'new', 'sale', 'rating'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            'rating' => 'Rating',
        ];
    }
}
