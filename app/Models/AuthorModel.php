<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuthorModel extends Model
{
    use SoftDeletes;
    
    protected $table = 'table_authors';
    
    protected $fillable = [
        'name',
        'age',
        'information',
        'photo_path',
        'photo_name'
    ];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'id_author');
    }
}

