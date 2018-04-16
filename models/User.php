<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property int $status
 * @property int $isAdmin
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'isAdmin'], 'integer'],
            [['created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'password', 'auth_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'isAdmin' => 'Is Admin',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
