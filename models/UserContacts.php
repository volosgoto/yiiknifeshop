<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_contacts".
 *
 * @property int $id
 * @property int $user_id
 * @property string $image
 * @property string $phone
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house
 * @property string $apartment
 */
class UserContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['image', 'phone', 'country', 'region', 'city', 'street', 'house', 'apartment'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'phone' => 'Phone',
            'country' => 'Country',
            'region' => 'Region',
            'city' => 'City',
            'street' => 'Street',
            'house' => 'House',
            'apartment' => 'Apartment',
        ];
    }
}
