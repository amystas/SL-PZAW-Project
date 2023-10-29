<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $table ='articles';
    protected $fillable = ['title', 'author_id', 'content', 'category_id', 'publish_date'];

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
