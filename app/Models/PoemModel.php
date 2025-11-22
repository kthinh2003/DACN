<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PoemModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'table_poems';
    protected $fillable = [
        'id_author',
        'title',
        'content',
        'year',
        'views',
        'likes',
        'status'
    ];

    public function author()
    {
        return $this->belongsTo(AuthorModel::class, 'id_author');
    }
}
