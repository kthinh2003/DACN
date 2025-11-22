<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'table_authors';
    protected $fillable = [
        'name',
        'birth_year',
        'bio',
        'subtitle',
        'color',
        'gradient',
        'tag1',
        'tag2',
        'avatar_path',
        'status'
    ];

    public function poems()
    {
        return $this->hasMany(PoemModel::class, 'id_author');
    }
}
