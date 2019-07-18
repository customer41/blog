<?php

namespace app\models;

class Comment extends CommentBase
{
    public function getArticle()
    {
        return $this->hasOne(Article::class, ['id' => 'article_id']);
    }

    public function getUser()
    {
        return $this->hasOne(MyUser::class, ['id' => 'user_id']);
    }
}