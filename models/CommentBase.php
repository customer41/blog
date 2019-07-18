<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property int $article_id
 * @property string $created
 */

class CommentBase extends ActiveRecord
{
    public static function tableName()
    {
        return 'comments';
    }

    public function rules()
    {
        return [
            [['text', 'user_id', 'article_id'], 'required'],
            [['text'], 'string'],
            [['user_id', 'article_id'], 'integer'],
            [['created'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'article_id' => 'Article ID',
            'created' => 'Created',
        ];
    }
}
