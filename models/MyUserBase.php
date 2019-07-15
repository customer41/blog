<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $authKey
 * @property string $accessToken
 * @property string $created
 */

class MyUserBase extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['created'], 'safe'],
            [['username', 'password', 'email', 'authKey', 'accessToken'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'created' => 'Created',
        ];
    }
}
