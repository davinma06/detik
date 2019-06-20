<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'articles';
    protected $fillable = [
        'article_image_preview',
        'article_title',
        'article_content',
        'views',
        'created_id',
    ];

}
