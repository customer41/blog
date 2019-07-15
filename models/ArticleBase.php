<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $created
 */

class ArticleBase extends ActiveRecord
{
    public static function tableName()
    {
        return 'articles';
    }

    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['body'], 'string'],
            [['created'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'created' => 'Created',
        ];
    }
}
