<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $primarykey = 'id';

    public function images()
    {
       return $this
       ->belongstoMany(Image::class, 'article_image', 'article_id', 'image_id')
       ->orderBy('titre')
       ->get();
    }
}
