<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'image';
    protected $primarykey = 'id';

    public function articles()
    {
       return $this->belongstoMany(Article::class, 'article_image', 'image_id', 'article_id');
    }
}
